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
        Schema::create('offers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->decimal('value', 8, 2);
            $table->decimal('cost', 8, 2);
            $table->integer('quantity')->default(1);
            $table->string('unit_of_measurement');
            $table->string('type');
            $table->boolean('stock')->default(true);
            $table->uuid('farmer_id');
            $table->timestamps();
            $table->foreign('farmer_id')->references('id')->on('farmers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
