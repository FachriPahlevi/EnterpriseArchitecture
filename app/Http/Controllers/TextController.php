<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        return view('text');
    }

        public function store(Request $request)
    {
        // Lakukan validasi data jika diperlukan
        $validatedData = $request->validate([
            // Definisikan aturan validasi di sini
        ]);

        return view('text');
    }
}

