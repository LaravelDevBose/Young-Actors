<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleInfo extends Model
{
    protected $table = 'schedule_infos';
    protected $primaryKey=' schedule_id';

    protected $fillable =[
        'schedule_title',
        'schedule_details',
        'schedule_date',
        'schedule_status',
    ];
}
