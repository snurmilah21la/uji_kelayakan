<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controllers;
use App\qw_nilai;
use Redirect;
class qwController extends Controller
{
    public function tampil()
    {

    $siswa = DB::table('qw_nilai')->get();

    return view('cetak')->with('qw_nilai',$siswa);

    }

    public function editdata($id){
        $data = DB::table('qw_nilai')->where('id','=',$id)->first();
        return view ('form')->with('qw_nilai', $data);
    }

    public function cari(Request $request){
    $search = $request->cari;
    $post = DB::table('qw_nilai')
    ->where('nama','like','%'.$search.'%')
    ->orwhere('id','like','%'.$search.'%')
    ->orwhere('program','like','%'.$search.'%')
    ->orwhere('keahlian','like','%'.$search.'%')
    ->orwhere('jml','like','%'.$search.'%')
    ->orwhere('ket','like','%'.$search.'%')
    ->paginate();
    return view('cetak',['qw_nilai' => $post]);
   }
}
