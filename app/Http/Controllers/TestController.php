<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Stock;
use App\Order;
class TestController extends Controller
{
    public function index(){
        return User::find(2)->stock;
    }

    
}
