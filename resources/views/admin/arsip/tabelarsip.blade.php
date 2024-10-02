@extends('layouts.admin.app')

@section('title', 'Tabel')

@section('content')


 <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Kelola Data Arsip</h3>
            <div class="d-flex justify-content-end mb-3">
          </div>
        </div>
        @if (session('sukses'))
              <div class="alert alert-success" role="alert">
                  {{ session('sukses') }}
              </div>
          @endif
          <!-- /.card-header -->
          {{-- TODO:responsive --}}
          <div class="card-body" style="overflow-x: overlay">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nomor Induk</th>
                  <th>No_Hp</th>
                  <th>Email</th>
                  <th>File_eraport</th>
                  <th>File_sertifikat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($arsips as $arsip)
                @if($arsip->id_kelas == $kelas->id)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{$arsip->nama ?? '-'}}</td>
                  <td>{{$arsip->nomor_induk ?? '-'}}</td>
                  <td>{{$arsip->no_hp ?? '-'}}</td>
                  <td>{{$arsip->email ?? '-'}}</td>
                  <td><a target="_blank" href="{{ asset('assets/file_eraport/' . $arsip->file_eraport) }}">Lihat</a</td>
                  <td><a target="_blank" href="{{ asset('assets/file_sertifikat/' . $arsip->file_sertifikat) }}">Lihat</a></td>
                  <td>
                    @include('admin.arsip.edit')
                  </td>
                </tr>
                @endif
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nomor Induk</th>
                  <th>No_Hp</th>
                  <th>Email</th>
                  <th>File_eraport</th>
                  <th>File_sertifikat</th>
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
          "responsive": false,
          "lengthChange": false,
          "autoWidth": false,
          "buttons": [
              { extend: 'excel', exportOptions: { columns: ':not(:last-child)' } },
              { extend: 'pdf', exportOptions: { columns: ':not(:last-child)' } },
              { extend: 'print', exportOptions: { columns: ':not(:last-child)' } }
          ]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
@endsection
