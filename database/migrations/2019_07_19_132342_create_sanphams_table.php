<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Tensanpham',255);
            $table->mediumText('Chitietsanpham');
            $table->tinyInteger('New');
            $table->integer('Giatien');
            $table->integer('Giakhuyenmai');
            $table->mediumText('Khuyenmai');
            $table->string('Xuatxu',255);
            $table->tinyInteger('Trangthai');
            $table->string('image',255);
            $table->integer('id_Loai')->unsigned();
            $table->foreign('id_Loai')->references('id')->on('theloais')->onDelete('cascade');
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
        Schema::dropIfExists('sanphams');
    }
}
