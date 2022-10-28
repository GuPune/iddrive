<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;

    protected $table = 'system_menu';

    protected $fillable = [
        'id',
        'name_th',
        'name_en',
        'name_ch',
        'system_menu',
        'link',
        'system_encodeid',
        'type',
    ];
}

