@extends('layout.app')

@section('title')
    Mapel
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Mapel</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('mapel.update', $mapel->id)}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="nama">Nama Mapel</label>
                    <input type="text" name="nama" class="form-control" value="{{$mapel->nama}}" @error('nama')
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
                    <label for="guru">Guru</label>
                    <input type="text" name="guru" class="form-control" value="{{$mapel->guru}}" @error('guru')
                    is invalid @enderror>
                    @error('guru')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <a href="/mapel" class="btn btn-secondary" role="button">Batal</a>
                <button class="btn btn-danger" type="submit"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>