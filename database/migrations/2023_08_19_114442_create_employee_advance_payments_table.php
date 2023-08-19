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
        Schema::create('tbl_employee_advance_payment', function (Blueprint $table) {
            $table->id();
            $table->String("employeeName")->nullable();
            $table->date("date")->nullable();
            $table->String("advanceAmount")->nullable();
            $table->String("paymentType")->nullable();
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
        Schema::dropIfExists('tbl_employee_advance_payment');
    }
};
