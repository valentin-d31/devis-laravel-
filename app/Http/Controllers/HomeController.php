<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produits = produit::all();
        return view('home.index', compact('produits'));
    }
}
