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
        Schema::create('tbl_expenses', function (Blueprint $table) {
            $table->id();
            $table->String("expenseName")->nullable();
            $table->String("expenseDetails")->nullable();
            $table->date("date")->nullable();
            $table->float("mrp",8,2)->nullable();
            $table->String("gstNo")->nullable();
            $table->float("totalAmount",8,2)->nullable();
            $table->String("paidStatus")->nullable();
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
        Schema::dropIfExists('tbl_expenses');
    }
};
