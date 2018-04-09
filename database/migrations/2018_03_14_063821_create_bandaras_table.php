<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandaras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_bandara');
            $table->string('nama_bandara');
            $table->text('alamat');
            $table->string('telp');
            $table->string('fax');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bandaras');
    }
}
