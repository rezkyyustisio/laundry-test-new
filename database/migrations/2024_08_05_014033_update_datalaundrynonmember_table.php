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
        Schema::table('datalaundrynonmember', function (Blueprint $table) {
            $table->foreignId('layanan_id')->constrained('layanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('datalaundrynonmember', function (Blueprint $table) {
            $table->dropForeign(['layanan_id']);
            $table->dropColumn('layanan_id');
        });
    }
};
