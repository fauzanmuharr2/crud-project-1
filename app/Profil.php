<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = ['nama','tgl_lahir','alamat','no_tlp','id_akun'];
    public $timestamps = true;
}
