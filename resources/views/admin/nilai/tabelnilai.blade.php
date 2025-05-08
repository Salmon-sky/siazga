@extends('layouts.admin.app')

@section('title', 'Tabel-nilai')

@section('activeTabel', 'active')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kelola Data Nilai</h3>
                        <div class="d-flex justify-content-end mb-3">
                            @include('admin.nilai.create', ['students' => $students, 'mapels' => $mapels, 'teachers'=>$gurus])
                        </div>
                    </div>
                    @if (session('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{ session('sukses') }}
                        </div>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="small">No</th>
                                    <th class="small">Nama</th>
                                    <th class="small">Nomor Induk</th>
                                    <th class="small">Semester</th>
                                    <th class="small">Mata Pelajaran</th>
                                    <th class="small">Guru Pengajar</th>
                                    <th class="small">Tugas</th>
                                    <th class="small">UTS</th>
                                    <th class="small">UAS</th>
                                    <th class="small">Keterangan</th>
                                    <th class="small">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilais as $nilai)
                                    @if ($nilai->Siswa->id_kelas == $kelas->id)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $nilai->Siswa->nama ?? '-' }}</td>
                                            <td>{{ $nilai->Siswa->nomor_induk ?? '-' }}</td>
                                            <td>{{ $nilai->Semester->nama ?? '-' }}</td>
                                            <td>{{ $nilai->Mapel->nama ?? '-' }}</td>
                                            <td>{{ $nilai->Guru->nama ?? '-' }}</td>
                                            <td>{{ $nilai->tugas ?? '-' }}</td>
                                            <td>{{ $nilai->uts ?? '-' }}</td>
                                            <td>{{ $nilai->uas ?? '-' }}</td>
                                            <td>{{ $nilai->keterangan ?? '-' }}</td>
                                            <td>
                                                @include('admin.nilai.edit')
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
                                    <th class="small">Semester</th>
                                    <th class="small">Mata Pelajaran</th>
                                    <th class="small">Guru Pengajar</th>
                                    <th class="small">Tugas</th>
                                    <th class="small">UTS</th>
                                    <th class="small">UAS</th>
                                    <th class="small">Keterangan</th>
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
