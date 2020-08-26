<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCeritakuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceritaku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('author');
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->string('url')->nullable();
            $table->longText('deskripsi');
            $table->longText('referensi');
            $table->string('temakonten');
            $table->longText('tags');
            $table->string('usiakonten');
            $table->bigInteger('likes');
            $table->bigInteger('comments');
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
        Schema::dropIfExists('ceritaku');
    }
}
