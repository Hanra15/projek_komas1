<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $date = date("Y-m-d");
        $file = file_get_contents("https://api.myquran.com/v1/sholat/jadwal/1204/2022/01/15");
        $data_waktu = json_decode($file, true);
        // $data_solat = array('datalist' => $data_waktu );
        $data = $data_waktu['data']['jadwal'];
        $databener = array('datalist' => $data, );
        // var_dump($data);
        echo view('home', $databener);
    } 
    // function jadwalsholat(){
    //      $date = date("Y-m-d");
    //      $file = file_get_contents("https://api.pray.zone/v2/times/today.json?city=bogor");
    //      $data_waktu = json_encode($file, true);

    //      return $data_waktu;
    // }

}