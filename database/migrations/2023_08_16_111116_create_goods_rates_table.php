<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_goods_rate', function (Blueprint $table) {
            $table->id();
            $table->String("goodsName")->nullable();
            $table->date("hsn")->nullable();
            $table->float("rate",8,2)->nullable();
            $table->float("description",8,2)->nullable();
            $table->String("registerNo");
            $table->integer("companyID");
            $table->integer("userID");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_goods_rate');
    }
};
