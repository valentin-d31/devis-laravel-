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
    //: JsonResponse

    public function search(Request $request): JsonResponse
    {
        $q = $request->input('q');

        $produits = produit::where('name', 'like', '%' .$q . '%')->get();

        return response()->json([
            'produits' => $produits,
        ]);
    }

}
