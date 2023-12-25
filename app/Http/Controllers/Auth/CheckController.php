<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\FormData;


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

    //baru
    //public function getPopupData($kodeReferral)
//{
    //$data = \DB::table('form_data')->where('kode_referral', $kodeReferral)->first();

    //return response()->json($data);
//}


//baru bgt
//public function getPopupData($kodeReferral)
//{
    //try {
        //$data = \DB::table('form_data')->where('kode_referral', $kodeReferral)->first();

        //return response()->json($data);
    //} catch (\Exception $e) {
        // Cetak pesan kesalahan
        //dd($e->getMessage());
    //}
//}

//baru bgt bgt bgt

//public function getPopupData($referralCode)
//{

    //baru bgt
    //$data = [
        //'nama' => 'Nama dari database',
        //'keterangan' => 'Keterangan dari database',
    //];

    //return response()->json($data);

    //end baru bgt

    //$formData = DB::table('form_data')
        //->where('id', '=', function ($query) use ($referralCode) {
            //$query->select('id')
                //->from('user')
                //->where('referral_code', '=', $referralCode);
        //})
        //->first();

    //$userData = DB::table('user')
        //->where('referral_code', $referralCode)
        //->first();

    //return response()->json([
        //'formData' => $formData,
        //'userData' => $userData,
    //]);
//}

public function getPopupData($referralCode)
    {
        try {
            $userData = User::where('referral_code', $referralCode)->first();

            if ($userData) {
                $formData = FormData::find($userData->id);

                return response()->json(['userData' => $userData, 'formData' => $formData]);
            } else {
                return response()->json(['userData' => null, 'formData' => null]);
            }
        } catch (\Exception $e) {
            // Tangkap eksepsi dan berikan respons dengan status 500
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }



    //public function showCheckView()
    //{
        //try {
            // Lakukan logika untuk mengatur variabel $error dan $formdata di sini
            //$error = "Pesan kesalahan tertentu"; // Gantilah dengan pesan kesalahan sebenarnya
            //$formdata = FormData::all(); // Lakukan logika untuk mendapatkan data formulir di sini

            //if ($formdata->count() > 0) {
                //return response()->json(['userData' => null, 'formData' => $formdata]);
            //} else {
                //return response()->json(['userData' => null, 'formData' => null]);
            //}

        //} catch (\Exception $e) {
            // Tangkap eksepsi dan berikan respons dengan status 500
            //return response()->json(['error' => $e->getMessage()], 500);
        //}


        // Your logic to set $error and $formdata variables goes here
        //$error = "Some error message"; // Replace with your actual error message
        //$formdata = FormData::all();// Your logic to get form data goes here

        // Pass the variables to the view
        //return view('auth.check')->with('error', $error)->with('formdata', $formdata);
    //}


    public function showCheckView()
    {
        try {
            $error = "Pesan kesalahan tertentu"; // Gantilah dengan pesan kesalahan sebenarnya
            $formData = FormData::all(); // Lakukan logika untuk mendapatkan data formulir di sini

            if ($formData->count() > 0) {
                return view('auth.check', ['error' => null, 'formData' => $formData]);
            } else {
                return view('auth.check', ['error' => null, 'formData' => null]);
            }
        } catch (\Exception $e) {
            return view('auth.check', ['error' => $e->getMessage(), 'formData' => null]);
        }
    }

//baru bgt bgt

public function show($referral_code)
{
    $userData = User::where('referral_code', $referral_code)->first();

    if ($userData) {
        $formdata = FormData::find($userData->id);

        return view('check', ['formdata' => $formdata, 'error' => null]);
    } else {
        return view('check', ['error' => 'User not found.']);
    }
}



}
