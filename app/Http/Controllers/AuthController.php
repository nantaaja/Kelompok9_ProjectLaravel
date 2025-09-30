<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function index()
    {
        return view("login-form");
    }

    public function login(Request $request)
    {
        // 1. Terapkan Rule Validasi
        $validated = $request->validate([
            'username' => ['required', 'string'],
            'password' => [
                'required',              // Wajib diisi
                'min:3',                 // Minimal 3 karakter (CUKUP)
                // 'regex:/[A-Z]/',      // ATURAN INI DIHAPUS agar NIM (angka) bisa lolos validasi
            ],
        ]);


        $nim = '2455301140';

        if ($request->username === $nim && $request->password === $nim) {
            // Jika Username dan Password sama dengan NIM
            return redirect()
                ->route('login.form')
                ->with('status', 'success');
        } else {
            // Jika tidak sesuai
            return redirect()
                ->route('login.form')
                ->with('status', 'error')
                ->withInput();
        }
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
