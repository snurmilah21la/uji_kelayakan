@extends('template')
<form action="/home"><input type="submit" class="btn btn-primary"  value="Home"></form>
@section('content')


<div class="col-md-3 col-md-offset-4">
 <form method="post" action="/siswa/update">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="patch">
  <input type="hidden" name="id" value="{{ $siswas->id }}">
  
  <div class="form-group">
   <label>Nomor Peserta Ujian</label>
   <input type="text" class="form-control" name="nop" value="{{$siswas->nop}}">
  </div>
  <div class="form-group">
   <label>Nama Lengkap</label>
   <input type="text" class="form-control" name="nama" value="{{ $siswas->nama }}">
  </div>
  <div class="form-group">
   <label>Tempat Lahir</label>
   <input type="text" class="form-control" name="tl" value="{{ $siswas->tl }}">
  </div>
  <div class="form-group">
   <label>Tanggal Lahir</label>
   <input type="date" class="form-control" name="tgl" value="{{ $siswas->tgll}}" >
  </div>
  <div class="form-group">
   <label>Bidang Keahlian</label>
   <input type="text" class="form-control" name="keahlian" value="{{ $siswas->keahlian}}">
  </div>
  <div class="form-group">
   <label>Program Keahlian</label>
   <input type="text" class="form-control" name="program" value="{{ $siswas->program}}">
  </div>
  <div class="form-group">
   <label>Asal Sekolah</label>
   <input type="text" class="form-control" name="asl" value="{{ $siswas->asal_sklh}}">
  </div>
  <div class="form-group">
   <label>Foto</label>
   <input type="file" class="form-control" name="foto" value="{{ $siswas->foto }}">
  </div>
  <div class="form-group">
   <input type="submit" class="btn btn-primary" value="Update">
  </div> 
   </form>
</div>
