<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostHasImage extends Model
{
    public $table = 'post_has_images';
    protected $fillable = ['post_id','file_id'];
}
