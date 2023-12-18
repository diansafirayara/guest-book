<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function showCheckForm()
    {
        return view('auth.check');
    }

    public function check(Request $request)
    {
        // Logika pemeriksaan atau operasi lainnya saat tombol "Check" ditekan
        // ...

        // Redirect ke halaman lain jika diperlukan
        //return redirect()->route('verifikasiReferral'); // Gantilah 'verifikasi_referral' dengan nama rute yang sesuai. route.name
        return redirect()->route('check.auth'); //check.auth
    }


    public function processCheck(Request $request)
    {
    // ...

    return redirect()->route('verifikasi-referral'); // Sesuaikan dengan nama rute verifikasiReferral yang benar
    }

    public function verifikasiReferral()
    {
    // Logika verifikasi referral di sini
    return view('auth.check'); // Gantilah 'verifikasi_referral' sesuai dengan nama file view yang sesuai.
    } //check.auth


}
