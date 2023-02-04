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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("matricola", 16)->unique();
            $table->integer("numero_vagoni")->unsigned()->default(12);
            $table->integer("numero_posti_vagone")->unsigned();
            $table->integer("costo_medio_biglietto")->nullable()->unsigned();

            $table->string("destinazione", 64);
            $table->boolean("aria_condizionata");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
