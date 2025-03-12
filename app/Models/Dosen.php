<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'nik';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'nik',
        'nama',
        'birth_date',
        'email',
        ];
}
