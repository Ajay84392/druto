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
        Schema::table('businesses', function (Blueprint $table) {
            $table->string('payment_status')->default('Trial');
            $table->timestamp('payment_date')->nullable();
            $table->decimal('payment_amount', 10, 2)->nullable();
            $table->string('plan')->default('Trial Plan');
            $table->timestamp('plan_valid_till')->nullable();
            $table->string('status')->default('Trial');
            $table->boolean('complimentary')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('businesses', function (Blueprint $table) {
            $table->dropColumn([
                'payment_status', 'payment_date', 'payment_amount',
                'plan', 'plan_valid_till', 'status', 'complimentary',
            ]);
        });
    }
};
