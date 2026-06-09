<?php

namespace App\Http\Controllers;
use App\Models\Pengunjung;
use Illuminate\Http\Request;

class PengunjungController extends Controller {
    public function index() {
        $pengunjung = Pengunjung::all();
        return view('admin.pengunjung', compact('pengunjung'));
    }
}
