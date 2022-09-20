@extends('layout.app')

@section('title')
    Siswa
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <div class="card-title">
                <h3>Data Siswa</h3>
                <a class="btn btn-dark btn-sm float-end" href="{{route('siswa.create')}}">
                    <i class="fa fa-plus" ></i></a>
            </div>
        </div>
    </div>

    {{-- table --}}
    <div class="card-body">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Mapel</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </div>
        <tbody>
            @foreach ($siswa as $item)    
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->kelas}}</td>
                <td>{{$item->mapel}}</td>
                <td><a href="/siswa/edit/{{item->id}}" class="btn btn-warning btn-sm">
                    <i class="fa-solid fa-edit"></i></a> </td>
                <td><a href="/siswa/hapus/{{item->id}}" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i></a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection