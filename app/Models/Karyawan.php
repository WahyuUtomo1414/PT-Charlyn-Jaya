<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use SoftDeletes, AuditedBySoftDelete;

    protected $table = 'karyawan';
    protected $guarded = ['id'];
}
