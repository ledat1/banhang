<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitiethoadonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Soluong');
            $table->integer('Giatien');
            $table->integer('id_Sp')->unsigned();
            $table->foreign('id_Sp')->references('id')->on('sanphams')->onDelete('cascade');
            $table->bigInteger('id_Hoadon')->unsigned();
            $table->foreign('id_Hoadon')->references('id')->on('hoadons')->onDelete('cascade');
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
        Schema::dropIfExists('chitiethoadons');
    }
}
