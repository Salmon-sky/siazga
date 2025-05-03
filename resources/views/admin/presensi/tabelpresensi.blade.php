@extends('layouts.admin.app')

@section('title', 'Tabel-presensi')

@section('activeTabel-presensi', 'active')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
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
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="small">No</th>
                                    <th class="small">Nama</th>
                                    <th class="small">Nomor Induk</th>
                                    <th class="small">Mapel</th>
                                    <th class="small">status</th>
                                    <th class="small">tanggal</th>
                                    <th class="small">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($presensis as $presensi)
                                    @if ($presensi->Siswa->id_kelas == $kelas->id)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $presensi->Siswa->nama ?? '-' }}</td>
                                            <td>{{ $presensi->Siswa->nomor_induk ?? '-' }}</td>
                                            <td>{{ $presensi->Mapel->nama ?? '-' }}</td>
                                            <td>
                                                @if ($presensi->status == 'Hadir')
                                                    <p class="btn btn-sm btn-success">{{ $presensi->status ?? '-' }}</p>
                                                @elseif($presensi->status == 'Telat')
                                                    <p class="btn btn-sm btn-warning">{{ $presensi->status ?? '-' }}</p>
                                                @elseif($presensi->status == 'Absen')
                                                    <p class="btn btn-sm btn-danger">{{ $presensi->status ?? '-' }}</p>
                                                @endif
                                            </td>
                                            <td>{{ $presensi->updated_at ?? '-' }}</td>
                                            <td class="d-flex">
                                                {{-- @include('admin.presensi.edit') --}}
                                                <form
                                                    action="{{ route('guru.presensi.update', $presensi->id, $presensi->id_user) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status" value="Hadir">
                                                    <button type="submit" class="btn mx-1 btn-success">Hadir</button>
                                                </form>
                                                <form
                                                    action="{{ route('guru.presensi.update', $presensi->id, $presensi->id_user) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status" value="Telat">
                                                    <button type="submit" class="btn mx-1 btn-warning">Telat</button>
                                                </form>
                                                <form
                                                    action="{{ route('guru.presensi.update', $presensi->id, $presensi->id_user) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status" value="Absen">
                                                    <button type="submit" class="btn mx-1 btn-danger">Absen</button>
                                                </form>
                                                <form
                                                    action="{{ route('guru.presensi.update', $presensi->id, $presensi->id_user) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status" value="-">
                                                    <button type="submit" class="btn mx-1 btn-info">Reset</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="small">No</th>
                                    <th class="small">Nama</th>
                                    <th class="small">Nomor Induk</th>
                                    <th class="small">Mapel</th>
                                    <th class="small">status</th>
                                    <th class="small">tanggal</th>
                                    <th class="small">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection

@section('script')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": [{
                        extend: 'excel',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        }
                    }
                ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
