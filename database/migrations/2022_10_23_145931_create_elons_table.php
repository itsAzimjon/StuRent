<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elons', function (Blueprint $table) {
            $table->id();
            $table->string('mulk_turi');
            $table->unsignedBigInteger('shaxar_id');
            $table->unsignedBigInteger('mahalla_id');
            $table->unsignedBigInteger('user_id');
            $table->text('rasm');
            $table->string('xona_soni');
            $table->string('narx');
            $table->string('malumoti');
            $table->string('talaba_soni');
            $table->string('kimga');
            $table->string('type')->default("0");
            $table->text('izoh');
            $table->string('phone');
            $table->string('name');
            $table->timestamps();
            $table->foreign("shaxar_id")->references("id")->on("shaxars")->onDelete('cascade');
            $table->foreign("mahalla_id")->references("id")->on("mahallas")->onDelete('cascade');
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elons');
    }
}
