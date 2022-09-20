@extends('layout.app')

@section('title')
    Guru
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-title">
            <h3>Data Guru</h3>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('guru.store')}}" method="POST">
            @csrf

            <div class="row">
            <div class="col-log-6">
                <div class="form-goup">
                    <label for="nama">Nama guru</label>
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
                    <label for="mapel">Mapel</label>
                    <select type="text" name="mapel" class="form-control" value="{{old(mapel)}}" @error('mapel')
                        is invalid @enderror>
                        @error('mapel')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                        @foreach ($mapel as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                    </select>
                    @endforeach
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <a href="/guru" class="btn btn-secondary" role="button">Batal</a>
                <button class="btn btn-danger" type="submit"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
@endsection