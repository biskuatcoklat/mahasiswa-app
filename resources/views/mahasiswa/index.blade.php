@extends('layouts.main')
@section('container')
    <div class="container"><br>
        <a href="/mahasiswa/create"><button class="btn btn-primary">Tambah</button></a>
        <table class="table table-hover">
            <th>
                <td>Nama</td>
                <td>Nim</td>
                <td>Jenis Kelamin</td>
                <td>Jurusan</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </th>
            @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->id }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->jeniskelamin }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>{{ $mhs->alamat }}</td>
                <td>
                    <div class="btn-group">
                    <a href="/mahasiswa/{{ $mhs->id }}/edit"><button class="btn btn-warning">Edit</button></a>
                    <form action="/mahasiswa/{{ $mhs->id }}" method="post">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="delete" name="delete" value="delete">
                    </form>
                    </div>
                </td>
            </tr>
            @endforeach
            

        </table>
    </div>
@endsection