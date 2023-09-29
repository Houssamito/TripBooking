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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string(column:'titre');
            $table->string(column:'sous-titre');
            $table->string(column:'Categorie');
            $table->text(column:'description');
            $table->string(column:'image');
            $table->string(column:'prix');
            $table->string(column:'Nombre_places');
            $table->dateTime(column:'Date');
            $table->time(column:'Duree');
            $table->string(column:'ResponsableAct');
            $table->string(column:'Activite1');
            $table->string(column:'Activite2');
            $table->string(column:'Activite3');
            $table->json('inclus');
            $table->tinyInteger(column:'is_showing')->default(value:0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
