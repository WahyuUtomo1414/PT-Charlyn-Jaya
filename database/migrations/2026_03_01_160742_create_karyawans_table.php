<?php

use App\Traits\BaseModelSoftDeleteDefault;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BaseModelSoftDeleteDefault;

    public function up(): void
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 128);
            $table->string('foto', 128)->nullable();
            $table->string('jabatan', 128)->nullable();
            $this->base($table);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
