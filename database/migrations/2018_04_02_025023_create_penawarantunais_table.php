<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenawarantunaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penawarantunais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_terima');
            $table->integer('profit_id')->unsigned();
            $table->string('wilayah');
            $table->integer('bank_id')->unsigned();
            $table->string('nama_bank_tunai');
            $table->integer('vendor_id')->unsigned();
            $table->date('tgl_penerimaan');
            $table->string('nominal_jamper');
            $table->string('no_kwitansi');
            $table->string('pekerjaan');
            $table->string('no_berita');
            $table->integer('jangka_waktu');
            $table->date('jatuh_tempo');
            $table->integer('masa_sanggah');
            $table->date('min_tarik_jaminan');
            $table->integer('unit_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('file1');
            $table->text('file2');
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
        Schema::dropIfExists('penawarantunais');
    }
}
