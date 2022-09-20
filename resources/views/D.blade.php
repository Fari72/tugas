@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="row g-3 text-center">
        <div class="col-3">
            <div class="p-3 border bg-light mt-3"><a href="/siswa">Siswa </a>
            </div> 
        </div>
    
        <div class="col-3">
            <div class="p-3 border bg-light mt-3" nav=link><a href="/kelas">Kelas </a>
            </div> 
        </div>

        <div class="col-3">
            <div class="p-3 border bg-light mt-3"><a href="/guru">Guru </a>
            </div> 
        </div>
    
        <div class="col-3">
            <div class="p-3 border bg-light mt-3"><a href="/mapel">Mapel </a>
            </div> 
        </div>
    </div>
@endsection