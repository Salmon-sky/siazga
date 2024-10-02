@extends('layouts.admin.app')

@section('title', 'Pengumuman')

@section('activepengumuman', 'active')

@section('content')

 <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Kelola Data Pengumuman</h3>
            <div class="d-flex justify-content-end mb-3">

              @include('admin.pengumuman.create')

          </div>
          @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{ session('sukses') }}
                </div>
            @endif
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Pengumuman</th>
                  <th>Surat</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pengumumans as $pengumuman)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{$pengumuman->judul}}</td>
                  <td><a target="_blank" href="{{asset('assets/img/'.$pengumuman->img)}}">Lihat</a></td>
                  <td>{{$pengumuman->created_at}}</td>
                  <td>
                    @include('admin.pengumuman.edit')
                    @include('admin.pengumuman.delete')
                  </td>
    
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                    <th>No</th>
                    <th>Judul Pengumuman</th>
                    <th>Tanggal</th>
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
