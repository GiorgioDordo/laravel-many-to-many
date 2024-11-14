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
        Schema::table('projects', function (Blueprint $table) {
            // TODO: creo la colonna type_id di tipo Unsigned Big Integer e la posiziono dopo l'id
            $table->unsignedBigInteger("type_id")->after("id");

            // TODO: crea un nuovo vincolo di chiave esterna (foreign key)
            // TODO: sulla mia colonna type_id
            // TODO: che faccia riferimento alla colonna id della tabella projects
            $table->foreign("type_id")->references("id")->on("types");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //
            $table->dropColumn("type_id");
        });
    }
};
