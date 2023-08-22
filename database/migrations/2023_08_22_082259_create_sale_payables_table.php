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
        Schema::create('tbl_sale_payable', function (Blueprint $table) {
            $table->id();
            $table->date("date")->nullable();
            $table->String("supplierName")->nullable();
            $table->bigInteger("contactNo")->nullable();
            $table->String("address")->nullable();
            $table->Double("pendingAmount")->nullable();
            $table->Double("paidAmount")->nullable();
            $table->Double("availableBalance")->nullable();
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
        Schema::dropIfExists('tbl_sale_payable');
    }
};
