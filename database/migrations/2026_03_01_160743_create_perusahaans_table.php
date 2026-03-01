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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 128);
            $table->string('alamat', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->text('tentang_kami')->nullable();
            $table->text('filosofi')->nullable();
            $table->text('visi')->nullable();
            $table->json('misi')->nullable();
            $table->string('email', 128)->nullable();
            $table->string('no_wa', 18)->nullable();
            $table->string('foto', 255)->nullable();
            $table->json('media_sosial')->nullable();
            $this->base($table);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
