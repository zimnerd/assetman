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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('site');
            $table->string('bardcode');
            $table->string('serial-number');
            $table->string('name');
            $table->string('description');
            $table->string('comments');
            $table->string('department');
            $table->string('category');
            $table->string('brand');
            $table->string('model');
            $table->string('cost');
            $table->string('purchase-from');
            $table->string('purchase-date');
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
        Schema::dropIfExists('assets');
    }
};
