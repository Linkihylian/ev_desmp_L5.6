<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Login;
use Auth;
use URL;
class LoginController extends Controller{

  public function index(){
    return view('login.inicio');
  }

}
