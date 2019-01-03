<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacistUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacist_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->integer('category_department_id')->unsigned()->nullable();
            $table->foreign('category_department_id')
                ->references('id')
                ->on('category_departments')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('nmc_number')->unique();
            $table->string('qualification')->nullable()->default('');
            $table->string('speciality')->nullable()->default('');
            $table->string('website')->nullable()->default('');
            $table->string('shop_name')->nullable()->default('');
            $table->string('shop_address')->nullable()->default('');
            $table->string('shop_number')->nullable()->default('');
            $table->string('specialization')->nullable()->default('');
            $table->string('experience')->nullable()->default('');
            $table->string('education')->nullable()->default('');
            $table->string('journals')->nullable()->default('');
            $table->string('awards')->nullable()->default('');
            $table->string('memberships')->nullable()->default('');
            $table->string('image')->nullable();
            $table->string('license_front')->nullable();
            $table->string('citizenship_front')->nullable();
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
        Schema::dropIfExists('pharmacist_users');
    }
}
