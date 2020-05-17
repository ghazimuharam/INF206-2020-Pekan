<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::guard('pembeli')->user();
        return view('pembeli.profil', ['user'=>$user]);
    }

    public function showLogin()
    {
        return view('pembeli.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect(route('pembeliprofile'));
        }
        else
        {
            return redirect(route('pembelilogin'))->with('info', 'Email password salah atau akun belum aktif.')->withInput();
        }
    }

    public function showRegister()
    {
        return view('pembeli.register');
    }

    public function doRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric|unique:users',
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => 'required',
        ]);

        $user = User::create([
                'name'  => $request->name,
                'email'  => $request->email,
                'password'  => Hash::make($request->password),
                'phone'  => $request->phone,
                'market_name'  => '-',
                'vehicle_name'  => '-',
                'vrn'  => '-',
                'mitra_status' => 'pembeli',
                'roles_id' => '3',
            ]);

        if($user){
            return redirect(route('pembelilogin'))->with('success', 'Pendaftaran berhasil, Silahkan login.');
        }else{
            return redirect(route('pembeliregis'))->with('info', 'Gagal mendaftarkan akun.')->withInput();
        }
    }

    public function showProfile(){
        $user = Auth::user();
        return view('pembeli.profil',['user'=>$user]);
    }

    public function orderPasarSayur(){
        $users = User::all()->where('mitra_status','=','active')->take(4)->shuffle();
        return view('pembeli.orderPasarSayur', ['users'=>$users]);
    }
}
