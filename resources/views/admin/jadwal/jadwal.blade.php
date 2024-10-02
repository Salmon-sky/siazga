@extends('layouts.admin.app')

@section('title', 'Jadwal Pelajaran')

@section('activeJadwal', 'active')

@section('style')
<style>
    .kecil{
        font-size: 10px;
    }
</style>
@endsection

@section('content')
@if(auth()->user()->roles_id == 2)
<div class="container">
    <div class="row">
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Senin</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->hari == 'Senin')
                                    <tr>
                                        @if($jadwal->User->id == auth()->user()->id)
                                        <td class="bg-primary">{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                        <td class="bg-primary">{{$jadwal->jam_ke}}</td>
                                        <td class="bg-primary">{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                        <td class="bg-primary">{{$jadwal->Mapel->nama}}</td>
                                        <td class="bg-primary">{{$jadwal->User->nama}}</td>
                                        @else
                                        <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                        <td>{{$jadwal->jam_ke}}</td>
                                        <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                        <td>{{$jadwal->Mapel->nama}}</td>
                                        <td>{{$jadwal->User->nama}}</td>
                                        @endif
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Selasa</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->hari == 'Selasa')
                                        <tr>
                                            @if($jadwal->User->id == auth()->user()->id)
                                            <td class="bg-primary">{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                            <td class="bg-primary">{{$jadwal->jam_ke}}</td>
                                            <td class="bg-primary">{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                            <td class="bg-primary">{{$jadwal->Mapel->nama}}</td>
                                            <td class="bg-primary">{{$jadwal->User->nama}}</td>
                                            @else
                                            <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                            <td>{{$jadwal->jam_ke}}</td>
                                            <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                            <td>{{$jadwal->Mapel->nama}}</td>
                                            <td>{{$jadwal->User->nama}}</td>
                                            @endif
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Rabu</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->hari == 'Rabu')
                                    <tr>
                                        @if($jadwal->User->id == auth()->user()->id)
                                        <td class="bg-primary">{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                        <td class="bg-primary">{{$jadwal->jam_ke}}</td>
                                        <td class="bg-primary">{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                        <td class="bg-primary">{{$jadwal->Mapel->nama}}</td>
                                        <td class="bg-primary">{{$jadwal->User->nama}}</td>
                                        @else
                                        <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                        <td>{{$jadwal->jam_ke}}</td>
                                        <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                        <td>{{$jadwal->Mapel->nama}}</td>
                                        <td>{{$jadwal->User->nama}}</td>
                                        @endif
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kamis</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->hari == 'Kamis')
                                    <tr>
                                        @if($jadwal->User->id == auth()->user()->id)
                                        <td class="bg-primary">{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                        <td class="bg-primary">{{$jadwal->jam_ke}}</td>
                                        <td class="bg-primary">{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                        <td class="bg-primary">{{$jadwal->Mapel->nama}}</td>
                                        <td class="bg-primary">{{$jadwal->User->nama}}</td>
                                        @else
                                        <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                        <td>{{$jadwal->jam_ke}}</td>
                                        <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                        <td>{{$jadwal->Mapel->nama}}</td>
                                        <td>{{$jadwal->User->nama}}</td>
                                        @endif
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Jumat</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->hari == 'Jumat')
                                    <tr>
                                        @if($jadwal->User->id == auth()->user()->id)
                                        <td class="bg-primary">{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                        <td class="bg-primary">{{$jadwal->jam_ke}}</td>
                                        <td class="bg-primary">{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                        <td class="bg-primary">{{$jadwal->Mapel->nama}}</td>
                                        <td class="bg-primary">{{$jadwal->User->nama}}</td>
                                        @else
                                        <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                        <td>{{$jadwal->jam_ke}}</td>
                                        <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                        <td>{{$jadwal->Mapel->nama}}</td>
                                        <td>{{$jadwal->User->nama}}</td>
                                        @endif
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sabtu</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->hari == 'Sabtu')
                                    <tr>
                                        @if($jadwal->User->id == auth()->user()->id)
                                        <td class="bg-primary">{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                        <td class="bg-primary">{{$jadwal->jam_ke}}</td>
                                        <td class="bg-primary">{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                        <td class="bg-primary">{{$jadwal->Mapel->nama}}</td>
                                        <td class="bg-primary">{{$jadwal->User->nama}}</td>
                                        @else
                                        <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                        <td>{{$jadwal->jam_ke}}</td>
                                        <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                        <td>{{$jadwal->Mapel->nama}}</td>
                                        <td>{{$jadwal->User->nama}}</td>
                                        @endif
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif(auth()->user()->roles_id == 3)
<div class="container">
    <div class="row">
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Senin</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->Jurusan->id == auth()->user()->id_kelas && $jadwal->hari == 'Senin')
                                        <tr>
                                            <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                            <td>{{$jadwal->jam_ke}}</td>
                                            <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                            <td>{{$jadwal->Mapel->nama}}</td>
                                            <td>{{$jadwal->User->nama}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Selasa</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->Jurusan->id == auth()->user()->id_kelas && $jadwal->hari == 'Selasa')
                                        <tr>
                                            <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                            <td>{{$jadwal->jam_ke}}</td>
                                            <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                            <td>{{$jadwal->Mapel->nama}}</td>
                                            <td>{{$jadwal->User->nama}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Rabu</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->Jurusan->id == auth()->user()->id_kelas && $jadwal->hari == 'Rabu')
                                        <tr>
                                            <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                            <td>{{$jadwal->jam_ke}}</td>
                                            <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                            <td>{{$jadwal->Mapel->nama}}</td>
                                            <td>{{$jadwal->User->nama}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kamis</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->Jurusan->id == auth()->user()->id_kelas && $jadwal->hari == 'Kamis')
                                        <tr>
                                            <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                            <td>{{$jadwal->jam_ke}}</td>
                                            <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                            <td>{{$jadwal->Mapel->nama}}</td>
                                            <td>{{$jadwal->User->nama}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Jumat</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->Jurusan->id == auth()->user()->id_kelas && $jadwal->hari == 'Jumat')
                                        <tr>
                                            <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                            <td>{{$jadwal->jam_ke}}</td>
                                            <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                            <td>{{$jadwal->Mapel->nama}}</td>
                                            <td>{{$jadwal->User->nama}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 kecil">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sabtu</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jam Ke</th>
                                    <th>Kelas</th>
                                    <th>Mapel</th>
                                    <th>Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $jadwal)
                                    @if($jadwal->Jurusan->id == auth()->user()->id_kelas && $jadwal->hari == 'Sabtu')
                                        <tr>
                                            <td>{{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</td>
                                            <td>{{$jadwal->jam_ke}}</td>
                                            <td>{{$jadwal->Jurusan->kelas}} {{$jadwal->Jurusan->nama}}</td>
                                            <td>{{$jadwal->Mapel->nama}}</td>
                                            <td>{{$jadwal->User->nama}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection

@section('script')

@endsection
