<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workphoto extends Model
{
    use HasFactory;


    protected $table = "workphotos";

    protected $fillable = [
        'name',
        'detail',
        'image'

    ];
}
