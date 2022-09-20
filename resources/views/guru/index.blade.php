@extends('layout.app')

@section('title')
    Guru
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <div class="card-title">
                <h3>Data Guru</h3>
                <a class="btn btn-dark btn-sm float-end" href="{{route('guru.create')}}">
                    <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>

    {{-- table --}}
    <div class="card-body">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Mapel</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </div>
        <tbody>
            @foreach ($guru as $item)    
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->mapel}}</td>
                <td><a href="/guru/edit/{{item->id}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-edit"></i></a> </td>
                <td><a href="/guru/hapus/{{item->id}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection