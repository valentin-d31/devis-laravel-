<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }

    public function create()
    {
        return view('produits.create');
    }

    public function store(Request $request)
    {

        $data = request()->validate([
            'reference' => 'required',
            'name' => 'required',
            'tarifUnitaire_type' => 'required',
            'tarifUnitaire_pht' => 'required',
            'prestationDevisee_qté' => 'required|integer',
            'prestationDevisee_mht' => 'required',
            'prestationCompl_qté' => 'nullable',
            'prestationCompl_mht' => 'nullable',
            'total_ht' => 'required',
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
        ->route('produits.index', compact('produit'))
            ->with('success', ' Le produit à bien été ajouté avec success au devis (idDevis)');
    }

    public function edit($produit)
    {
        $produit = Produit::where('id', $produit)->first();

        if (!$produit) {
            return abort(404);
        }

        return view('produits.edit', compact('produit'));
    }

    public function update(Request $request, $produit)
    {
        $produit = Produit::where('id', $produit)->first();

        if (!$produit) {
            return abort(404);
        }

        $data = request()->validate([
            'reference' => 'required',
            'name' => 'required',
            'tarifUnitaire_type' => 'required',
            'tarifUnitaire_pht' => 'required',
            'prestationDevisee_qté' => 'required|integer',
            'prestationDevisee_mht' => 'required',
            'prestationCompl_qté' => 'nullable',
            'prestationCompl_mht' => 'nullable',
            'total_ht' => 'required',
        ]);

       if ($produit->update($data)) {
           return redirect()
               ->route('produits.index')
               ->with('success', 'Le produit a bien été modifié');
       }

       return redirect()
           ->route('produits.index', ['id' => $produit])
           ->with('error', "une erreur est survenue. Le produit n'\a pas été modifié");

    }

    public function destroy($produit)
    {
        $produit = Produit::where('id', $produit)->first();

        if (!$produit) {
            return abort(500);
        }

        if ($produit->delete()) {
            return redirect()
                ->route('produits.index')
                ->with('success', 'Le produit a bien été supprimé');
        }

        return redirect()
            ->route('admn.index', ['id' => $produit])
            ->with('error', "Une erreur est survenur. Le produit n'\a pas été supprimé");
    }
}
