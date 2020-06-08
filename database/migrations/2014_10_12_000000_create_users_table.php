<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('tbl_jurnal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('penulis');
            $table->string('no');
            $table->string('tahun');
            $table->string('volume');
            $table->string('judul');
            $table->text('abstrak');
            $table->string('namafile');
            $table->string('path');
            $table->timestamps();
        });

        Schema::create('tbl_uji', function (Blueprint $table) {
            $table->increments('id');
            $table->text('abstrak');
            $table->text('kata_salah');
            // $table->text('koreksi');
            $table->text('hasil');
            $table->timestamps();
        });

        Schema::create('tbl_proses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->text('abstrak');
            // $table->text('tokens');
            // $table->text('stem');
            $table->text('tipo');
            $table->text('hasil');
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
        Schema::dropIfExists('users');
    }
}
