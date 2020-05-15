@extends('template')

<form action="/home"><input type="submit" class="btn btn-primary"  value="Home"></form>
@section('content')
   
<div class="col-md-7 col-md-offset-1" align="center" >
 <form method="post" action="/siswa/tambah" enctype="multipart/form-data">

  <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

  <div class="form-group" align="center" style="margin-left: 250px">
   <label>Nomor Peserta Ujian</label>
   <input type="text" class="form-control" name="nop" required="required">
  </div>
  <div class="form-group" style="margin-left: 250px">
   <label>Nama Lengkap</label>
   <input type="text" class="form-control" name="nama" required="required">
  </div>
  <div class="form-group" style="margin-left: 250px">
   <label>Tempat Lahir</label>
   <input type="text" class="form-control" name="tl" required="required">
  </div>
  <div class="form-group" style="margin-left: 250px">
   <label>Tanggal Lahir</label>
   <input type="date" class="form-control" name="tgl" required="required">
  </div>
  <div class="form-group" style="margin-left: 250px">
   <label>Bidang Keahlian</label>
   <input type="text" class="form-control" name="keahlian" required="required">
  </div>
  <div class="form-group" style="margin-left: 250px">
   <label>Program Keahlian</label>
   <input type="text" class="form-control" name="program" required="required">
  </div>
  <div class="form-group" style="margin-left: 250px">
   <label>Asal Sekolah</label>
   <input type="text" class="form-control" name="asl" required="required">
  </div>
  <div class="form-group" style="margin-left: 250px">
   <label>Foto</label>
   <input type="file" class="form-control" name="foto" required="required">
  </div>
  <div class="form-group" style="margin-left: 250px">
   <input type="submit" class="btn btn-primary" value="Simpan">   
  </div>

  <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Bidang Keahlian</th>
        <th>Program Keahlian</th>
        <th>Asal Sekolah</th>
        <th>Foto</th>
        <th colspan="2">Action</th>
      </tr>

      @foreach($siswas as $s)
      <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->tl}}</td>
        <td>{{ $s->tgll}}</td>
        <td>{{ $s->keahlian}}</td>
        <td>{{ $s->program}}</td>
        <td>{{ $s->asal_sklh}}</td>
        <td>{{ $s->foto}}</td>
        
        <td>
        <a href="/siswa/edit/{{ $s->id }}">Edit</a> 
        <a href="/siswa/hapus/{{ $s->id }}">Hapus</a>
        </td>
      </tr>
      @endforeach
  </table>
 </form>
</div>
@stop
