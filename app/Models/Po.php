<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Po extends Model
{
    use SoftDeletes, AuditedBySoftDelete;

    protected $table = 'po';
    protected $guarded = ['id'];

    public function penawaran(): BelongsTo
    {
        return $this->belongsTo(Penawaran::class);
    }
}
