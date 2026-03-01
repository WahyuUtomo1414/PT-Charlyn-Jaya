<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perusahaan extends Model
{
    use SoftDeletes, AuditedBySoftDelete;

    protected $table = 'perusahaan';
    protected $guarded = ['id'];

    protected $casts = [
        'misi' => 'array',
        'media_sosial' => 'array',
    ];
}
