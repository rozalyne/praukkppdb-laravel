<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB</title>
    {{-- CSS BOOSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
    <form action="/regis" method="post" class="mx-3 mb-3 card shadow-sm p-3">
        <h1 class="mx-3">Form Pendaftaran</h1>
        @csrf
        <div class="d-flex">
            <div class="col-md-6">
                <div class="mx-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="nama" aria-describedby="nama">
                </div>
                <div class="mx-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jk" class="jk" aria-label="Default select example">
                        <option selected>Jenis Kelamin</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>
                    </select>
                </div>
                <div class="mx-3">
                    <label for="exampleInputEmail1" class="form-label">alamat</label>
                    <input type="text" class="form-control" name="alamat" aria-describedby="alamat">
                </div>
            </div>
            <div class="mr-3 col-md-6">
                <div class="mx-3">
                    <label for="exampleInputEmail1" class="form-label">agama</label>
                    <input type="text" class="form-control" name="agama" aria-describedby="agama">
                </div>
                <div class="mx-3">
                    <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal" aria-describedby="asal">
                </div>
                <div class="mx-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan" class="jurusan" aria-label="Default select example">
                        <option selected>Jurusan</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-dark m-3">Submit</button>
      </form>

    <table class="table table-light">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">alamat</th>
              <th scope="col">agama</th>
              <th scope="col">Asal Sekolah</th>
              <th scope="col">jurusan</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($regiss as $index => $regi)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $regi->nama }}</td>
                    <td>{{ $regi->jk }}</td>
                    <td>{{ $regi->alamat }}</td>
                    <td>{{ $regi->agama }}</td>
                    <td>{{ $regi->asal }}</td>
                    <td>{{ $regi->jurusan }}</td>
                    <td class="d-flex">
                        <a href="/regis/{{$regi->id}}/edit" class="btn btn-primary">Edit</a>
                        <a href="/regis/{{$regi->id}}" class="btn btn-secondary ms-2">Cetak</a>
                        <form action="/regis/{{$regi->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="ms-2 btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
            {{-- <a href="/regis">Cetak PDF</a> --}}

    </table>
</div>

{{-- BOOSTRAP JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
