<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function edit()
    {
        // Ambil data pengguna yang sedang login
        $user = auth()->user();

        // Tampilkan view untuk edit profil
        return view('edit', compact('user'));
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        // Ambil data pengguna yang sedang login
        $user = auth()->user();

        // Update data pengguna
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        // Redirect ke halaman profil
        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
    }
}
