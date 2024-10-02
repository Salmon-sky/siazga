@extends('layouts.admin.app')

@section('title', 'Nilai')

@section('content')

    <div class="row">
        @foreach($jurusans as $jurusan)
        <a href="{{route('guru.nilai.tabel', $jurusan->id)}}" class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$jurusan->kelas}}</h3>
                    
                    <p>{{$jurusan->nama}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>

@endsection

