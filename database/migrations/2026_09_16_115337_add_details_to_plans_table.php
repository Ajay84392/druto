<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->string('type')->nullable()->after('billing_cycle');
            $table->string('short_description', 150)->nullable()->after('type');
            $table->text('detailed_description')->nullable()->after('short_description');
        });
    }

    public function down(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn(['type', 'short_description', 'detailed_description']);
        });
    }
};
