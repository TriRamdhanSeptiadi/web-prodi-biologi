<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangBiologi;
use App\Models\VisiMisiTujuan;
use App\Models\PimpinanStaff;
use App\Models\Publikasi;

class BerandaController extends Controller
{
    public function index()
    {
        $tentangBiologi = TentangBiologi::first();
        $visiMisiTujuan = VisiMisiTujuan::first();
        $pimpinanStaff = PimpinanStaff::first();
        $publikasi = Publikasi::all();
        
        return view('beranda', compact('tentangBiologi', 'visiMisiTujuan', 'pimpinanStaff', 'publikasi'));
    }
}