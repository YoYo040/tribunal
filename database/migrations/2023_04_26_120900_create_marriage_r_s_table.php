<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marriage_r_s', function (Blueprint $table) {
            $table->id();
            $table->string('numOrd');
            $table->date('dateInscription');
            $table->integer('numEnvoi');
            $table->date('dateEnvoi');
            $table->string('surce');
            $table->string('objeDomande');
            $table->date('dateRecherch');
            $table->string('destination');
            $table->date('dateprocedur')->nullable();
            $table->string('objeProcedur')->nullable();
            $table->string('note')->nullable();
            $table->string('statu')->default('0');

            $table->date('dateInscription2')->nullable();
            $table->integer('numEnvoi2')->nullable();
            $table->date('dateEnvoi2')->nullable();
            $table->string('surce2')->nullable();
            $table->string('objeDomande2')->nullable();
            $table->date('dateRecherch2')->nullable();
            $table->string('destination2')->nullable();
            $table->date('dateprocedur2')->nullable();
            $table->string('objeProcedur2')->nullable();
            $table->string('note2')->nullable();


            $table->string('createBy',30)->nullable();
            $table->string('updateBy',30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage_r_s');
    }
};
