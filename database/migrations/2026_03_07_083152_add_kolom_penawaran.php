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
        Schema::table('penawaran', function (Blueprint $table) {
            $table->integer('quantity')->nullable();
            $table->date('deadline_pengerjaan')->nullable();
            $table->string('file_penawaran', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penawaran', function (Blueprint $table) {
            $table->dropColumn('quantity');
            $table->dropColumn('deadline_pengerjaan');
            $table->dropColumn('file_penawaran');
        });
    }
};
