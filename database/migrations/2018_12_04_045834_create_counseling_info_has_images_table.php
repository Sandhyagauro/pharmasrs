<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCounselingInfoHasImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counseling_info_has_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('counseling_info_id')->unsigned();
            $table->integer('file_id')->unsigned();

            $table->foreign('counseling_info_id')
                ->references('id')
                ->on('counseling_infos')
                ->onDelete('cascade');
            $table->foreign('file_id')
                ->references('id')
                ->on('images')
                ->onDelete('cascade');
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
        Schema::dropIfExists('counseling_info_has_images');
    }
}
