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
                    <th>Nama Pegawai</th>
                    <th>Jabatan Pegawai</th>
                    <th>Alamat Pegawai</th>
                    <th>Umur Pegawai</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>$0.87</td>
                    <td>$0.87</td>
                    <td>Aksi</td>
                </tr>

            </tbody>
        </table>

    </div>
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>