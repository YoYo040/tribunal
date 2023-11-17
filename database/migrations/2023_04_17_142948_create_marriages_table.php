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
        Schema::create('marriages', function (Blueprint $table) {
            $table->id();
            $table->string('numOrd');
            $table->string('decision')->nullable();
            $table->string('demand_accus');
            $table->string('refer_w')->nullable();
            $table->string('numId_w')->nullable();
            $table->string('add_w')->nullable();
            $table->string('nation_w')->nullable();
            $table->date('nissan_w');
            $table->string('ident_w')->nullable();
            $table->date('nissan_p_etrang');
            $table->string('nomCompl_p_etrang');
            $table->string('numIden_p_etrang');
            $table->string('add_p_etrang');
            $table->string('nationa_p_etrang');
            $table->string('statuFamil_p_etrang');
            $table->string('religion_etrang');
            $table->date('nissan_p_MA');
            $table->string('nomCompl_p_MA');
            $table->string('ident_p_MA');
            $table->string('add_p_MA');
            $table->string('statuFamil_p_MA');
            $table->string('creatBy')->nullable();
            $table->string('updateBy')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriages');
    }
};
