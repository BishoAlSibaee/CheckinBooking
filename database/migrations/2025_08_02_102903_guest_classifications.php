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
        Schema::create('guest_classifications', function (Blueprint $table) {
            $table->id();
            $table->string('classification_name')->unique()->comment('Name of the guest classification');
            $table->string('classification_local_name')->nullable()->comment('Local name of the guest classification');
            $table->string('description')->nullable()->comment('Description of the guest classification');
            $table->unsignedBigInteger('discount_id')->default(0)->comment('Type of discount applied to the guest classification');
            $table->string('granted_facilities')->nullable()->comment('Facilities granted to the guest classification');
            $table->tinyInteger('active')->default(1)->comment('0 for inactive, 1 for active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_classifications');
    }
};
