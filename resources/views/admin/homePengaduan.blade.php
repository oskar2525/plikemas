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

</style>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">



<div class="sidebar">

  <ul>
      <p style="text-align:center; color:white;font-size:18px;">
        ADMIN PLIKEMAS
      </p>
    <li><a href="{{url('admin/home')}}">Home</a></li>
    <li><a href="{{url('admin/petugas')}}">Daftar Petugas</a></li>
    <li><a href="{{url('admin/masyarakat')}}">Daftar Masyarakat</a></li>
    <li><a class="active"href="{{url('admin/pengaduan')}}">Daftar Pengaduan</a></li>
    <li><a href="{{url('admin/tanggapan')}}">Daftar Tanggapan</a></li>
    <li style="float:right;"><a href="{{ url('logout') }}">Logout</a></li>
    <li style="float:right"><p style="color:white">{{Session::get('username')}}</p></li>

  </ul>
</div>

      </div>
      <div>
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1 style="text-align:center">DAFTAR PENGADUAN </h1>

            <!-- <a style="background: rgba(0,0,0,0.5);padding:10px;font-size: 16px;
            color:white;"href="{{ url('admin/home') }}" class="btn-logout">Kembali</a> -->



            <h1>Pengaduan belum di tanggapi</h1>

            <a style="background-color: #ff9933;padding: 10px; margin: 10px;text-decoration:none;color:black;"
            href="{{url('admin/pengaduan/cetak')}}">Cetak Data(PDF)</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduan as $data)
                    <tr>
                        <td>{{$data->tgl_pengaduan}}</td>
                        <td>{{$data->masyarakat->nik}}</td>
                        <td>{{$data->masyarakat->nama}}</td>
                        <td>{{$data->isi_laporan}}</td>
                        <td><a style="background-color: #47d147;padding: 5px;text-decoration:none;color:black;"target="_blank" href="url('../../../../public/images/{{$data->foto}}">Tampilkan</a></td></td>
                        <td>
                            @if($data->status == "0")
                            <a style="background-color: #ff9933;padding: 5px;text-decoration:none;color:black;
                            "href="{{url('admin/tanggapan/proses/'.$data->id_pengaduan)}}">ACC PENGADUAN</a>
                            @elseif($data->status == "proses")
                            <a style="background-color: #0088cc;padding: 5px;text-decoration:none;color:black;
                            "href="{{url('admin/tanggapan/tambah/'.$data->id_pengaduan)}}">TANGGAPI</a>

                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <br><br><br>


            <h1>Pengaduan telah di tanggapi</h1>

            <a style="background-color: #ff9933;padding: 10px; margin: 10px;text-decoration:none;color:black;"
            href="{{url('admin/pengaduan/selesai/cetak')}}">Cetak Data(PDF)</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduanSelesai as $row)
                    <tr>
                        <td>{{$row->tgl_pengaduan}}</td>
                        <td>{{$row->masyarakat->nik}}</td>
                        <td>{{$row->masyarakat->nama}}</td>
                        <td>{{$row->isi_laporan}}</td>
                        <td><a style="background-color: #47d147;padding: 5px;text-decoration:none;color:black;"target="_blank" href="url('../../../../public/images/{{$row->foto}}">Tampilkan</a></td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
      </div>
      <footer>
        <div style="text-align:center;padding-top:10px;">
        2020 © PLIKEMAS
        </div>
      </footer>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
