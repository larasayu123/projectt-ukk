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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->string('no_beli')->unique();
            $table->unsignedBigInteger('id_sampah');
            $table->unsignedBigInteger('Id_warga');
            $table->decimal('total', 10, 2);
            $table->decimal('berat', 8, 2);
            $table->date('tgl_transaksi');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('id_sampah')->references('id')->on('sampah')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Id_warga')->references('Id_warga')->on('warga')
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
        Schema::dropIfExists('pembelians');
    }
};
