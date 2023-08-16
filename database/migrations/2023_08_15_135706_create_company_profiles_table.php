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
        Schema::create('tbl_company_profiles', function (Blueprint $table) {
            $table->id();
            $table->String("registerNo");
            $table->String("companyName")->nullable();
            $table->bigInteger("contact")->nullable();
            $table->String("email")->nullable();
            $table->String("pincode")->nullable();
            $table->String("address1")->nullable();
            $table->String("address2")->nullable();
            $table->String("city")->nullable();
            $table->String("state")->nullable();
            $table->String("gstNo")->nullable();
            $table->String("logo")->nullable();
            $table->String("password")->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_company_profiles');
    }
};
