<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMalumotlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malumotlars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('elon_id');
            $table->unsignedBigInteger('categories_id');
            $table->timestamps();
            $table->foreign("elon_id")->references("id")->on("elons")->onDelete('cascade');
            $table->foreign("categories_id")->references("id")->on("categories")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('malumotlars');
    }
}
