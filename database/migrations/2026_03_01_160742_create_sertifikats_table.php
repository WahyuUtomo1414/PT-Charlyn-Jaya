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
        Schema::create('sertifikat', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 128);
            $table->string('foto', 255)->nullable();
            $table->string('jenis', 128)->nullable();
            $this->base($table);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sertifikat');
    }
};
