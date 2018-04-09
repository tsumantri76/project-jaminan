<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenawaranbgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penawaranbgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_terima');
            $table->integer('profit_id')->unsigned();
            $table->integer('bank_id')->unsigned();
            $table->string('wilayah');
            $table->string('cabang');
            $table->string('no_bankgr');
            $table->string('seri_bankgr');
            $table->integer('vendor_id')->unsigned();
            $table->date('tgl_bankgr');
            $table->string('nominal_jambg');
            $table->string('pekerjaan', 1000);
            $table->string('no_berita');
            $table->integer('jangka_waktu');
            $table->date('tgl_berlaku');
            $table->date('tgl_berakhir');
            $table->integer('masa_sanggah');
            $table->date('min_tarik_jaminan');
            $table->date('max_tarik_jaminan');
            $table->integer('unit_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('nama_file');
            $table->text('path_file');
            $table->text('ket')->nullable();
            $table->string('no_urut');
            $table->string('bulan');
            $table->string('tahun');
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
        Schema::dropIfExists('penawaranbgs');
    }
}
