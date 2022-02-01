<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{

    public function create()
    {
        return view('devis.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            "titre" => 'required',
            "date_ouverture" => 'required',
            "ref_allianz" => 'required',
            "ref_commande" => 'required',
            "fait_partie_projet" => 'nullable',
            "exemple_sur" => 'nullable',
            "date_1er_PDF" => 'required',
            "cost_center" => 'required|integer',
            "cost_element" => 'required|integer',
            "repartition_si_2_costs_center" => 'required',
            "impression" => 'required',
            "PDF_dynamique" => 'required',
            "contact" => 'required',
        ]);

        $devis = Devis::create([
            'titre' => $data['titre'],
            'date_ouverture' => $data['date_ouverture'],
            'ref_allianz' => $data['ref_allianz'],
            'ref_commande' => $data['ref_commande'],
            'fait_partie_projet' => $data['fait_partie_projet'],
            'exemple_sur' => $data['exemple_sur'],
            'date_1er_PDF' => $data['date_1er_PDF'],
            'cost_center' => $data['cost_center'],
            'cost_element' => $data['cost_element'],
            'repartition_si_2_costs_center' => $data['repartition_si_2_costs_center'],
            'impression' => $data['impression'],
            'PDF_dynamique' => $data['PDF_dynamique'],
            'contact' => $data['contact'],
        ]);

        return redirect()
            ->route('admin.index', compact('devis'))
            ->with('success', 'Le devis à bien été crée avec success');
    }

    public function edit(Request $request, $devis)
    {
        $devis = Devis::where('id', $devis)->first();

        if(!devis) {
            return abort(404);
        }

    }
}
