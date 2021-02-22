<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;

class Createtablepemasukan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasukan', function (Blueprint $table) {
            $table->string('pemasukan_id', 40);
            $table->string('sumber_pemasukan');
            $table->integer('nominal');
            $table->datetime('tanggal');
            $table->text('keterangan');

            $table->primary('pemasukan_id');
            $table->foreign('sumber_pemasukan') 
            ->referencees('id')->on('sumber')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemasukan', function (Blueprint $table) {
            //
        });
    }
}
