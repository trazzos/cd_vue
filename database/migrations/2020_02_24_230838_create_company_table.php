<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ftr');
            $table->string('observation')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('adress')->nullable();
            $table->string('exterior_number')->nullable();
            $table->string('interior_number')->nullable();
            $table->string('suburb')->nullable();
            $table->integer('location_id');
            $table->integer('municipio_id');
            $table->integer('state_id');
            $table->integer('country_id')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('company');
    }
}
