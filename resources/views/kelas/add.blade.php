@extends('layout.app')

@section('title')
    Kelas
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-title">
            <h3>Data Kelas</h3>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('kelas.store')}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-log-12">
                    <div class="form-goup">
                        <label for="nama">Nama kelas</label>
                        <input type="text" name="nama" class="form-control" value="{{old(nama)}}" @error('nama')
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
@endsection