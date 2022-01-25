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
    public function search(Request $request)
    {
        $q = $request->input('q');
        dd(q);
        //le titre ou les caractère rentré valent la requete
        $produits = Produit::where('name', 'like', '%' .$q . '%')->get();
                    //->orWhere('description', 'like', '%' .$q . '%')
                    //->paginate(10);

        return response()->json([
            'produits' => $produits
        ]);
    }
}
