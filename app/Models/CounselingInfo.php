<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CounselingInfo extends Model
{

    public $table = 'counseling_infos';

    public function image(){
        return $this->belongsToMany('App\Models\Image','counseling_info_has_images','counseling_info_id','file_id');
    }
}
