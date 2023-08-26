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
        Schema::create('tbl_create_user', function (Blueprint $table) {
            $table->id();
            $table->String("userName")->nullable();
            $table->String("gender")->nullable();
            $table->bigInteger("contactNo")->nullable();
            $table->String("email")->nullable();
            $table->String("password")->nullable();

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
        Schema::dropIfExists('tbl_create_user');
    }
};
