<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('devis', function (Blueprint $table) {
                $table->id();
                $table->foreignId('demandeur_id')->constrained();
                $table->string('titre');
                $table->dateTime('date_ouverture');
                $table->text('ref_allianz');
                $table->text('ref_commande');
                $table->string('fait_partie_projet')->nullable();
                $table->string('exemple_sur')->nullable();
                $table->dateTime('date_1er_PDF');
                $table->integer('cost_center');
                $table->integer('cost_element');
                $table->boolean('repartition_si_2_costs_center');
                $table->boolean('impression');
                $table->boolean('PDF_dynamique');
                $table->string('contact');
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
        Schema::dropIfExists('devis');
    }
}
