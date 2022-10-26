@extends('layouts.main')

@section('container')

<form action="/mahasiswa/store" method="post">
    <h1>Add Mahasiswa</h1>
    <div class="container">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" placeholder="Nama" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="number" placeholder="Nim" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autocomplete="off">
        </div><br>
        
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example" name="jeniskelamin">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" placeholder="jurusan" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autocomplete="off">
        </div><br>

        <div class="form-floating">
            <textarea class="form-control"  placeholder="Alamat" name="alamat" id="floatingTextarea2" style="height: 100px" required autocomplete="off"></textarea>
            <label for="floatingTextarea2">Alamat</label>
        </div><br>
        
    <button class="btn btn-primary" type="submit" name="submit">Save</button>
    </div>
    </form>
@endsection