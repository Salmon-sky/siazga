@extends('layouts.admin.app')

@section('title', 'Semester')

@section('content')

<div class="container">
    <h2 class="my-4">Rekap Nilai Semester</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($semesters as $semester)
                    <tr>
                        <td>{{$semester->nama}}</td>
                        <td>
                            <a href="{{route('siswa.semester.detail', $semester->id)}}"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@section('script')

@endsection
