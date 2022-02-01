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

    public function edit($devi)
    {
        $devi = Devis::where('id', $devi)->first();

        if(!$devi) {
            return abort(404);
        }
        return view('devis.edit', compact('devi'));
    }

    public function update(Request $request, $devi)
    {
        $devi = Devis::where('id', $devi)->first();

        if(!$devi) {
            return abort(404);
        }

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

        if($devi->update($data)) {
            return redirect()
                ->route('admin.index')
                ->with('success', 'Le devis a bien été modifié');
        }

        return redirect()
            ->route('admin.index', ['id' => $devi])
            ->with('error', "Une erreur est survenue, Le devis n'\a pas été modifié");
    }

    public function destroy($devi)
    {
        $devi = Devis::where('id', $devi)->first();

        if(!$devi) {
            return abort(404);
        }

        if($devi->delete()) {
            return redirect()
                ->route('admin.index')
                ->with('success', 'Le devis a bien été supprimé');
        }

        return redirect()
            ->route('admin.index', ['id' => $devi])
            ->with('error', "Une erreur est survenue, Le devis n'\a pas été supprimé",);

    }
}
