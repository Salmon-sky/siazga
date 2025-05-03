@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('activeDashboard', 'active')

@section('content')

@if (auth()->user()->roles_id == 1 or auth()->user()->roles_id == 2)
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $d }}</h3>

                <p>Jumlah Siswa</p>
            </div>
            <a href="/admin/siswa" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $gurus }}</h3>

                <p>Jumlah Guru</p>
            </div>
            <a href="/admin/guru" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

@elseif (auth()->user()->roles_id == 3)
<h1>{{$pengumumans->judul}}</h1>

<iframe src="{{asset('assets/img/'.$pengumumans->img)}}"  width="100%" height="600px"></iframe>
@endif
@endsection
