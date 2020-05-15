<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
 
    protected $fillable = ['id','nop','nama','tl','tgll','keahlian','program','asal_sklh','foto'];
}
