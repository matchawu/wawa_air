<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aqi;

class AqiController extends Controller
{
     public function index(){
        $aqi=Aqi::all();
        return view('aqi_show',["aqi"=>$aqi]);
    }

    public function view($id){
      $aqi = Aqi::find($id);
      return view('aqi_show',["aqi"=>$aqi]);
    }

    public function store(Request $request){

      $aqi = new Aqi;

      $aqi -> o3 = $request -> o3;
      $aqi -> pm25 = $request -> pm25;
      $aqi -> pm10 = $request -> pm10;
      $aqi -> co = $request -> co;
      $aqi -> so2 = $request -> so2;
      $aqi -> no2 = $request -> no2;
      $aqi -> aqi = $request -> aqi;
      

      $aqi->save();


      return redirect('/aqi_show');
  }

}
