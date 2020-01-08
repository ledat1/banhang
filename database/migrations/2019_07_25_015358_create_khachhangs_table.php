<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Hoten');
            $table->string('Gioitinh');
            $table->string('email');
            $table->string('Diachi');
            $table->integer('Sodienthoai');
            $table->string('Ghichu',255);
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
        Schema::dropIfExists('khachhangs');
    }
}
