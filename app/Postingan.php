<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    protected $fillable = ['akun_id','deskripsi','kategori'];
    public $timestamps = true ;

    public function akun()
    {
        return $this->belongsTo('App\Akun','akun_id');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag',
                                    'postingan_tags',
                                    'postingan_id',
                                    'tag_id');
    }
}
