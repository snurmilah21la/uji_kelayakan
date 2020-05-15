<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controllers;
use App\siswa;
use Redirect;
class nilaiController extends Controller
{
    public function tampil()
    {

    $siswa = DB::table('nilais')->get();

    return view('nilai')->with('nilais',$siswa);

    }

    public function tambah(request $request){
        $data = array(
            'id_siswa' => $request->id_siswa,
            'nama' => $request->nama,
            'mtk' => $request->mtk,
            'bin' => $request->bin,
            'big' => $request->big,
            'prod' => $request->prod,
            'jml' => $request->jml,
            'ket' => $request->ket
        );

        DB::table('nilais')->insert($data);
        return Redirect::to('nilai')->with('message','Berhasil Ditambahkan');
    }

    public function hapus($id){
        DB::table('nilais')->where('id','=',$id)->delete();
        return Redirect::to('nilai')->with('message','Berhasil Dihapus');
    }

    public function editdata($id){
        $data = DB::table('nilais')->where('id','=',$id)->first();
        return view ('editnilai')->with('nilais', $data);
    }

    public function updatedata(request $request){
        $datas = [
            'id_siswa' => $request->id_siswa,
            'nama' => $request->nama,
            'mtk' => $request->mtk,
            'bin' => $request->bin,
            'big' => $request->big,
            'prod' => $request->prod,
            'jml' => $request->jml,
            'ket' => $request->ket
       ];
         $siswas =  DB::table('nilais')->where('id','=', $request->id)->update($datas);
           return redirect::to('nilai')->with('message',"Berhasil Di Update");
   }

   public function cari(Request $request){
    $search = $request->cari;
    $post = DB::table('nilais')
    ->where('nama','like','%'.$search.'%')
    ->orwhere('id_siswa','like','%'.$search.'%')
    ->orwhere('mtk','like','%'.$search.'%')
    ->orwhere('bin','like','%'.$search.'%')
    ->orwhere('big','like','%'.$search.'%')
    ->orwhere('jml','like','%'.$search.'%')
    ->orwhere('ket','like','%'.$search.'%')
    ->paginate();
    return view('nilai',['nilais' => $post]);
   }
}
