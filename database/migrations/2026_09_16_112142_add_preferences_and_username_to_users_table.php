<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable()->unique()->after('email');
            $table->string('language')->default('English')->after('photo');
            $table->string('timezone')->default('Asia/Kolkata')->after('language');
            $table->string('date_format')->default('d M, Y')->after('timezone');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'language', 'timezone', 'date_format']);
        });
    }
};
