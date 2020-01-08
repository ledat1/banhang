<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintucs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Tieude',255);
            $table->string('Tomtat',255);
            $table->mediumText('Noidung');
            $table->integer('Noibat');
            $table->string('Hinh',255);
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
        Schema::dropIfExists('tintucs');
    }
}
