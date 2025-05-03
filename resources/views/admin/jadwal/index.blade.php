@extends('layouts.admin.app')

@section('title', 'Jadwal Pelajaran')

@section('activeJadwal', 'active')

@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kelola Data Jadwal Pelajaran</h3>
                        <div class="d-flex justify-content-end mb-3">

                            @include('admin.jadwal.create')

                        </div>
                        @if (session('sukses'))
                            <div class="alert alert-success" role="alert">
                                {{ session('sukses') }}
                            </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jam_Ke</th>
                                    <th>kelas</th>
                                    <th>mapel</th>
                                    <th>guru</th>
                                    <th>hari</th>
                                    <th>jam_mulai</th>
                                    <th>jam_selesai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwals as $jadwal)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jadwal->jam_ke }}</td>
                                        <td>{{ $jadwal->Jurusan->kelas }}</td>
                                        <td>{{ $jadwal->Mapel->nama }}</td>
                                        <td>{{ $jadwal->User->nama }}</td>
                                        <td>{{ $jadwal->hari }}</td>
                                        <td>{{ $jadwal->jam_mulai }}</td>
                                        <td>{{ $jadwal->jam_selesai }}</td>
                                        <td>
                                            @include('admin.jadwal.edit')
                                            @include('admin.jadwal.delete')
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Jam_Ke</th>
                                    <th>kelas</th>
                                    <th>mapel</th>
                                    <th>guru</th>
                                    <th>hari</th>
                                    <th>jam_mulai</th>
                                    <th>jam_selesai</th>
                                    <th>Aksi</th>
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
                "searching": true,
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
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
