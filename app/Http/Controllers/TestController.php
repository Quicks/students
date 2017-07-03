<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
      return view('testController.index')->with('name', 'Vasya');
    }
}
