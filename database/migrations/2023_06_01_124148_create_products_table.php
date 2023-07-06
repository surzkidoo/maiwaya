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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('color')->nullable();
            $table->string('image')->nullable()->default('http://maiwaya.ng/asset/elegant-smartphone-composition 1.png');
            $table->unSignedInteger('price')->default(0);
            $table->string('condition')->nullable();
            $table->string('storage')->nullable();
            $table->longText('description')->nullable();
            $table->foreignId('brand_id')->constrained();
            $table->string('battery')->nullable();
            $table->string('processor')->nullable();
            $table->boolean('recommended')->nullable()->default(false);
            $table->boolean('exclusive')->nullable()->default(false);
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
        Schema::dropIfExists('products');
    }
};
