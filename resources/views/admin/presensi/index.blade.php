@extends('layouts.admin.app')

@section('title', 'Presensi')

@section('activePresensi', 'active')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Filter Presensi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('guru.presensi.index') }}" method="GET">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="jadwal">Pilih jadwal</label>
                    <select name="id_jadwal" class="form-control" id="jadwal">
                        <option disabled>Pilih Jadwal</option>
                        @foreach ($jadwals as $jadwal)
                            <option value="{{ $jadwal->id }}" @selected(old('id_jadwal') == $jadwal->id)>
                                {{ $jadwal->Mapel->nama . ' ' . $jadwal->Jurusan->nama . '-' . $jadwal->Jurusan->kelas . ' ' . $jadwal->hari . ' ' . $jadwal->jam_mulai . '-' . $jadwal->jam_selesai }}
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal pertemuan</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal"
                        value="{{ request()->get('tanggal') ?? now()->format('Y-m-d') }}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>
    </div>

    <div class="row">
        @foreach ($siswas as $siswa)
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kelola Data Presensi</h3>
                        <div class="d-flex justify-content-end mb-3">
                        </div>
                    </div>
                    @if (session('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{ session('sukses') }}
                        </div>
                    @endif
                    @if (!is_null($siswas))
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="small">No</th>
                                        <th class="small">Nama</th>
                                        <th class="small">Nomor Induk</th>
                                        <th class="small">status</th>
                                        <th class="small">tanggal</th>
                                        <th class="small">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $siswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $siswa->nama ?? '-' }}</td>
                                            <td>{{ $siswa->nomor_induk ?? '-' }}</td>
                                            <td>
                                                @if ($siswa->presensi)
                                                    @if ($siswa->presensi->status == 'Hadir')
                                                        <p class="btn btn-sm btn-success">
                                                            {{ $siswa->presensi->status ?? '-' }}
                                                        </p>
                                                    @elseif($siswa->presensi->status == 'Telat')
                                                        <p class="btn btn-sm btn-warning">
                                                            {{ $siswa->presensi->status ?? '-' }}
                                                        </p>
                                                    @elseif($siswa->presensi->status == 'Absen')
                                                        <p class="btn btn-sm btn-danger">
                                                            {{ $siswa->presensi->status ?? '-' }}
                                                        </p>
                                                    @endif
                                                @else
                                                    <p class="btn btn-sm btn-info">Belum Presensi</p>
                                                @endif
                                            </td>
                                            <td>{{ $siswa->presensi->updated_at ?? '-' }}</td>
                                            <td class="d-flex">
                                                {{-- @include('admin.presensi.edit') --}}
                                                <form
                                                    action="{{ is_null($siswa->presensi) ? route('guru.presensi.store') : route('guru.presensi.update', $siswa->presensi->id) }}"
                                                    method="POST">
                                                    @csrf <input type='hidden' name='id_siswa'
                                                        value='{{ $siswa->id }}'>
                                                    <input type='hidden' name='id_jadwal'
                                                        value='{{ request()->get('id_jadwal') }}'>
                                                    <input type='hidden' name='tanggal'
                                                        value='{{ request()->get('tanggal') ?? now()->format('Y-m-d') }}'>
                                                    <input type="hidden" name="status" value="Hadir">
                                                    <button type="submit" class="btn mx-1 btn-success">Hadir</button>
                                                </form>
                                                <form
                                                    action="{{ is_null($siswa->presensi) ? route('guru.presensi.store') : route('guru.presensi.update', $siswa->presensi->id) }}"
                                                    method="POST">
                                                    @csrf <input type='hidden' name='id_siswa'
                                                        value='{{ $siswa->id }}'>
                                                    <input type='hidden' name='id_jadwal'
                                                        value='{{ request()->get('id_jadwal') }}'>
                                                    <input type='hidden' name='tanggal'
                                                        value='{{ request()->get('tanggal') ?? now()->format('Y-m-d') }}'>
                                                    <input type="hidden" name="status" value="Telat">
                                                    <button type="submit" class="btn mx-1 btn-warning">Telat</button>
                                                </form>
                                                <form
                                                    action="{{ is_null($siswa->presensi) ? route('guru.presensi.store') : route('guru.presensi.update', $siswa->presensi->id) }}"
                                                    method="POST">
                                                    @csrf <input type='hidden' name='id_siswa'
                                                        value='{{ $siswa->id }}'>
                                                    <input type='hidden' name='id_jadwal'
                                                        value='{{ request()->get('id_jadwal') }}'>
                                                    <input type='hidden' name='tanggal'
                                                        value='{{ request()->get('tanggal') ?? now()->format('Y-m-d') }}'>
                                                    <input type="hidden" name="status" value="Absen">
                                                    <button type="submit" class="btn mx-1 btn-danger">Absen</button>
                                                </form>
                                                <form
                                                    action="{{ is_null($siswa->presensi) ? route('guru.presensi.store') : route('guru.presensi.update', $siswa->presensi->id) }}"
                                                    method="POST">
                                                    @csrf <input type='hidden' name='id_siswa'
                                                        value='{{ $siswa->id }}'>
                                                    <input type='hidden' name='id_jadwal'
                                                        value='{{ request()->get('id_jadwal') }}'>
                                                    <input type='hidden' name='tanggal'
                                                        value='{{ request()->get('tanggal') ?? now()->format('Y-m-d') }}'>
                                                    <input type="hidden" name="status" value="-">
                                                    <button type="submit" class="btn mx-1 btn-info">Reset</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="small">No</th>
                                        <th class="small">Nama</th>
                                        <th class="small">Nomor Induk</th>
                                        <th class="small">status</th>
                                        <th class="small">tanggal</th>
                                        <th class="small">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    @endif
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        @endforeach
        <!-- ./col -->
    </div>

@endsection
