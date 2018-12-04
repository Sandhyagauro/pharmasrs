<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CounselingInfoHasImages extends Model
{
    public $table = 'counseling_info_has_images';
    protected $fillable = ['counseling_info_id','file_id'];

}
