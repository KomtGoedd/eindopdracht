<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
{
    $user = auth()->user();
    $user->update($request->all());

    return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
}
}
