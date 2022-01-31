<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tel');
            $table->string('email');
            $table->string('address');
            $table->string('address2');
            $table->string('country')->default('Ethiopia');
            $table->string('city')->default('Addis Ababa');
            $table->string('facebook')->default('#');
            $table->string('twitter')->default('#');
            $table->string('instagram')->default('#');
            $table->string('telegram')->default('#');
            $table->string('pintrest')->default('#');
            $table->string('linkedin')->default('#');
            $table->string('youtube')->default('#');
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
        Schema::dropIfExists('addresses');
    }
}
