<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\FormData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;


class FormController extends Controller
{
    public function store(Request $request)
    {
        
        // Validate the form data, including email and password for user registration
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'jumlah_tamu' => 'required|integer',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'domisili' => 'required|string',
            'tujuan' => 'required|string',
            'staff' => 'nullable|string',
            'keterangan' => 'required|string',
        ]);


        // Save form data to the FormData table
        FormData::create($validatedData);

        // Generate referral code
        $referralCode = Str::random(8);

        // Save user data with referral code to the User table
        $user = new User([
            //'name' => $request->name,
            //'email' => $request->email,
            //'password' => bcrypt($request->password),
            'referral_code' => $referralCode,
        ]);

        $user->save();

        //return redirect('/home')->with('referral_code', $referralCode);
        return view('auth.register', ['referralCode' => $referralCode]);

        

        // Customize the redirect or response as needed

        // Create a new FormData instance and save it to the database
        // FormData::create($validatedData);

        // You can add logic here to handle user registration using the FormData model
        // For example, you might hash the password and save it to the same FormData table
        // $validatedData['password'] = Hash::make($validatedData['password']);
    }

    public function register(){
        // dd('masuk register');
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }
}

