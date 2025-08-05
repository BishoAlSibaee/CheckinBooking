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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment("Name of the permission");
            $table->string('name_local')->comment("Localized name of the permission");
            $table->string('description')->nullable()->comment("Description of the permission");
            $table->boolean('active')->default(true)->comment("0 => InActive 1 => Active");
            $table->timestamps();
            $table->comment("Table to store permissions for users and roles");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
