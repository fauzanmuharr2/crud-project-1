<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['akun_id','nama_grup'];
    public $timestamps = true;

    public function akun()
    {
        return $this->belongsTo('App\Akun','akun_id');
    }
}
