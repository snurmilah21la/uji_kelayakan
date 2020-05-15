@extends('template')
   
<form action="/home"><input type="submit" class="btn btn-primary"  value="Home"></form>
@section('content')


<div class="col-md-2 col-md-offset-1">
 <form method="get" action="/search">
  <div class="form-group">
   Search <input type="text" class="form-control" name="cari">
   <input type="submit" class="btn btn-primary" value="Cari">
  </div>
</form>
<br><br>
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
        <th>Action</th>
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
        <a href="/nilai/{{ $s->id }}">pilih</a>
        </td>
      </tr>
      @endforeach
  </table>
</div>
@stop
