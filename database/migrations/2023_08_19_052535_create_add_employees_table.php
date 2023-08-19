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
        Schema::create('tbl_add_employee', function (Blueprint $table) {
            $table->id();
            $table->String("employeeName")->nullable();
            $table->date("dob")->nullable();
            $table->String("address")->nullable();
            $table->bigInteger("contact")->nullable();
            $table->date("joinDate")->nullable();
            $table->String("employeeType")->nullable();
            $table->String("designation");
            $table->String("salary");
            $table->String("bankName");
            $table->String("ifsc");
            $table->String("accountNo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_add_employee');
    }
};
