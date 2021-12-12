<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $date = date("Y-m-d");
        $file = file_get_contents("https://api.pray.zone/v2/times/"
        ."day.json?city=bogor&date=$date");
        $data_waktu = json_encode($file, true);

        return view('home');
    } 
    // function jadwalsholat(){
    //      $date = date("Y-m-d");
    //      $file = file_get_contents("https://api.pray.zone/v2/times/today.json?city=bogor");
    //      $data_waktu = json_encode($file, true);

    //      return $data_waktu;
    // }

}
