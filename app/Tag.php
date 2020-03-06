<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag'];
    public $timestamps = true ;

    public function postingan()
    {
        return $this->belongsToMany('App\Postingan',
                                    'postingan_tags',
                                    'tag_id',
                                    'postingan_id');
    }
}
