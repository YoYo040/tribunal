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
        Schema::create('employers', function (Blueprint $table) {

            $table->id();
            $table->string('nome')->index();
            $table->string('prenom')->index();
            $table->string('nomeAr');
            $table->string('prenomAr');
            $table->string('tele',20);
            $table->string('email',50)->nullable();
            $table->string('role');
            $table->string('adresse');
            $table->string('group');
            $table->date('dateEnbouch');
            $table->date('dateNaissance');
            $table->string('genre');
            $table->string('grade');
            $table->string('bureau');
            $table->string('echelle');
            $table->string('statu')->default('1');
            $table->string('createBy');
            $table->string('updateBy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
