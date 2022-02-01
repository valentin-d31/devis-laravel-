<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use App\Models\Produit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        $devis = Devis::all();
        
        return view('admin.index', compact('produits', 'devis'));
    }
}
