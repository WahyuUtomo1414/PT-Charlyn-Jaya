<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Layanan extends Model
{
    use SoftDeletes, AuditedBySoftDelete;

    protected $table = 'layanan';
    protected $guarded = ['id'];

    protected $casts = [
        'lingkup_layanan' => 'array',
        'foto' => 'array',
    ];

    public function portofolio(): HasMany
    {
        return $this->hasMany(Portofolio::class);
    }

    public function penawaran(): HasMany
    {
        return $this->hasMany(Penawaran::class);
    }
}
