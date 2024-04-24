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
    Schema::create('taxis', function (Blueprint $table) {
      $table->id();
      $table->foreignId('company_id')->constrained();
      $table->string("taxi_code")->unique();
      $table->boolean("is_available");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('taxis');
  }
};
