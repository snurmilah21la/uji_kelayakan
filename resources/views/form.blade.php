<!DOCTYPE html>
<html>
<head>
  <title>Laporan</title>
</head>
<body>
  <p class="head">PEMERINTAH KOTA BOGOR</p><br>
  <p class="head2">SMK SUKA_SUKA</p><br>
  <p class="head3">Tahun Pelajaran 2019/2020</p><hr style="height: 2px; border: 2; border-color: black; background-color: #000;">
  <p class="head4">SURAT KETERANGAN HASIL UJIAN NASIONAL (SKHUN) SEMENTARA TAHUN PELAJARAN 2019/2020</p>
  <p class="body">Berdasarkan hasil Ujian Nasional tahun 2019/2020, siswa dibawah ini:</p><br>
  <table cellpadding="2" cellspacing="1">
    <tr>
      <td><p class="body1">Nama</p></td>
      <td><p class="body2">:</p></td>
      <td><p class="body2" style="margin-left: 50px;">{{$qw_nilai->id}}</p></td>
    </tr>
    <tr>
      <td><p class="body1">Tempat dan Tanggal Lahir</p></td>
      <td><p class="body2">:</p></td>
      <td><p class="body2" style="margin-left: 50px;">{{$qw_nilai->tl}},{{$qw_nilai->tgll}}</p></td>
    </tr>
    <tr>
      <td><p class="body1">Sekolah Asal</p></td>
      <td><p class="body2">:</p></td>
      <td><p class="body2" style="margin-left: 50px;">{{$qw_nilai->asal_sklh}}</p></td>
    </tr>
    <tr>
      <td><p class="body1">Nomor Peserta Ujian Nasional</p></td>
      <td><p class="body2">:</p></td>
      <td><p class="body2" style="margin-left: 50px;">{{$qw_nilai->nop}}</p></td>
    </tr>
    <tr>
      <td><p class="body1">Bidang/Program Keahlian</p></td>
      <td><p class="body2">:</p></td>
      <td><p class="body2" style="margin-left: 50px;">{{$qw_nilai->keahlian}}/{{$qw_nilai->program}}</p></td>
    </tr>
  </table><br>
  <p class="body">Dinyatakan <b>{{$qw_nilai->ket}}</b></p><br>
  <p style="font-weight: bold; text-align: center;">DAFTAR NILAI</p><br>
  <table border="1" style="border-color: black; text-align: center;" align="center" cellpadding="4">
    <tr style="background-color: grey; font-weight: bold;">
      <td>NO</td>
      <td>MATA PELAJARAN</td>
      <td>Nilai Ujian Nasional</td>
    </tr>
    <tr>
      <td>1</td>
      <td>B. Indonesia</td>
      <td>{{$qw_nilai->bin}}</td>
    </tr>
    <tr>
      <td>2</td>
      <td>B. Inggris</td>
      <td>{{$qw_nilai->big}}</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Matematika</td>
      <td>{{$qw_nilai->mtk}}</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Produktif</td>
      <td>{{$qw_nilai->prod}}</td>
    </tr>
    <tr>
      <td colspan="2">Jumlah</td>
      <td>{{$qw_nilai->jml}}</td>
    </tr>
  </table>
  <br>
  <br>
  <br>
   <img src="{{asset('images/'.$qw_nilai->foto)}}" style="margin-left: 370px; width: 100px; margin-top: 30px; position: absolute;">
  <p class="ttd" style="text-align: center; margin-top: 30px;">Bogor, 19-06-2020</p><br>
  <p class="ttd" style="text-align: center; margin-top: -30px;">Kepala Sekolah</p><br>
  <p class="ttd" style="text-align: center; margin-top: 40px;">Kepsek</p>
</body>
<script type="text/javascript">
  window.print();
</script>
</html>

<style type="text/css">
.ttd{
  margin-left: 400px;
}
.body1{
  font-size: 13px;
  text-align: left;
  margin-bottom: -15px;
  margin-right: 20px;
  margin-left: 20px;
}
.body2{
  font-size: 13px;
  text-align: left;
  margin-bottom: -15px;
}
.body{
  font-size: 13px;
  text-align: left;
  margin-bottom: -15px;
}
.head{
  text-align: center;
  font-weight: bold;
  margin-left: 0px;
}

.head4{
  text-align: center;
  font-weight: bold;
  padding-left: 90px;
  padding-right: 90px;
}

.head2{
  text-align: center;
  margin-top: -28px;
  font-weight: bold;
  margin-left: 0 px;
}

.head3{
  text-align: center;
  margin-top: -28px;
  font-size: 13px;
  margin-left: 0 px;
}
</style>