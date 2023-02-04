<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string("nome_pacchetto", 32);
            $table->integer("costo_pacchetto")->unsigned();
            $table->integer("durata_viaggio_in_giorni")->unsigned();
            $table->string("numero_emergenze", 16);
            $table->string("numero_info", 16);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
};
