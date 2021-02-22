<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }
    public function about()
    {
        return "Nama : Rifkie Nurdian AdiNugroho <br> NIM:1941720219 <br>";
    }
    public function articles($id)
    {
        return "Halaman Artikel dengan ID = $id";
    }
}
