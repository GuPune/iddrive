<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewContent extends Model
{
    use HasFactory;

    protected $table = 'new';

    protected $fillable = [
        'id',
        'title',
        'des',
        'url',
        'keywords',
        'status',
        'n_code',
        'type',
        'view'
    ];
}
