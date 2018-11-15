<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public $table = 'posts';
    protected $fillable = ['title', 'content', 'excerpt', 'type'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function image(){
        return $this->belongsToMany('App\Models\Image','post_has_images','post_id','file_id');
    }
}
