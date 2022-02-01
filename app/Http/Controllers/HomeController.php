<?php

namespace App\Http\Controllers;

use App\Models\Devis;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $devis = Devis::all();
        return view('home.index', compact('devis'));
    }
    //: JsonResponse

    public function search(Request $request): JsonResponse
    {
        $q = $request->input('q');

        $devis = Devis::where('titre', 'like', '%' .$q . '%')->get();

        return response()->json([
            'devis' => $devis,
        ]);
    }

}
