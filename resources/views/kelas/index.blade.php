@extends('layout.app')

@section('title')
    Kelas
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <div class="card-title">
                <h3>Data Kelas</h3>
                <a class="btn btn-dark btn-sm float-end" href="{{route('kelas.create')}}">
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
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </div>
        <tbody>
            @foreach ($kelas as $item)     
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->kelas}}</td>
                <td><a href="/kelas/edit/{{item->id}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-edit"></i></a> </td>
                <td><a href="/kelas/hapus/{{item->id}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection