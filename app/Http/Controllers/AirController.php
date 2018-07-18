<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Air;

class AirController extends Controller
{
     public function index(){
        $air=Air::all();
        return view('index',["air"=>$air]);
    }

    public function view($id){
      $air = Air::find($id);
      return view('index',["air"=>$air]);
    }

    public function store(Request $request){

      $air = new Air;

      $air -> date = $request -> date;
      $air -> AQI = $request -> AQI;
      

      $air->save();


      return redirect('/index');
  }

}
