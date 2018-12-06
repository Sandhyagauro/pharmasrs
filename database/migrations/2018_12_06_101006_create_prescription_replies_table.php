<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('replied_by');
            $table->integer('reply_to');
            $table->longText('medicine_name')->nullable();
            $table->longText('medicine_cause')->nullable();
            $table->longText('medicine_routine')->nullable();
            $table->longText('precaution')->nullable();
            $table->longText('diet')->nullable();
            $table->longText('if_dose_missed')->nullable();
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
        Schema::dropIfExists('prescription_replies');
    }
}
