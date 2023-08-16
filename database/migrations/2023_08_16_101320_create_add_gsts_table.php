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
        Schema::create('add_gsts', function (Blueprint $table) {
            $table->id();
            $table->String("cgst")->nullable();
            $table->date("sgst")->nullable();
            $table->float("igst",8,2)->nullable();
            $table->float("date",8,2)->nullable();
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
        Schema::dropIfExists('add_gsts');
    }
};
