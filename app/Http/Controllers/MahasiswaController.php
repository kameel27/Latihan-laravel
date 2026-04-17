<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return "Ini adalah Halaman Data Mahasiswa.";
    }
    public function profile()
    {
        return "Ini adalah Profile Mahasiswa";
    }
}
