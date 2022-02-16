<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CasesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casesData', function (Blueprint $table) {
            $table->increments('id');
            $table->string('caseTitle');
            $table->string('preparationFile')->nullable();
            $table->string('organisedFile')->nullable();
            $table->string('fusedFile')->nullable();
            $table->string('configFile')->nullable();
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
        Schema::dropIfExists('casesData');
    }
}
