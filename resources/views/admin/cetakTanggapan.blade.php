            <h1>Data Tanggapan</h1>

            <table>
                <thead>
                    <tr>
                    <th>id pengaduan</th>
                    <th>nama pengadu</th>
                    <th>tanggal</th>
                    <th>tanggapan</th>
                    <th>petugas</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($tanggapan as $row)
                    <tr>

                        <td>{{$row->id_pengaduan}}</td>
                        <td>{{$row->pengaduan->masyarakat->nama}}</td>
                        <td>{{$row->tgl_tanggapan}}</td>
                        <td>{{$row->tanggapan}}</td>
                        <td>{{$row->petugas->nama_petugas}}</td>
                    </tr>
                        @endforeach
                </tbody>
            </table>
