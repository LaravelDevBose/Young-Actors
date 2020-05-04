<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Attachment extends Model
{
    const attachmentModels = [
        'user' => 1,
        'member' => 2,
    ];


    protected $table = 'attachments';
    protected $primaryKey = 'attachment_id';

    protected $fillable = [
        'attachment_no',
        'reference_id',
        'reference',
        'file_name',
        'folder',
        'file_type',
        'file_size',
        'original_name'
    ];

    function scopeByReference($query, $model)
    {
        return $query->where('model', self::attachmentModels[$model]);

    }

    public function getImagePathAttribute(){
        $path = storage_path('app/public/attachments/'.$this->attributes['folder'] .'/'. $this->attributes['file_name']);
        if(file_exists($path)){
            //        $path = storage_path('app/public/default/d_addons.png');
            $type = pathinfo($path, PATHINFO_EXTENSION);
            if($type == 'pdf') {
                return Storage::disk('local')->url('attachments/'.$this->attributes['folder'] .'/'. $this->attributes['file_name']);
            }
            $data = file_get_contents($path);
            return $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        }

        return false;

    }
}
