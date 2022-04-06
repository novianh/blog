<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index() {
        $nama="variabel nama";
        $mapel=["Bi", "PPKN", "IPS", "OR"];
        return view("biodata", ['nama'=>$nama, 'matkul' => $mapel]);
    }
}
