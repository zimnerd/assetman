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
            $table->string('location')->nullable();
            $table->string('site')->nullable();
            $table->string('bardcode')->nullable();
            $table->string('serial-number')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('comments')->nullable();
            $table->string('department')->nullable();
            $table->string('category')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('cost')->nullable();
            $table->string('image');
            $table->string('purchase-from')->nullable();
            $table->string('purchase-date')->nullable();
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
