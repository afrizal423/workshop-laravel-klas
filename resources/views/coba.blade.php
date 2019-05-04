<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Import Google Icon Font-->
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <!--Import materialize.css-->
        <link
            type="text/css"
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
            media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <title>Data Pegawai</title>
</head>
<body>
    <div class="container">
        <div class="center">
            <h2>Data Pegawai</h2>
        </div>
        <a href="{{ url('/datapegawai/tambah') }}" class="waves-effect waves-light btn">Tambah Data</a>
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan Pegawai</th>
                    <th>Alamat Pegawai</th>
                    <th>Umur Pegawai</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $no => $dt)
                <tr>
                    <td>{{$no+1}}</td>
                    <td>{{$dt->nama_pegawai}}</td>
                    <td>{{$dt->jabatan_pegawai}}</td>
                    <td>{{$dt->alamat_pegawai}}</td>
                    <td>{{$dt->umur_pegawai}}</td>
                    <td>{{$dt->no_telp}}</td>
                    <td>
                        <a
                            href="/datapegawai/update/{{ $dt->id_pegawai }}"
                            class="waves-effect orange btn">Edit Data</a>
                        <a href="/datapegawai/hapus/{{ $dt->id_pegawai }}" class="waves-effect red btn">Hapus Data</a>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>