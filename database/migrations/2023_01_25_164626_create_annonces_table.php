<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('lieu');
            $table->string('image');
            $table->string('ville');
            $table->string('proprietaire')->nullable();
            $table->string('contact2')->nullable();
            $table->text('description');
            $table->double('prix_annonce');
            $table->foreignId('user_id')->constrained();
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
        Schema::table('annonces',function(Blueprint $table){
            $table->dropForeign(["user_id"]);
        });
        Schema::dropIfExists('annonces');
    }
}
