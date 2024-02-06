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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('no_jual');
            $table->unsignedBigInteger('id_sampah');
            $table->unsignedBigInteger('id_user');
            $table->decimal('total', 10, 2);
            $table->decimal('berat', 8, 2);
            $table->date('tgl_transaksi');
            $table->timestamps();

            $table->foreign('id_sampah')->references('id')->on('sampah')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('id_user')->references('id_user')->on('users')
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
        Schema::dropIfExists('penjualan');
    }
};
