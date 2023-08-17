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
        Schema::create('tbl_add_supplier', function (Blueprint $table) {
            $table->id();
            $table->String("supplierName")->nullable();
            $table->String("address")->nullable();
            $table->String("cityName",8,2)->nullable();
            $table->String("stateName",8,2)->nullable();
            $table->String("supplierType")->nullable();
            $table->bigInteger("contact")->nullable();
            $table->String("email")->nullable();
            $table->String("bankName")->nullable();
            $table->String("ifsc")->nullable();
            $table->String("accountNo")->nullable();
            $table->String("gstNo")->nullable();

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
        Schema::dropIfExists('tbl_add_supplier');
    }
};
