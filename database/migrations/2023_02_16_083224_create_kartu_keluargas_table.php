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
        Schema::create('kartu_keluargas', function (Blueprint $table) {
            $table->id();

            // data diatas
            $table->string('nokk')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt_rw')->nullable();
            $table->string('kel')->nullable();
            $table->string('kec')->nullable();
            $table->string('kota')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('provinsi')->nullable();

            // isi KK
            $table->string('nama');
            $table->string('nik');
            $table->string('jk');
            $table->string('tempatlahir');
            $table->string('tgllahir');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('jpekerjaan');
            $table->string('goldarah');
            $table->string('statusperkawinan');
            $table->string('tglperkawinan');
            $table->string('statushubkeluarga');
            $table->string('kewarganegaraan');
            $table->string('nopaspor');
            $table->string('nokitap');
            $table->string('namaibu');
            $table->string('namaayah');

            // data dibawah
            $table->string('tgl_keluar')->nullable();
            $table->string('nama_dinas')->nullable();
            $table->string('nik_dinas')->nullable();

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
        Schema::dropIfExists('kartu_keluargas');
    }
};
