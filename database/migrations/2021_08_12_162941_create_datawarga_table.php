<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatawargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datawarga', function (Blueprint $table) {
            $table->id();
            $table->string('nik',16);
            $table->string('nama',50);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jeniskelamin',30);
            $table->string('kampung');
            $table->string('rt');
            $table->string('rw');
            $table->string('pelamar');
            $table->string('telepon',13);
            $table->string('pendidikan');
            $table->string('paklaring');
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
        Schema::dropIfExists('datawarga');
    }
}
