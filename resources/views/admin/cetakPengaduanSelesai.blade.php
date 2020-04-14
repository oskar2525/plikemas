<h1>Pengaduan telah di tanggapi</h1>
            
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
                    @foreach($pengaduanSelesai as $row)
                    <tr>
                        <td>{{$row->tgl_pengaduan}}</td>
                        <td>{{$row->masyarakat->nik}}</td>
                        <td>{{$row->masyarakat->nama}}</td>
                        <td>{{$row->isi_laporan}}</td>
                        <td><img src="{{asset('images/'.$row->foto)}}"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
