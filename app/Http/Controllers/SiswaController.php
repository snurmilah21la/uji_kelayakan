<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controllers;
use App\siswa;
use Illuminate\Http\Request;
use Redirect;

class SiswaController extends Controller
{
	public function tampil()
    {

    $siswa = DB::table('siswas')->get();

    return view('create')->with('siswas',$siswa);

    }

    public function tampildata()
    {

    $siswa = DB::table('siswas')->get();

    return view('data')->with('siswas',$siswa);

    }
    public function tambah(request $request){
        
         if($request->hasfile('foto'))
         {
            $file = $request->file('foto');
            $nama = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $nama);
         }


        $data = array(
            'nop' => $request->nop,
            'nama' => $request->nama,
            'tl' => $request->tl,
            'tgll' => $request->tgl,
            'keahlian' => $request->keahlian,
            'program' => $request->program,
            'asal_sklh' => $request->asl,
            'foto'=> $nama
        );

        DB::table('siswas')->insert($data);
        return Redirect::to('siswa')->with('message','Berhasil Ditambahkan');
    }

    public function hapus($id){
        DB::table('siswas')->where('id','=',$id)->delete();
        return Redirect::to('siswa')->with('message','Berhasil Dihapus');
    }

    public function editdata($id){
        $data = DB::table('siswas')->where('id','=',$id)->first();
        return view ('edit')->with('siswas', $data);
    }

    public function nilai($id){
        $data = DB::table('siswas')->where('id','=',$id)->first();
        return view ('createnilai')->with('siswas', $data);
    }

    public function updatedata(request $request){
       
        $datas = [
            'id' => $request->id,
            'nop' => $request->nop,
            'nama' => $request->nama,
            'tl' => $request->tl,
            'tgll' => $request->tgl,
            'keahlian' => $request->keahlian,
            'program' => $request->program,
            'asal_sklh' => $request->asl,
            'foto'=> $request->foto
       ];
         $siswas =  DB::table('siswas')->where('id','=', $request->id)->update($datas);
           return redirect::to('siswa')->with('message',"Berhasil Di Update");
   }

   public function cari(Request $request){
    $search = $request->cari;
    $post = DB::table('siswas')
    ->where('nama','like','%'.$search.'%')
    ->orwhere('id','like','%'.$search.'%')
    ->orwhere('program','like','%'.$search.'%')
    ->orwhere('keahlian','like','%'.$search.'%')
    ->paginate();
    return view('data',['siswas' => $post]);
   }
}
