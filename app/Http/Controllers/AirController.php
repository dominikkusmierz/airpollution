<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Air;
class AirController extends Controller
{
    public function search(){
        return view('layouts.search');
    }


    public function allstations(){

        $stations=Air::allstations();
      $stations=json_decode($stations);
        return view('stations.allstation',compact('stations'));
    }

    
    public function station($name,$id){

        // $param=Air::param($id);
        // $param=json_decode($param);
        // dd($param);

        //stacje posiadające / w nazwie zmieniają link do strony.

        $quality=Air::quality($id);
        
        $quality=json_decode($quality);
        
        return view('stations.station',compact('quality','name'));
    }

}
