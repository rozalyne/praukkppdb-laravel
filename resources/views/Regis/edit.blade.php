<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    {{-- CSS BOOSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <form action="/regis/{{$regi->id}}" method="post" class="mx-3 mb-3 card shadow-sm p-3">
        @method('put')
        @csrf
        <div class="d-flex">
            <div class="col-md-6">
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" value="{{$regi->nama}}" name="nama" aria-describedby="nama">
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jk" class="jk" aria-label="Default select example">
                        <option selected>Jenis Kelamin</option>
                        <option value="Perempuan" <?php if($regi->jk == 'Perempuan'){ echo 'selected';}?>>Perempuan</option>
                        <option value="Laki-laki" <?php if($regi->jk == 'Laki-laki'){ echo 'selected';}?>>Laki-laki</option>
                    </select>
                </div>
                <div class="mx-3 mb-3">
                      <label for="exampleInputEmail1" class="form-label">Alamat</label>
                      <input type="text" class="form-control" value="{{$regi->alamat}}" name="alamat" aria-describedby="alamat">
                </div>
            </div>
            <div class="mr-3 col-md-6">
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                    <input type="text" class="form-control" value="{{$regi->agama}}" name="agama" aria-describedby="agama">
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" value="{{$regi->asal}}" name="asal" aria-describedby="asal">
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    {{-- <input type="text" class="form-control" value="{{$regi->jurusan}}" name="jurusan" aria-describedby="jurusan"> --}}
                    <select class="form-select" name="jurusan" class="jurusan" aria-label="Default select example">
                        <option selected>Jurusan</option>
                        <option value="Rekayasa Perangkat Lunak" <?php if($regi->jurusan == 'Rekayasa Perangkat Lunak'){ echo 'selected';}?>>Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia" <?php if($regi->jurusan == 'Multimedia'){ echo 'selected';}?>>Multimedia</option>
                        <option value="Teknik Komputer dan Jaringan" <?php if($regi->jurusan == 'Teknik Komputer dan Jaringan'){ echo 'selected';}?>>Teknik Komputer dan Jaringan</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-dark m-3">Update</button>
      </form>
</div>

{{-- BOOSTRAP JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
