<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qw_nilai extends Model
{
    
    protected $table = 'qw_nilai';
 
    protected $fillable = ['id','id_siswa','nama','mtk','bin','big','prod','jml','ket','nop','nama','tl','tgll','keahlian','program','asal_sklh','foto'];
}
