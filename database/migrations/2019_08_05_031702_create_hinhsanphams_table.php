<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhsanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhsanphams', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_Sanpham')->unsigned();
            $table->foreign('id_Sanpham')->references('id')->on('sanphams')->onDelete('cascade');
            $table->string('Hinhsanpham');
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
        Schema::dropIfExists('hinhsanphams');
    }
}
