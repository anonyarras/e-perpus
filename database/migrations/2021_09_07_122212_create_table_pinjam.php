<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pinjam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tgl_pinjam');
            $table->bigInteger('id_anggota')->unsigned();
            $table->bigInteger('id_buku')->unsigned();
            $table->date('tgl_pengembalian');
            $table->string('status',30);
            $table->timestamps();
            $table->foreign('id_anggota')->references('id')->on('table_anggota')->onDelete('cascade');
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
        Schema::dropIfExists('table_pinjam');
    }
}
