<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('admin.profile');
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'language' => 'required|string',
            'timezone' => 'required|string',
            'date_format' => 'required|string',
        ];

        // Conditional password validation
        if ($request->filled('current_password') || $request->filled('password')) {
            $rules['current_password'] = 'required';
            // Assuming the complexity rules can be mapped to Laravel's Password rule or just regex
            $rules['password'] = ['required', 'min:8', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()];
        }

        $request->validate($rules);

        if ($request->filled('current_password')) {
            if (! \Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'Current password does not match.'])->withInput();
            }
        }

        $data = $request->only('name', 'phone', 'language', 'timezone', 'date_format');

        // Generate a username if empty
        if (empty($user->username)) {
            $data['username'] = strtolower(preg_replace('/\s+/', '', $request->name)).$user->id;
        }

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('profiles', 'public');
            $data['photo'] = '/storage/'.$path;
        }

        if ($request->filled('password')) {
            $data['password'] = \Hash::make($request->password);
        }

        $user->update($data);

        return back()->with('success', 'Profile updated successfully');
    }
}
