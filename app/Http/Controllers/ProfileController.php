<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $user->update($request->all());

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
}
