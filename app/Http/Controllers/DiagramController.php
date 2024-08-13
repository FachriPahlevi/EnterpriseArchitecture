<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagramController extends Controller
{
    public function index()
    {
        return view('diagram');
    }

        public function store(Request $request)
    {
        // Lakukan validasi data jika diperlukan
        $validatedData = $request->validate([
            // Definisikan aturan validasi di sini
        ]);

        return view('diagram');
    }
}
