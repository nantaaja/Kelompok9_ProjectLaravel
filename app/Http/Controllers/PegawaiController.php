<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        // Data Pribadi
        $nama = "Nanta Wilta Wijaya";
        $tanggal_lahir = Carbon::create('2006', '03', '27');
        $semester_saat_ini = 3;
        $tanggal_harus_wisuda = Carbon::create('2026', '10', '19');

        // Menghitung Umur
        $umur = $tanggal_lahir->diffInYears(Carbon::now());

        // Menghitung Jarak Hari ke Wisuda
        $jarak_hari = $tanggal_harus_wisuda->diffInDays(Carbon::now());

        // Menentukan Pesan Berdasarkan Semester
        if ($semester_saat_ini < 3) {
            $pesan_semester = "Masih Awal, Kejar TAK";
        } else {
            $pesan_semester = "Jangan main-main, kurang-kurangi main game!";
        }

        $data = [
            'name' => $nama,
            'my_age' => $umur,
            'hobbies' => ['Main Game', 'Coding', 'Main Musik', 'Traveling', 'Olahraga'],
            'tgl_harus_wisuda' => $tanggal_harus_wisuda->toDateString(),
            'time_to_study_left' => $jarak_hari . ' hari',
            'current_semester' => $semester_saat_ini,
            'info_semester' => $pesan_semester,
            'future_goal' => 'Menjadi Full Stack Developer yang handal',
        ];

        // Meneruskan data ke view 'pegawai'
        return view('pegawai', $data);
    }

    public function show(string $param1)
    {
        if($param1 == 'detail'){
            return view('halaman-mahasiswa-detail');
        } else if ($param1 == 'profil'){
            return view('halaman-mahasiswa-profil');
        }
    }
}
