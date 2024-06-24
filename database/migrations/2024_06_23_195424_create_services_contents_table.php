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
        Schema::create('services_contents', function (Blueprint $table) {
            $table->id();
            $table->string('refreshing_design');
            $table->string('solid_bootstrap');
            $table->string('speed');
            $table->string('fully_customizable');
            $table->string('regular_updates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_contents');
    }
};
