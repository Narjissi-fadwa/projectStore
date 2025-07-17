<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function updateRole(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'role' => 'required|in:customer,seller'
        ]);

        $user->update([
            'role' => $request->role
        ]);

        return redirect()->back()->with('success', 'User role updated successfully!');
    }
}