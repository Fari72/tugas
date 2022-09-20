@extends('layout.app')

@section('title')
    Kelas
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Kelas</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('kelas.update', $kelas->id)}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="nama">Nama kelas</label>
                    <input type="text" name="nama" class="form-control" value="{{$kelas->nama}}" @error('nama')
                    is invalid @enderror>
                    @error('nama')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <a href="/kelas" class="btn btn-secondary" role="button">Batal</a>
                <button class="btn btn-danger" type="submit"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>