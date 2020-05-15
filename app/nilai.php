<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table = 'nilais';
 
    protected $fillable = ['id','id_siswa','nama','mtk','bin','big','prod','jml','ket'];
}
