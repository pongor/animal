<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登陆首页
    public function index(Request $request)
    {
        $request->post();
        return view('Backend.Login.index');
    }
}
