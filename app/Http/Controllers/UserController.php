<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    public function index() { return view('users', ['users' => User::orderBy('id')->get()]); }
    public function create() { return view('user-create'); }
    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => ['required','string','max:50','unique:users,username'],
            'full_name' => ['required','string','max:100'],
            'email' => ['nullable','email','max:100','unique:users,email'],
            'role' => ['nullable','string','max:50'],
            'status' => ['nullable', Rule::in(['Active','Inactive'])],
        ]);
        User::create($data);
        return redirect()->route('users.index')->with('success','User created successfully.');
    }
    public function edit(User $user) { return view('user-edit', compact('user')); }
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'username' => ['required','string','max:50',Rule::unique('users','username')->ignore($user->id)],
            'full_name' => ['required','string','max:100'],
            'email' => ['nullable','email','max:100',Rule::unique('users','email')->ignore($user->id)],
            'role' => ['nullable','string','max:50'],
            'status' => ['nullable',Rule::in(['Active','Inactive'])],
            'avatar' => ['nullable','image','mimes:jpg,jpeg,png,webp','max:2048'],
        ]);
        unset($data['avatar']);
        if ($request->hasFile('avatar')) {
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('avatar')->getRealPath());
            $image->cover(256,256);
            $path = 'avatars/'.Str::uuid().'.jpg';
            Storage::disk('public')->put($path, (string) $image->toJpeg(82));
            if ($user->avatar) Storage::disk('public')->delete($user->avatar);
            $data['avatar'] = $path;
        }
        $user->update($data);
        return redirect()->route('users.index')->with('success','User updated successfully.');
    }
    public function destroy(User $user)
    {
        if (auth()->id() === $user->id) {
            return back()->withErrors(['user' => 'You cannot delete your own signed-in account.']);
        }
        if ($user->avatar) Storage::disk('public')->delete($user->avatar);
        $user->delete();
        return redirect()->route('users.index')->with('success','User deleted.');
    }
}
