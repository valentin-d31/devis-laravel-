<?php

namespace App\Models;

use App\Models\Devis;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandeur extends Model
{
    use HasFactory;

    public function devis()
    {
        return $this->belongsTo(App\Models\Devis::class);
    }
}
