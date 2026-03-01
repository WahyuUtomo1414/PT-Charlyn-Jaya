<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sertifikat extends Model
{
    use SoftDeletes, AuditedBySoftDelete;

    protected $table = 'sertifikat';
    protected $guarded = ['id'];
}
