
@extends('template')
  <form action="/home"><input type="submit" class="btn btn-primary"  value="Home"></form> 
@section('content')

<div class="col-md-3 col-md-offset-3">
 <form method="post" action="/nilai/update">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="patch">
  <input type="hidden" name="id" value="{{ $nilais->id }}">
  <input type="hidden" name="id_siswa" value="{{ $nilais->id_siswa }}">

  <div class="form-group">
   <label>Nama Lengkap</label>
   <input type="text" class="form-control" name="nama" value="{{ $nilais->nama}}">
  </div>
  <div class="form-group">
   <label>Matematika</label>
   <input type="text" class="form-control" name="mtk" value="{{ $nilais->mtk}}">
  </div>
  <div class="form-group">
   <label>Bahasa Indonesia</label>
   <input type="text" class="form-control" name="bin" value="{{ $nilais->bin}}">
  </div>
  <div class="form-group">
   <label>Bahasa Inggris</label>
   <input type="text" class="form-control" name="big" value="{{ $nilais->big}}">
  </div>
  <div class="form-group">
   <label>Produktif</label>
   <input type="text" class="form-control" name="prod" value="{{ $nilais->prod}}">
  </div>
  <div class="form-group">
   <label>Jumlah</label>
   <input type="text" class="form-control" name="jml" value="{{ $nilais->jml}}">
  </div>
  <div class="form-group">
   <label>Keterangan</label>
   <input type="text" class="form-control" name="ket" value="{{ $nilais->ket}}">
  </div>
  <div class="form-group">
   <input type="submit" class="btn btn-primary" value="Update">
  </div> 

  <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>ID Siswa</th>
        <th>Nama</th>
        <th>Matematika</th>
        <th>Bahasa Indonesia</th>
        <th>Bahasa Inggris</th>
        <th>Produktif</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
        <th colspan="2">Action</th>
      </tr>
      <tr>
        <td>{{ $nilais->id }}</td>
        <td>{{ $nilais->id_siswa }}</td>
        <td>{{ $nilais->nama }}</td>
        <td>{{ $nilais->mtk }}</td>
        <td>{{ $nilais->bin}}</td>
        <td>{{ $nilais->big}}</td>
        <td>{{ $nilais->prod}}</td>
        <td>{{ $nilais->jml}}</td>
        <td>{{ $nilais->ket}}</td>
        
        <td>
        <a href="/nilai/edit/{{ $nilais->id }}">Edit</a> 
        <a href="/nilai/hapus/{{ $nilais->id }}">Hapus</a>
        </td>
      </tr>
  </table>
 </form>
</div>
