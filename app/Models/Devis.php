<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;

    protected $fillable = [
        "titre",
        "date_ouverture",
        "ref_allianz",
        "ref_commande",
        "fait_partie_projet",
        "exemple_sur",
        "date_1er_PDF",
        "cost_center",
        "cost_element",
        "repartition_si_2_costs_center",
        "impression",
        "PDF_dynamique",
        "contact",
    ];

    public function demandeur()
    {
        return $this->hasOne(App\Models\Demandeur::class);
    }

    public function commande()
    {
        return $this->hasOne(App\Models\Commande::class);
    }
}
