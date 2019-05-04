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
    <title>Update Data Pegawai</title>
</head>
<body>
    <div class="container">
        <div class="center">
            <h2>Update Pegawai</h2>
        </div>

        <form action="" method="post">
            @csrf
            <div class="input-field col s6">
                <input
                    value="{{$data->nama_pegawai}}"
                    placeholder="Nama Pegawai"
                    id="first_name"
                    type="text"
                    class="validate"
                    name="namapegawai">
                <label for="first_name">Nama Pegawai</label>
            </div>
            <div class="input-field col s6">
                <input
                    value="{{$data->jabatan_pegawai}}"
                    placeholder="Jabatan Pegawai"
                    id="jabatan"
                    type="text"
                    class="validate"
                    name="jabatanpegawai">
                <label for="jabatan">Jabatan Pegawai</label>
            </div>
            <div class="input-field col s6">
                <input
                    value="{{$data->alamat_pegawai}}"
                    placeholder="Alamat Pegawai"
                    id="alamat"
                    type="text"
                    class="validate"
                    name="alamatpegawai">
                <label for="alamat">Alamat Pegawai</label>
            </div>
            <div class="input-field col s6">
                <input
                    value="{{$data->umur_pegawai}}"
                    placeholder="Umur Pegawai"
                    id="umur"
                    type="text"
                    class="validate"
                    name="umurpegawai">
                <label for="umur">Umur Pegawai</label>
            </div>
            <div class="input-field col s6">
                <input
                    value="{{$data->no_telp}}"
                    placeholder="No Telpon"
                    id="notelp"
                    type="text"
                    class="validate"
                    name="notelp">
                <label for="notelp">No Telpon</label>
            </div>
            <button class="btn waves-effect orange right" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
        <a onclick="goBack()" class="waves-effect red btn">
            <i class="material-icons left">keyboard_backspace</i>Kembali</a>
    </div>
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        function goBack() {
            window
                .history
                .back();
        }
    </script>
</body>
</html>