<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;

    public function demandeur()
    {
        return $this->hasOne(App\Models\Demandeur::class);
    }

    public function commande()
    {
        return $this->hasOne(App\Models\Commande::class);
    }
}
