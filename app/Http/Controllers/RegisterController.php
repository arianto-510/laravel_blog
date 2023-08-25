<?php

namespace App\Http\Controllers;

use session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register', [
            'title' => 'Registrasi'
        ]);
    }

    public function store(Request $request)
    {
        $validateRegis = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'unique:users', 'min:3', 'max:255'],
            'email' => ['required', 'unique:users', 'max:255', 'email:dns'],
            'password' => 'required|max:255'
        ]);

        $validateRegis['password'] = Hash::make($validateRegis['password']);
        // $data = $request->except(['_token']);
        // $data['password'] = bcrypt($data['password']);
        // dd($data);
        // dd($validateRegis);
        User::create($validateRegis);
        // $data_model = User::create($data);
        // if ($data_model) {
        //     dd($data_model->email);
        // } else {
        //     dd("Tidak bisa register");
        // }

        // $request->session()->flash('success', 'Registrasion is successfully!!');
        return redirect('/login')->with('login', 'SuccessFully Create New USers');
    }
}
