<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id(); 
            $table->string('nama_barang', 100);
            $table->string('jenis_barang', 100);
            $table->integer('stock')->nullable();
            $table->string('status', 20)->nullable();
            $table->integer('harga_satuan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
}

