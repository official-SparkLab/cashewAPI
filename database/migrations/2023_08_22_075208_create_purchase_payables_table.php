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
        Schema::create('tbl_purchase_payable', function (Blueprint $table) {
            $table->id();
            $table->String("date")->nullable();
            $table->date("supplierName")->nullable();
            $table->String("contactNo")->nullable();
            $table->String("address")->nullable();
            $table->String("pendingAmount")->nullable();
            $table->String("paidAmount")->nullable();
            $table->String("availableBalance")->nullable();
            $table->String("paymentMode")->nullable();
            $table->String("trxNo")->nullable();

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
        Schema::dropIfExists('tbl_purchase_payable');
    }
};
