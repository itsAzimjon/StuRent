<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahallas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->unsignedBigInteger('shaxar_id');
            $table->timestamps();
            $table->foreign("shaxar_id")->references("id")->on("shaxars")->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahallas');
    }
}
