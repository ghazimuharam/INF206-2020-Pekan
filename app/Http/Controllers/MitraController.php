<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Stock;
use App\Order;

class MitraController extends Controller
{
    public function __construct()
    {
        $this->middleware('mitra', ['only' => ['index', 'marketOptions', 'destroy', 'showOrder']]);
    }

    public function index()
    {
        return Auth::guard('mitra')->user();
    }

    public function showLogin()
    {
        return view('mitra.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('mitra')->attempt(['email' => $request->email, 'password' => $request->password, 'mitra_status' => 'active', 'roles_id' => '2'])){
            return redirect(route('mitraprofile'));
        }
        else
        {
            return redirect(route('mitralogin'))->with('info', 'Email password salah atau akun belum aktif.')->withInput();
        }
    }

    public function create()
    {
        return view('mitra.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric|unique:users',
            'market_name' => 'required|unique:users',
            'vehicle_name' => 'required',
            'vrn' => 'required|unique:users',
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => 'required',
        ]);

        $user = User::create([
                'name'  => $request->name,
                'email'  => $request->email,
                'password'  => Hash::make($request->password),
                'phone'  => $request->phone,
                'market_name'  => $request->market_name,
                'vehicle_name'  => $request->vehicle_name,
                'vrn'  => $request->vrn,
                'mitra_status' => 'deactive',
                'roles_id' => '2',
            ]);

        if($user){
            return redirect(route('mitralogin'))->with('success', 'Pendaftaran berhasil,akun mitra akan di review oleh admin.');
        }else{
            return redirect(route('mitraregis'))->with('info', 'Gagal mendaftarkan mitra baru.')->withInput();
        }
    }

    public function marketOptions(){
        return view('mitra.opsiPasar');
    }

    public function showOrder(){
        return view('mitra.order');
    }

    public function destroy()
    {
        Auth::guard('mitra')->logout();
        return redirect(route('mitralogin'));
    }

    public function updateStokIkan(Request $request){
        $request->validate([
            'nama_barang' => 'required' , 
        ]);
        Stock::create([
            'user_id' => Auth::guard('mitra')->user()->id,
            'type_pasar' => 'ikan', 
            'nama_barang' => $request->nama_barang,
        ]);
        return redirect('/mitra/stock/fish');
    }

    public function displayStokIkan(){
        $ikan = Auth::guard('mitra') -> user() -> stock -> where('type_pasar', '=', 'ikan');

        return view('mitra.stokikan', ['ikan'=>$ikan]);
    }

    public function updateStokSayur(Request $request){
        $request->validate([
            'nama_barang' => 'required' , 
        ]);
        Stock::create([
            'user_id' => Auth::guard('mitra')->user()->id,
            'type_pasar' => 'sayur', 
            'nama_barang' => $request->nama_barang,
        ]);
        return redirect('/mitra/stock/vegetable');
    }

    public function displayStokSayur(){
        $sayur = Auth::guard('mitra') -> user() -> stock -> where('type_pasar', '=', 'sayur');

        return view('mitra.stoksayur', ['sayur'=>$sayur]);
    }
}
