@extends('template')
   <form action="/home"><input type="submit" class="btn btn-primary"  value="Home"></form>

@section('content')


<div class="col-md-2 col-md-offset-1">
 <form method="post" action="/cariin">
  <div class="form-group">
   Search <input type="text" class="form-control" name="cari">
   <input type="submit" class="btn btn-primary" value="Cari">
  </div>

  <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>ID Siswa</th>
        <th>Nama Siswa</th>
        <th>Matematika</th>
        <th>Bahasa Indonesia</th>
        <th>Bahasa Inggris</th>
        <th>Produktif</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
        <th colspan="2">Action</th>
      </tr>
      @foreach($nilais as $n)
      <tr>
        <td>{{ $n->id }}</td>
        <td>{{ $n->id_siswa }}</td>
        <td>{{ $n->nama }}</td>
        <td>{{ $n->mtk }}</td>
        <td>{{ $n->bin}}</td>
        <td>{{ $n->big}}</td>
        <td>{{ $n->prod}}</td>
        <td>{{ $n->jml}}</td>
        <td>{{ $n->ket}}</td>
        
        <td>
        <a href="/nilai/edit/{{ $n->id }}">Edit</a> 
        <a href="/nilai/hapus/{{ $n->id }}">Hapus</a>
        </td>
      </tr>
      @endforeach
  </table><br>
        <a href="/data">Tambah</a>

 </form>
</div>
@stop
