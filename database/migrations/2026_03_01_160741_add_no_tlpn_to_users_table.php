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
        Schema::table('users', function (Blueprint $table) {
            $table->string('no_tlpn', 18)->nullable()->after('email');
            $this->base($table);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('no_tlpn');
        });
    }
};
