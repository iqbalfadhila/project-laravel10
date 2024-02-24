<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa as ModelsDataMahasiswa;
use Illuminate\Http\Request;

class DataMahasiswa extends Controller
{
    function index() {
        $data = ModelsDataMahasiswa::all();
        return view('data_mahasiswa.index', ['data' => $data]);
    }
}
