<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('name');
            $table->string('tarifUnitaire_type');
            $table->float('tarifUnitaire_pht');
            $table->float('prestationDevisee_qté');
            $table->float('prestationDevisee_mht');
            $table->float('prestationCompl_qté');
            $table->float('prestationCompl_mht');
            $table->float('total_ht');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
