@extends('layout.app')

@section('title')
    Siswa
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-title">
            <h3>Data Siswa</h3>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('siswa.store')}}" method="POST">
            @csrf

            <div class="col-log-12">
                <div class="form-goup">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" value="{{old(nama)}}" @error('nama')
                    is invalid @enderror>
                    @error('nama')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            
            <div class="row">
                <div class="col-log-6">
                    <div class="form-goup">
                        <label for="kelas">Kelas</label>
                        <select type="text" name="kelas" class="form-control" value="{{old(kelas)}}" @error('kelas')
                            is invalid @enderror>
                            @error('kelas')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                            @foreach ($kelas as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
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
                        @endforeach
                    </select>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <a href="/siswa" class="btn btn-secondary" role="button">Batal</a>
                <button class="btn btn-danger" type="submit"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
@endsection