<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missing_marks', function (Blueprint $table) {
            $table->id();
            $table->string("std_name");
            $table->string("regno");
            $table->string("phone");
            $table->string("unit_name");
            $table->string("unit_code");
            $table->string("email");
            $table->string("year");
            $table->string("session");
            $table->string("status");           
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
        Schema::dropIfExists('missing_marks');
    }
};
