@extends('layouts.admin.app')

@section('title', 'Nilai')

@section('activeNilai', 'active')


@section('content')

<div class="container">
    <h2 class="my-4">Tabel Nilai Siswa</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Nomor Induk</th>
                <th>Kelas</th>
                <th>Mata Pelajaran</th>
                <th>Guru Pengajar</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilais as $nilai)
                    <tr>
                        <td>{{$nilai->Siswa->nama}}</td>
                        <td>{{$nilai->Siswa->nomor_induk}}</td>
                        <td>{{$nilai->Siswa->Kelas->kelas}}</td>
                        <td>{{$nilai->Mapel->nama}}</td>
                        <td>{{$nilai->Guru->nama}}</td>
                        <td>{{$nilai->tugas}}</td>
                        <td>{{$nilai->uts}}</td>
                        <td>{{$nilai->uas}}</td>
                        <td>{{$nilai->keterangan}}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@section('script')

@endsection
