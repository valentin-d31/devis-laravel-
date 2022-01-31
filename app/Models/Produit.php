<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'name',
        'tarifUnitaire_type',
        'tarifUnitaire_pht',
        'prestationDevisee_qté',
        'prestationDevisee_mht',
        'prestationCompl_qté',
        'prestationCompl_mht',
        'total_ht'
    ];

    public function commande()
    {
        return $this->belongsTo(App\Models\Commande::class);
    }
}
