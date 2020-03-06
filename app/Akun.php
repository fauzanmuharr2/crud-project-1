<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $fillable = ['nama', 'tlpn','email'];
    public $timestamps = true;

    public function group()
    {
        return $this->hasMany('App\Group','akun_id');
    }

    public function profil()
    {
        return $this->hasOne('App\Profil','akun_id');
    }

    public function postingan()
    {
        return $this->hasMany('App\Postingan','akun_id');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag',
                                    'postingan_tag',
                                    'id_postingan',
                                    'id_tag');
    }
}
