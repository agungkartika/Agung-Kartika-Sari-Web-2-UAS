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
        Schema::table('stocks', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->foreignId('stock_id')->constrained('stocks')->onDelete('cascade');
        });
        Schema::table('notifications', function (Blueprint $table) {
            $table->foreignId('stock_id')->constrained('stocks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stocks', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->dropForeign(['stock_id']);
        });
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign(['stock_id']);
        });
    }
};
