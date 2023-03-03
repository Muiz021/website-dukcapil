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
        Schema::create('aktakelahirans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->boolean('is_verification')->default(0)->nullable();

            $table->string('namattdkelahiran');
            $table->string('nikttdkelahiran');
            $table->string('umurttdkelahiran');
            $table->string('pekerjaanttdkelahiran');
            $table->text('alamatttdkelahiran');

            $table->string('namaanak');
            $table->string('nikanak');
            $table->string('tempatlahiranak');
            $table->string('tgllahiranak');
            $table->string('anakke');
            $table->text('alamatanak');

            $table->string('namaibu');
            $table->string('nikibu');
            $table->string('pekerjaanibu');
            $table->text('alamatibu');

            $table->string('bukunikah');
            $table->string('suratketbidan');
            $table->string('ktportuaibu');
            $table->string('ktportuayah');
            $table->string('kkkelahiran');

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
        Schema::dropIfExists('aktakelahirans');
    }
};
