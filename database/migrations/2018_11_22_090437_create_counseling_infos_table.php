<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCounselingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counseling_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_department_id')->unsigned();
            $table->integer('pharmacist_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('category_department_id')
                ->references('id')
                ->on('category_departments')
                ->onDelete('cascade');
            $table->foreign('pharmacist_id')
                ->references('id')
                ->on('pharmacist_users')
                ->onDelete('cascade');
            $table->integer('package_id');
            $table->integer('package_amount')->nullable()->default(null);
            $table->string('package_duration')->nullable()->default('');
            $table->string('patient')->nullable();
            $table->string('patient_name')->nullable()->default('');
            $table->integer('patient_age')->nullable()->default(null);
            $table->enum('patient_gender',['male','female','others'])->nullable()->default(null);
            $table->string('patient_relation')->nullable()->default('');
            $table->longText('current_symptoms')->nullable()->default(null);
            $table->longText('medical_history')->nullable()->default(null);
            $table->longText('patient_query')->nullable()->default(null);
            $table->string('prescription')->nullable()->default(null);
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
        Schema::dropIfExists('counseling_infos');
    }
}
