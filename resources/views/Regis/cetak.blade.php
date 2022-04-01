<!DOCTYPE html>
<html>
        <head>
            <title>Download Data Siswa</title>
        </head>
        <body>
            <style type="text/css">
            body{
            font-family: sans-serif;
            }
            table{
            margin: 20px auto;
            border-collapse: collapse;
            }
            table th,
            table td{
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

            }
            a{
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
            }

                .tengah{
                    text-align: center;
                }
            </style>
    <table>
        <h2 class="tengah">Download Data Peserta Didik {{$regi->nama}}</h2>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{$regi->nama}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{$regi->jk}}</td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td>:</td>
                <td>{{$regi->alamat}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{$regi->agama}}</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>{{$regi->jurusan}}</td>
            </tr>
        </table>
        <script>
            window.print();
        </script>
</body>
</html>