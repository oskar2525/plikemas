	<h1>Data Masyarakat</h1>
	<br>


			<table>
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Telp</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($masyarakat as $row)
                    <tr>
                        <td>{{$row->nik}}</td>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->username}}</td>
                        <td>{{$row->telp}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
