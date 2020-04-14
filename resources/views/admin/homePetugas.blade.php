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
    <li><a class="active"href="{{url('admin/petugas')}}">Daftar Petugas</a></li>
    <li><a href="{{url('admin/masyarakat')}}">Daftar Masyarakat</a></li>
    <li><a href="{{url('admin/pengaduan')}}">Daftar Pengaduan</a></li>
    <li><a href="{{url('admin/tanggapan')}}">Daftar Tanggapan</a></li>
    <li style="float:right;"><a href="{{ url('logout') }}">Logout</a></li>
    <li style="float:right"><p style="color:white">{{Session::get('username')}}</p></li>

  </ul>
</div>

      </div>
      <div>
        <div>
          <!-- <a style="background: rgba(0,0,0,0.5);padding:10px;font-size: 16px;color:white;"href="{{ url('admin/home') }}" class="btn-logout">Kembali</a> -->
          <h1>
            <p style="text-align:center">
              DAFTAR PETUGAS
            </p>
          </h1>
        </div>

        <a style="background-color: #0088cc;padding: 10px; margin: 10px;text-decoration:none;color:black;"
         href="{{url('admin/register')}}">Registrasi Petugas dan Admin</a>
        <a style="background-color: #ff9933;padding: 10px; margin: 10px;text-decoration:none;color:black;"
        href="{{url('admin/petugas/cetak')}}">Cetak Data Petugas(PDF)</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Telp</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($petugas as $row)
                <tr>
                    <td>{{$row->nama_petugas}}</td>
                    <td>{{$row->username}}</td>
                    <td>{{$row->telp}}</td>
                    <td>{{$row->level}}</td>
                    <td>
                        <a style="background-color: #47d147;padding: 5px;text-decoration:none;color:black;"
                        href="{{url('admin/petugas/forgot/'.$row->id_user)}}">Lupa Password</a>
                        <a style="background-color: #ffff4d;padding: 5px;text-decoration:none;color:black;"
                        href="{{url('admin/petugas/edit/'.$row->id_user)}}">Sunting</a>
                        <form action="{{url('admin/petugas/delete'.$row->id_user)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button style="background-color:#f44336;padding: 10px;float: right;font-family:'Nexa-Regular';
                            border:none;">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

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
