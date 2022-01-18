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
            $table->string('tarifUnitaire_pht');
            $table->integer('prestationDevisee_qté');
            $table->string('prestationDevisee_mht');
            $table->integer('prestationCompl_qté');
            $table->string('prestationCompl_mht');
            $table->string('total_ht');
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
