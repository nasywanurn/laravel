<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa(){
        $nama = 'Agung Wahyudi';
        return $nama;
    }

    public function datasiswi(){
        $nama = 'Ajeng';
        return $nama;
    }

    public function nama($nama = 'Nasywa'){
        return $nama;
    }

}
