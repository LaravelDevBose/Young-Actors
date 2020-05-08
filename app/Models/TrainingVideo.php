<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingVideo extends Model
{
    protected $table = 'training_videos';
    protected $primaryKey = 'video_id';

    protected $fillable = [
        'video_title',
        'video_url',
        'video_status',
    ];
}
