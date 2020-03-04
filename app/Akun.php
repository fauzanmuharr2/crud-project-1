<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $fillable = ['nama', 'email','tlp','id_profil','id_postingan','id_group'];
    public $timestamps = true;

    public function profil()
    {
        return $this->hasOne('App\Profil' , 'id_profil');
    }
    public function group()
    {
        return $this->hasMany('App\Group' , 'id_group');
    }
    public function postingan()
    {
        return $this->belongsToMany('App\Postingan' , 'id_postingan');
    }
}
