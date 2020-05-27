<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function showLogin(){
        return view('admin.login');
    }

    public function doLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect(route('adminhome'));
        }else{
            return redirect(route('adminlogin'))->with('info', 'Email password salah.')->withInput();
        }
    }

    public function userManagement(){
        $user = User::where('roles_id','=','3')->get();
        return view('admin.userManagement', ['users' => $user]);
    }

    public function userDelete($id){
        if(Auth::guard('admin')->user()->roles_id == 1){
            if(User::findOrFail($id)->delete()){
                return redirect()->back();
            }
            return redirect()->back()->with('message', 'Error deleting user');
        }
        return redirect(route('adminusermanagement'));
    }

    public function destroy(){
        Auth::guard('admin')->logout();
        return redirect(route('adminlogin'));
    }
    public function mitraManagement(){
        $user = User::where('roles_id','=','2')->get();
        return view('admin.mitraManagement', ['users' => $user]);
    }
    
    public function mitraDelete($id){
        if(Auth::guard('admin')->user()->roles_id == 1){
            if(User::findOrFail($id)->delete()){
                return redirect()->back();
            }
            return redirect()->back()->with('message', 'Error deleting user');
        }
        return redirect(route('adminmitramanagement'));
    }

    public function userSearch(Request $request){
        $cari = $request->cari;
        $request = User::where('roles_id','=','3')->where('name', 'like', "%".$cari."%")->paginate();
        return view('admin.userManagement', ['users'=>$request]);
    }

    public function mitraSearch(Request $request){
        $cari = $request->cari;
        $request = User::where('roles_id','=','2')->where('name', 'like', "%".$cari."%")->paginate();
        return view('admin.mitraManagement', ['users'=>$request]);
    }

}
