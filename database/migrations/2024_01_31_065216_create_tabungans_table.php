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
        Schema::create('tabungan', function (Blueprint $table) {
            $table->id('id_tabungan');
            $table->unsignedBigInteger('Id_warga');
            $table->float('saldo')->default(0.0);
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('Id_warga')->references('Id_warga')->on('warga')->onDelete('cascade')
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
        Schema::dropIfExists('tabungans');
    }
};
