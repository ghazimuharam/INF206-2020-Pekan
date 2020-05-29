<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Order;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['showLogin', 'doLogin']);
    }

    public function index(){
        $pembeli = User::where('roles_id','=', '3')->get();
        $penjuala = User::where('roles_id','=', '2')->where('mitra_status', '=', 'active')->get();
        $penjuald = User::where('roles_id','=', '2')->where('mitra_status', '=', 'deactive')->get();
        $order = Order::all();
        return view('admin.dashboard', ['pembeli' => $pembeli, 'penjuala' => $penjuala, 'penjuald' => $penjuald, 'order' => $order]);
    }

    public function showLogin(){
        return view('admin.login');
    }

    public function doLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'roles_id' => 1])){
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

    public function mitraManagementA(){
        $userActive = User::where('roles_id','=','2')->where('mitra_status','=','active')->get();
        return view('admin.mitraManagementA', ['users' => $userActive]);
    }

    public function mitraManagementD(){
        $userDeactive = User::where('roles_id','=','2')->where('mitra_status','=','deactive')->get();
        return view('admin.mitraManagementD', ['users' => $userDeactive]);
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
        return view('admin.mitraManagementA', ['users'=>$request]);
    }

    public function userEdit($id){
        $users = User::findOrFail($id);
        return view('admin.editUser', ['users'=>$users]);
    }

    public function postEdit(Request $request){
        User::where('roles_id','=','3')->where('id', $request->id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);
        return redirect(route('adminusermanagement'));
    }

    public function profileAdmin(){
        $user = Auth::guard('admin')->user();
        return view('admin.profile', ['user'=>$user]);
    }

    public function mitraEdit($id){
        $users = User::findOrFail($id);
        return view('admin.editMitra', ['users'=>$users]);
    }

    public function mitraEditt(Request $request){
        User::where('roles_id','=','2')->where('id', $request->id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'market_name'=>$request->market_name,
            'vehicle_name'=>$request->vehicle_name,
            'vrn'=>$request->vrn,
            'email'=>$request->email,
        ]);
        return redirect(route('adminmitramanagement'));
    }

    public function mitraActive($id){
        if(Auth::guard('admin')->user()->roles_id == 1){
            if(User::findOrFail($id)->update([
                'mitra_status'=>"active",
            ])){
                return redirect()->back();
            }
            return redirect()->back()->with('message', 'Error update mitra');
        }
        return redirect(route('adminmitramanagementdeactive'));
    }

    public function adminManagement(){
        $user = User::where('roles_id','=','1')->get();
        return view('admin.adminManagement', ['users' => $user]);
    }

    public function addAdmin(){
        return view('admin.addAdmin');
    }

    public function postAdmin(Request $request){
        User::where('roles_id','=','1')->insert([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'market_name'=>"-",
            'vehicle_name'=>"-",
            'vrn'=>"-",
            'email'=>$request->email,
            'password'=>$request->password,
            'mitra_status'=>"-",
            'roles_id'=>'1',
        ]);
        return redirect(route('adminmanagement'));
    }

    public function adminDelete($id){
        if(Auth::guard('admin')->user()->roles_id == 1){
            if(User::findOrFail($id)->delete()){
                return redirect()->back();
            }
            return redirect()->back()->with('message', 'Error deleting user');
        }
        return redirect(route('adminmanagement'));
    }

    public function adminEdit($id){
        $users = User::findOrFail($id);
        return view('admin.editAdmin', ['users'=>$users]);
    }

    public function postAdminEdit(Request $request){
        User::where('roles_id','=','1')->where('id', $request->id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'roles_id'=>'1',
        ]);
        return redirect(route('adminmanagement'));
    }

    public function adminSearch(Request $request){
        $cari = $request->cari;
        $request = User::where('roles_id','=','1')->where('name', 'like', "%".$cari."%")->paginate();
        return view('admin.adminManagement', ['users'=>$request]);
    }
}
