<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string("generic_name");
            $table->string("description")->nullable();
            $table->string("restriction_formula")->nullable();
            $table->string("form");
            $table->boolean("faskes_tk1");
            $table->boolean("faskes_tk2");
            $table->boolean("faskes_tk3");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
