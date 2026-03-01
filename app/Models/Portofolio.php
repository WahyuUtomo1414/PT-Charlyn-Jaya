<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portofolio extends Model
{
    use SoftDeletes, AuditedBySoftDelete;

    protected $table = 'portofolio';
    protected $guarded = ['id'];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }
}
