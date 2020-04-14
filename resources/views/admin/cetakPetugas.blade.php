            <h1>Data Petugas</h1>

            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Telp</th>
                        <th>Level</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($petugas as $row)
                    <tr>
                        <td>{{$row->nama_petugas}}</td>
                        <td>{{$row->username}}</td>
                        <td>{{$row->telp}}</td>
                        <td>{{$row->level}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
