<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrijavasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prijavas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ime_ucenika');
            $table->string('prezime_ucenika');
            $table->string('pol');

            $table->date('datum_rodjenja');
            $table->string('mesto_rodjenja');
            $table->string('jmbg');
            $table->string('adresa');
            $table->string('skola');
            $table->string('razred');
            $table->string('ime_majke');
            $table->string('jmbg_majke');
            $table->string('ime_oca');
            $table->string('jmbg_oca');
            $table->string('kontakt_osoba');
            $table->string('tel_fiksni');
            $table->string('tel_mobilni');
            $table->string('email');
            
            $table->string('skolovanje_1');
            $table->string('instrument_1');
            $table->string('skolovanje_2');
            $table->string('instrument_2');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prijavas');
    }
}
