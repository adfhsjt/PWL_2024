<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Ahmad Dzul Fadhli Hannan <br> 2341720106';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id {' . $id . '}';
    }
}
