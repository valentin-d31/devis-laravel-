<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {

        $data = request()->validate([
            'reference' => 'required',
            'name' => 'required',
            'tarifUnitaire_type' => 'required',
            'tarifUnitaire_pht' => 'required|integer',
            'prestationDevisee_qté' => 'required|integer',
            'prestationDevisee_mht' => 'required|integer',
            'prestationCompl_qté' => 'required|integer',
            'prestationCompl_mht' => 'required|integer',
            'total_ht' => 'required|integer',
        ]);

       $produit= Produit::create([
                'reference' => $data['reference'],
                'name' => $data['name'],
                'tarifUnitaire_type' => $data['tarifUnitaire_type'],
                'tarifUnitaire_pht' => $data['tarifUnitaire_pht'],
                'prestationDevisee_qté' => $data['prestationDevisee_qté'],
                'prestationDevisee_mht' => $data['prestationDevisee_mht'],
                'prestationCompl_qté' => $data['prestationCompl_qté'],
                'prestationCompl_mht' => $data['prestationCompl_mht'],
                'total_ht' => $data['total_ht'],

        ]);

        return redirect()
        ->route('home.index', compact('produit'))
            ->with('success', ' Le produit à bien été ajouté avec success au devis (idDevis)');
    }
}
