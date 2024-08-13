<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artefact;
use App\Models\Phase;
use App\Models\Component;
use App\Models\Portofolio;

class MatrixController extends Controller
{
    public function index()
    {
        $artefacts = Artefact::all();
        $phases = Phase::all();
        return view('matrix', compact('artefacts', 'phases'));
    }

        public function store(Request $request)
    {
        // Lakukan validasi data jika diperlukan
        $validatedData = $request->validate([
            // Definisikan aturan validasi di sini
        ]);

        // Logika untuk menyimpan data ke dalam basis data atau melakukan operasi lain
        // Anda dapat menggunakan $validatedData untuk mendapatkan data yang divalidasi.
        
        // Redirect atau kembalikan respons yang sesuai
        return view('matrix');
    }
}

