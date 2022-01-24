<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produits = produit::all();
        return view('home.index', compact('produits'));
    }

    public function search(Request $request): JsonResponse
    {
        $q = $request->input('q');

        //le titre ou les caractère rentré valent la requete
        $produits = Produit::where('name', 'like', '%' .$q . '%')->get();

        return response()->json([
            'produits' => $produits
        ]); 
    }
}
