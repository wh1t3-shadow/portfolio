<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fast_sec_add extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "fast_sec_adds";

    protected $fillable = [
        'name',
        'detail',
        'image'

    ];
}
