<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sampah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jensam');
            $table->string('nama_sampah');
            $table->decimal('harga_beli', 10, 2);
            $table->decimal('harga_jual', 10, 2);
            $table->timestamps();

            $table->foreign('id_jensam')->references('id_jensam')->on('jenis_sampah')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sampah');
    }
};
