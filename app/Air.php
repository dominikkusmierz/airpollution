<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    public static function allstations(){

        $stations=file_get_contents(url("http://api.gios.gov.pl/pjp-api/rest/station/findAll"));
        
        return $stations;
    }

    public static function param($id){
        $url="http://api.gios.gov.pl/pjp-api/rest/station/sensors/";
        $url=$url.$id;
        $station=file_get_contents(url($url));
        return $station;
    }

    public static function quality($id){
        $url="http://api.gios.gov.pl/pjp-api/rest/aqindex/getIndex/";
        $url=$url.$id;
        $data=file_get_contents(url($url));
        return $data;
    }
}
