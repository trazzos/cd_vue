<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCompany extends Migration
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
            $table->uuid('uuid');
            $table->integer('code')->unique();
            $table->string('name', 255);
            $table->string('taxidentifier_id', 255);
            $table->string('address', 255);
            $table->string('cp', 255);
            $table->string('state', 255);
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->enum('status', ['1','0']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_company');
    }
}
