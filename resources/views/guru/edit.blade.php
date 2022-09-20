@extends('layout.app')

@section('title')
    Guru
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Guru</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('guru.update', $guru->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="nama">Nama guru</label>
                    <input type="text" name="nama" class="form-control" value="{{$guru->nama}}" @error('nama')
                    is invalid @enderror>
                    @error('nama')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="mapel">Mapel</label>
                    <input type="text" name="mapel" class="form-control" value="{{$guru->mapel}}" @error('mapel')
                    is invalid @enderror>
                    @error('kelas')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <a href="/guru" class="btn btn-secondary" role="button">Batal</a>
                <button class="btn btn-danger" type="submit"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>