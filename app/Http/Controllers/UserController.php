<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Notifications\OrderPlaced;
use Notification;
use App\User;
use App\Order;
class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
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

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'roles_id' => '3'])){
            return redirect(route('pembelihome'));
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

    public function destroy(){
        Auth::logout();
        return redirect(route('pembelilogin'));
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
                'roles_id' => 3,
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

    public function marketOptions(){
        return view('pembeli.opsiPasar');
    }

    public function historyUser()
    {
        $user = Auth::user()->userOrderHistory;
        return view('pembeli.history',['users'=>$user]);
    }

    public function orderPasarIkan(){
        $users = User::all()->where('mitra_status','=','active')->shuffle()->take(4);
        return view('pembeli.orderPasarIkan', ['users'=>$users]);
    }

    public function orderPasarSayur(){
        $users = User::all()->where('mitra_status','=','active')->shuffle()->take(4);
        return view('pembeli.orderPasarSayur', ['users'=>$users]);
    }

    public function orderDetails($name, $id){
        if($name == 'sayur' || $name == 'ikan'){
            $mitra = User::findOrFail($id);
            return view('pembeli.pasar', [ 'mitra' => $mitra, 'market_type' => $name]);
        }
        return redirect(route('pembelihome'));
    }

    public function submitDetails($name, $id){
        if($name == 'sayur' || $name == 'ikan'){
            $mitra = User::findOrFail($id);
            $order = Order::create([
                'user_id' => Auth::user()->id,
                'seller_id' => $mitra->id,
                'type_pasar' => $name,
                'status_order' => 'created',
            ]);
            Notification::send($mitra,new OrderPlaced(Auth::user()->name));
            $order = Order::orderBy('id', 'desc')->limit(1)->get();
            return view('pembeli.detail', [ 'mitra' => $mitra, 'order' => $order]);
        }
        return redirect(route('pembelihome'));
    }

    public function pushpost(Request $request){
        $this->validate($request,[
            'endpoint'    => 'required',
            'keys.auth'   => 'required',
            'keys.p256dh' => 'required'
        ]);
        $endpoint = $request->endpoint;
        $token = $request->keys['auth'];
        $key = $request->keys['p256dh'];
        $user = Auth::guard('mitra')->user();
        $user->updatePushSubscription($endpoint, $key, $token);

        return response()->json(['success' => true],200);
    }

    public function push(){
        Notification::send(Auth::guard('mitra')->user(),new OrderPlaced(Auth::guard('mitra')->user()->name));
        return redirect()->back();
    }
     //ubahprofil
    public function editProfile() {
        $user = Auth::user();
        return view('pembeli.editprofile',['user'=>$user]);
    }

    public function updateProfile(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email:rfc,dns',
        ]);

        $update = Auth::user()->update([
            'name'  => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'market_name'  => '-',
            'vehicle_name'  => '-',
            'vrn'  => '-',
            'mitra_status' => 'pembeli',
            'roles_id' => '3',
            ]);
        if($update){
            return redirect()->back()->with('info', 'Profile updated successfully!');
        }else{
            return redirect()->back()->with('info', 'Profile update failed!');
        }
    }

    public function ubahPassw(){
        return view('pembeli.ubahpassword');
    }

    public function updatePassw(Request $request){
        $request->validate([
            'passwordnow' => 'required',
            'password' => 'required|confirmed'
        ]);
        $user = Auth::user();
        if(Hash::check($request->passwordnow, $user->password)){
            $user->update([
                'password' => Hash::make($request->password)
            ]);
            return redirect()->back()->with('info', 'Password updated successfully!');
        }else{
            return redirect()->back()->with('failed', 'Password update failed!');
        }
    }
}
