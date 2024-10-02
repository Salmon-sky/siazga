@extends('layouts.admin.app')

@section('title', 'Presensi')

@section('activePresensi', 'active')

@section('content')

    <div class="row">
        @foreach($jurusans as $jurusan)
        <a href="{{route('guru.presensi.tabel', $jurusan->id)}}" class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$jurusan->kelas}}</h3>
                    
                    <p>{{$jurusan->nama}}</p>
                </div>
            </div>
        </a>
        @endforeach
        <!-- ./col -->
    </div>

@endsection

