<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ruangan_id')->unsigned();
            $table->string('name');
            $table->integer('total');
            $table->integer('broken');
            $table->string('photo')->nullable();
            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->bigInteger('updated_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('ruangan_id')->references('id')->on('ruangan')
                    ->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')
                    ->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
