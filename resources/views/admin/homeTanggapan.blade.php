@extends('admin.base')
@section('content')
<style media="screen">
#section {
    width:350px;
    float:left;
    padding:10px;
}
tr{
  background-color: #0088cc;
}
td{
  background-color: #e6f7ff;
  padding: 10px;
}
body {
    margin: 0;
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
    <li><a href="{{url('admin/pengaduan')}}">Daftar Pengaduan</a></li>
    <li><a class="active"href="{{url('admin/tanggapan')}}">Daftar Tanggapan</a></li>
    <li style="float:right;"><a href="{{ url('logout') }}">Logout</a></li>
    <li style="float:right"><p style="color:white;">{{Session::get('username')}}</p></li>

  </ul>
</div>

      </div>
      <div>
        <h1 style="text-align:center">DAFTAR TANGGAPAN </h1>

        <!-- <a style="background: rgba(0,0,0,0.5);padding:10px;font-size: 16px;
        color:white;"href="{{ url('admin/home') }}" class="btn-logout">Kembali</a> -->

     <table class="table">
            <tr>
                <th>ID Pengaduan</th>
                <th>Nama Pengadu</th>
                <th>Tanggal</th>
                <th>Tanggapan</th>
                <th>Petugas yang men-ACC</th>
                <th>Aksi</th>
            </tr>
                @foreach($tanggapan as $row)
            <tr>

                    <td>{{$row->id_pengaduan}}</td>
                    <td>{{$row->pengaduan->masyarakat->nama}}</td>
                    <td>{{$row->tgl_tanggapan}}</td>
                    <td>{{$row->tanggapan}}</td>
                    <td>{{$row->petugas->nama_petugas}}</td>

                <td>
                    <a style="margin: 10px;background-color: #47d147;padding: 10px;float: left;text-decoration: none;color:black;"
                    href="{{url('admin/tanggapan/edit/'.$row->id_pengaduan)}}">Sunting</a>
                    <form action="{{url('admin/tanggapan/hapus'.$row->id_tanggapan)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button style="background-color:#f44336;padding: 10px;float: right;font-family:'Nexa-Regular';
                        border:none;"type="submit">Hapus</button>
                    </form>
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
