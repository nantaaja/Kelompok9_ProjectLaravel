<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['username']        = 'Heroku';
        $data['last_login']      = date('Y-m-d H:i:s');
        $data['list_pendidikan'] = ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'];
        return view('home', $data);
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name'     => 'required|max:10',
            'email'    => ['required', 'email'],
            'password' => [
                'required',      // Wajib diisi
                'string',        // Harus berupa string
                'min:8',         // Minimal 8 karakter
                'regex:/[a-z]/', // Harus mengandung setidaknya 1 huruf kecil
                'regex:/[A-Z]/', // Harus mengandung setidaknya 1 huruf besar
                'regex:/[0-9]/', // Harus mengandung setidaknya 1 angka
            ],
        ]);
        // dd($request->all());
        $pageData['name']     = $request->name;
        $pageData['email']    = $request->email;
        $pageData['password'] = $request->password;
        return view('signup-success', $pageData);
    }
}
