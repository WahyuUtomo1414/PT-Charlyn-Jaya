<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use SoftDeletes, AuditedBySoftDelete;

    protected $table = 'customer';
    protected $guarded = ['id'];

    public function portofolio(): HasMany
    {
        return $this->hasMany(Portofolio::class);
    }
}
