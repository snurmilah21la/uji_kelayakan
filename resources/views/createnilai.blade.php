
@extends('template')
  <form action="/home"><input type="submit" class="btn btn-primary"  value="Home"></form>

@section('content')

<div class="col-md-3 col-md-offset-3">
 <form method="post" action="/nilai/tambah" name="autoSumForm">

  <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

   <div class="form-group" >
   <label>ID Siswa</label>
   <input type="text" class="form-control" name="id_siswa" required="required" value="{{ $siswas->id}}">

  <div class="form-group">
   <label>Nama Lengkap</label>
   <input type="text" class="form-control" name="nama" value="{{ $siswas->nama}}" >
  </div>
  <div class="form-group">
   <label>Matematika</label>
   <input type="text" class="form-control" name="mtk" id="mtk" onblur="return hit()">
  </div>
  <div class="form-group">
   <label>Bahasa Indonesia</label>
   <input type="text" class="form-control" name="bin" id="ind" onblur="return hit()" >
  </div>
  <div class="form-group">
   <label>Bahasa Inggris</label>
   <input type="text" class="form-control" name="big" id="big" onblur="return hit()" >
  </div>
  <div class="form-group">
   <label>Produktif</label>
   <input type="text" class="form-control" name="prod" id="prod" onblur="return hit()">
  </div>
  
  <div class="form-group">
   <label>Jumlah</label>
   <input type="text" class="form-control" name="jml" readonly="readonly" onblur="return ket()">
  </div>
  <div class="form-group">
   <label>Keterangan</label>
   <input type="text" class="form-control" name="ket" readonly="readonly"  >
  </div>
  <div class="form-group">
   <input type="submit" class="btn btn-primary" value="Simpan">
  </div> 

 </form>
</div>
<script src="{{ asset('jQuery.min.js') }}"></script>
<script>
  function hit() {
    var b1 = parseFloat(document.autoSumForm.mtk.value);
    var b2 = parseFloat(document.autoSumForm.bin.value);
    var b3 = parseFloat(document.autoSumForm.big.value);
    var b4 = parseFloat(document.autoSumForm.prod.value);
    document.autoSumForm.jml.value = b1 + b2 + b3 + b4;

    var a = parseFloat(document.autoSumForm.jml.value);

    if(a>=400){
      document.autoSumForm.ket.value = "Lebih dari Sempurna";
    }else if(a>=50){
      document.autoSumForm.ket.value = "LULUS";
    }else if(a<= 0){
      document.autoSumForm.ket.value = "NILAI TAK TERDEFINISI";
    }else{
      document.autoSumForm.ket.value = "TIDAK LULUS";
    }
  }
</script>
@stop
