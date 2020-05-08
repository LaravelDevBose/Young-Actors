<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    const KeyList = [
        'class_url'=>'class_url'
    ];

    protected $table = 'settings';
    protected $primaryKey = 'setting_id';

    protected $fillable = [
        'key_name',
        'setting_value',
    ];
}
