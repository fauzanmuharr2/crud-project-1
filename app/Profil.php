<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = ['akun_id','alamat'];
    public $timestamps = true;

    public function akun()
    {
        return $this->belongsTo('App\Akun','akun_id');
    }

}
