<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dekopinda extends Model
{
    protected $table = 'dekopindas';

    protected $fillable = ['no','id_dekopinwil','nama_dekopinda','no_sk','tgl_sk','nama_ketua','no_kontak'];
}
