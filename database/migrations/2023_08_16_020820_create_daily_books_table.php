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
        Schema::create('tbl_daily_books', function (Blueprint $table) {
            $table->id();
            $table->String("entryName")->nullable();
            $table->date("date")->nullable();
            $table->float("debit",8,2)->nullable();
            $table->float("credit",8,2)->nullable();
            $table->String("paidBy")->nullable();
            $table->String("note")->nullable();
            $table->String("registerNo");
            $table->integer("companyID");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_daily_books');
    }
};
