<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Air;

class AirController extends Controller
{
     public function index(){
        $air=Air::all();
        return view('index');
    }

    public function view($id){
      $air = Air::find($id);
      return view('index',["air"=>$air]);
    }



}
