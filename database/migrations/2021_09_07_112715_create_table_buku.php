<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul',60);
            $table->string('slug')->unique();
            $table->unsignedBigInteger('id_kategori');
            $table->string('pengarang',60);
            $table->string('penerbit',60);
            $table->integer('stok');
            $table->year('tahun_terbit');
            $table->string('semester');
            $table->integer('dipinjam');
            $table->longText('image');
            $table->timestamps();
            $table->foreign('id_kategori')->references('id')->on('table_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_buku');
    }
}
