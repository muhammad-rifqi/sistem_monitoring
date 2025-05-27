<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dekopinwil extends Model
{
    protected $table = 'dekopinwil';

    protected $fillable = ['no','nama_dekopinwil','no_sk','tgl_sk','nama_ketua','no_kontak'];
}
