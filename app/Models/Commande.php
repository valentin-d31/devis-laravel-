<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    public function devis()
    {
        return $this->belongsTo(App\Models\Devis::class);
    }

    public function produits()
    {
        return $this->hasMany(App\Models\Produits::class);
    }
}
