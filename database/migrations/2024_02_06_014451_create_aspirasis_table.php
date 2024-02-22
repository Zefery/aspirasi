<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('aspirasis', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama');
            $table->integer('nissekolah')->default(false);
            $table->string('lokasi');
            $table->text('keterangan');
            $table->string('jenis');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aspirasis');
    }
};
