@extends('admin.base')
@section('content')
<style media="screen">
#section {
    width:350px;
    float:left;
    padding:10px;
}
body {
    margin: 0;
}
tr{
  background-color: #0088cc;
}
td{
  background-color: #e6f7ff;
  padding: 10px;
}

ul {
    z-index: 1;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
.isi{
  padding-top: 10px;
}

</style>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">



<div class="header">
  <ul>
      <p style="text-align:center; color:white;font-size:18px;">
        PETUGAS PLIKEMAS
      </p>
    <li><a class="active"href="{{url('admin/home')}}">Home</a></li>
    <li><a href="{{url('petugas/tanggapan')}}">Daftar Tanggapan</a></li>
    <li style="float:right;"><a href="{{ url('logout') }}">Logout</a></li>
    <li style="float:right;"><p style="color:white">{{Session::get('username')}}</p></li>

  </ul>
</div>

      </div>
      <div class="isi">
        <!-- <a style="background-color: #0088cc;padding: 10px; margin: 10px;text-decoration:none;color:black;"
        href="{{url('petugas/tanggapan')}}">Tanggapan</a> -->

     <table class="table">
            <tr>
                <th>Tanggal</th>
                <th>Isi Laporan</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
                @foreach($tanggapan as $data)
            <tr>
                <td>{{$data->tgl_pengaduan}}</td>
                <td>{{$data->isi_laporan}}</td>
                <td><a style="background-color: #47d147;padding: 5px;text-decoration:none;color:black;
                  "target="_blank" href="url('../../../../public/images/{{$data->foto}}">Tampilkan</a></td>
                <td>
                    @if($data->status == "0")
                    <a style="background-color: #ff9933;padding: 5px;text-decoration:none;color:black;
                    "href="{{url('petugas/tanggapan/proses/'.$data->id_pengaduan)}}">ACC PENGADUAN</a>
                    @elseif($data->status == "proses")
                    <a style="background-color: #0088cc;padding: 5px;text-decoration:none;color:black;
                    "href="{{url('petugas/tanggapan/tambah/'.$data->id_pengaduan)}}">TANGGAPI</a>

                    @endif
                </td>
            </tr>
                @endforeach
        </table>
      </div>
      <footer>
        <div style="text-align:center;padding-top:10px;">
        2020 © PLIKEMAS
        </div>
      </footer>

        <!-- /.content -->
    </section>
    <!-- /.main-section -->
