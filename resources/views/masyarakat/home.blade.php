@extends('masyarakat.base')
@section('content')
<style media="screen">
  tr{
    background-color: #0088cc;
  }
  td{
    background-color: #e6f7ff;
    padding: 10px;
  }
</style>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <!-- <h1>PAGE MASYARAKAT </h1>
            <p>Mau lapor apa hari ini?, {{Session::get('')}}.</p> -->
            <div>
              <a style="background: rgba(0,0,0,0.5);padding:10px;color:white;"href="{{ url('logout') }}" class="btn-logout">Logout</a>
              <h1>
                <p style="text-align:center">
                  PENGADUAN MASYARAKAT
                </p>
              </h1>
              <p style="">Hallo! {{Session::get('username')}}</p>
            </div>

            <div class="adddata">
              <a style="color:white; text-decoration:none; font-size:30px;"
               href="{{url('masyarakat/pengaduan/tambah')}}">Buat Laporan Pengaduan</a>
            </div>
            <div>
              <br>
              <br>
              <br>
              <br>
              <br>
              <h5>
                <p style="text-align:center">
                  Laporan yang telah dibuat
                </p>
              </h5>
            </div>
            <table class="table">
                <tr>
                    <th>Tanggal</th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
                    @foreach($pengaduan as $data)
                <tr>
                    <td>{{$data->tgl_pengaduan}}</td>
                    <td>{{$data->isi_laporan}}</td>
                    <td><a style="background-color: #47d147;padding: 5px;text-decoration:none;color:black;"target="_blank" href="url('../../../../public/images/{{$data->foto}}">Tampilkan</a></td>
                    <td>
                        <a style="background-color: #47d147;padding: 10px;float: left;text-decoration: none;color:black;
                        "href="{{url('masyarakat/pengaduan/edit/'.$data->id_pengaduan)}}">Sunting</a>

                    <form action="{{ url('masyarakat/pengaduan/hapus'.$data->id_pengaduan) }}" method="post">
                      @method('DELETE')
                      @csrf
                      <button style="background-color:#f44336;padding: 10px;float: right;font-family:'Nexa-Regular';
                      border:none;"type="submit">Hapus</button>
                    </form></td>
                </tr>
                    @endforeach
            </table>

            <p style="text-align:center">
              *Jika laporan yang sudah dibuat sudah tidak ditampilkan, maka sudah dikonfirmasi oleh Petugas.
            </p>
            <br>

            <p style="text-align:center">
              2020 © PLIKEMAS
            </p>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
