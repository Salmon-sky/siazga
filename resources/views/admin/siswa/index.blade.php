@extends('layouts.admin.app')

@section('title', 'Data Siswa')

@section('activeSiswa', 'active')

@section('content')

 <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Kelola Data Siswa</h3>
                <div class="d-flex justify-content-end mb-3">

                    @include('admin.siswa.create')

                </div>
                @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{ session('sukses') }}
                </div>
            @endif
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nomor Induk</th>
                  <th>Nomor Handphone(s)</th>
                  <th>Email</th>
                  <th>Jurusan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($siswas as $siswa)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{$siswa->nama}}</td>
                  <td>{{$siswa->nomor_induk}}</td>
                  <td>{{$siswa->no_hp}}</td>
                  <td>{{$siswa->email}}</td>
                  <td>{{$siswa->Kelas->kelas}} {{$siswa->Kelas->nama}}</td>
                  <td>
                    @include('admin.siswa.edit')
                    @include('admin.siswa.delete')
                  </td>
    
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nomor Induk</th>
                  <th>Nomor Handphone(s)</th>
                  <th>Email</th>
                  <th>Jurusan</th>
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
          "buttons": [
              { extend: 'excel', exportOptions: { columns: ':not(:last-child)' } },
              { extend: 'pdf', exportOptions: { columns: ':not(:last-child)' } },
              { extend: 'print', exportOptions: { columns: ':not(:last-child)' } }
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
