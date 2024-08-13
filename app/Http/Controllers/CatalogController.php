<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artefact;
use App\Models\Phase;
use App\Models\Component;
use App\Models\Portofolio;
use App\Models\Category;

class CatalogController extends Controller
{
    public function index($portofolio_id, $artefact_id)
    {
        $component = Component::all();
        $portofolio = Portofolio::findOrFail($portofolio_id);
        $artefact = Artefact::findOrFail($artefact_id);
        $category = Category::all();
        return view('catalog', compact('component', 'artefact', 'portofolio', 'category'));
    }

    public function store(Request $request)
    {
        // Lakukan validasi data jika diperlukan
        $validatedData = $request->validate([
            // Definisikan aturan validasi di sini
        ]);

        $component = Component::all();

        return view('catalog', compact('component'));
    }
}
