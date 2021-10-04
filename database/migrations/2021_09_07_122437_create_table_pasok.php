<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePasok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pasok', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_buku')->unsigned();
            $table->integer('jumlah');
            $table->timestamps();
            $table->foreign('id_buku')->references('id')->on('table_buku')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pasok');
    }
}
