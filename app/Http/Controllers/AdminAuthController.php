<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/products');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins',
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);

        $admin = new Admin([
            'username' => $request->username,
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Admin created successfully.');
    }

    // Display the specified resource.
    public function show(Admin $admin)
    {
        return view('admin.show', compact('admin'));
    }

    // Show the form for editing the specified resource.
    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'username' => 'required|unique:admins,username,' . $admin->id,
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        $admin->username = $request->username;
        $admin->name = $request->name;
        $admin->role = $request->role;
        $admin->email = $request->email;

        if ($request->password) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully.');
    }
}