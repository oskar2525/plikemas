<h1>Pengaduan belum di tanggapi</h1>

            <table>
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
                    @foreach($pengaduan as $data)
                    <tr>
                        <td>{{$data->tgl_pengaduan}}</td>
                        <td>{{$data->masyarakat->nik}}</td>
                        <td>{{$data->masyarakat->nama}}</td>
                        <td>{{$data->isi_laporan}}</td>
                        <td><img src="{{asset('images/'.$data->foto)}}" width="50%">
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
