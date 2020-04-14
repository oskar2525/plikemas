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
    <li><a class="active"href="{{url('admin/home')}}">Home</a></li>
    <li><a href="{{url('admin/petugas')}}">Daftar Petugas</a></li>
    <li><a href="{{url('admin/masyarakat')}}">Daftar Masyarakat</a></li>
    <li><a href="{{url('admin/pengaduan')}}">Daftar Pengaduan</a></li>
    <li><a href="{{url('admin/tanggapan')}}">Daftar Tanggapan</a></li>
    <li style="float:right;"><a href="{{ url('logout') }}">Logout</a></li>

  </ul>
</div>
<p style="">Hallo! {{Session::get('username')}}</p>
      </div>
      <div>

      </div>
      <div id="footer">
      2020 © PLIKEMAS
      </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
