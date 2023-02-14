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
        Schema::create('aktakematians', function (Blueprint $table) {
            $table->id();

            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabkota');
          
            $table->string('namattd');
            $table->string('nikttd');
            $table->string('umurttd');
            $table->string('pekerjaanttd');
            $table->text('alamatttd');

            $table->text('keteranganlaporan');
            $table->string('namaalm');
            $table->string('nikalm');
            $table->string('umuralm');
            $table->string('pekerjaanalm');
            $table->string('agamaalm');
            $table->text('alamatalm');

            $table->string('hari');
            $table->string('tgl');
            $table->string('pukul');
            $table->string('bertempat');
            $table->text('penyebab');
            $table->string('bukti');

            $table->string('kkasli');
            $table->string('ktppemohon');
            $table->string('ktpsaksi1');
            $table->string('ktpsaksi2');

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
        Schema::dropIfExists('aktakematians');
    }
};
