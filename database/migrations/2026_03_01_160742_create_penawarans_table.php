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
        Schema::create('penawaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layanan_id')->nullable();
            $table->string('nama_perusahaan', 128)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->text('deskripsi')->nullable();
            $table->date('tanggal_permintaan')->nullable();
            $table->string('file', 255)->nullable();
            $table->string('status', 128)->nullable();
            $table->string('catatan', 255)->nullable();

            $table->foreign('layanan_id')->references('id')->on('layanan');

            $this->base($table);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penawaran');
    }
};
