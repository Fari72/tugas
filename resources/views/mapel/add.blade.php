@extends('layout.app')

@section('title')
    Mapel
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-title">
            <h3>Data Mapel</h3>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('mapel.store')}}" method="POST">
            @csrf

            <div class="row">
            <div class="col-log-6">
                <div class="form-goup">
                    <label for="nama">Nama Mapel</label>
                    <input type="text" name="nama" class="form-control" value="{{old(nama)}}" @error('nama')
                    is invalid @enderror>
                    @error('nama')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            
            <div class="col-log-6">
                <div class="form-goup">
                    <label for="guru">guru</label>
                    <input type="text" name="guru" class="form-control" value="{{old(guru)}}" @error('guru')
                        is invalid @enderror>
                        @error('guru')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                        @foreach ($guru as $siswa)
                        <option value="{{$guru->id}}">{{$guru->nama}}</option>
                        @endforeach
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <a href="/mapel" class="btn btn-secondary" role="button">Batal</a>
                <button class="btn btn-danger" type="submit"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
@endsection