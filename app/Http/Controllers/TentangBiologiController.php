<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangBiologi;

class TentangBiologiController extends Controller
{
    public function index()
    {
        $tentangBiologi = TentangBiologi::first();
        
        return view('tentang-biologi', compact('tentangBiologi'));
    }
}
