<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarParfumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_daftar_parfum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_parfum', 30); 
            $table->string('jenis_parfum', 30);
            $table->string('Aroma', 10);
            $table->decimal('harga', 10, 3); 
            $table->string('ukuran', 15);
            $table->string('poster', 250);
        
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
        Schema::dropIfExists('_daftar_parfum');
    }
}
