<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penawaran extends Model
{
    use SoftDeletes, AuditedBySoftDelete;

    protected $table = 'penawaran';
    protected $guarded = ['id'];

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }
}
