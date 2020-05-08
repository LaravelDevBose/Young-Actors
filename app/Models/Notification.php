<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    const Channels =[
        'Email'=>1,
        'SMS'=>2,
    ];

    const StatusList = [
        'Delete'=>0,
        'Waiting'=>1,
        'Processing'=>2,
        'Sent'=>3,
        'Fail'=>4
    ];

    protected $table = 'notifications';
    protected $primaryKey = 'notify_id';

    protected $fillable = [
        'user_id',
        'title',
        'body_text',
        'channel',
        'send_address',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
