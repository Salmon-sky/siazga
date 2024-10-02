@extends('layouts.admin.app')

@section('title', 'Update Profil')

@section('content')

 <!-- Main content -->
  <section class="content">
  @if(auth()->user()->roles_id == 2)
          <form action="{{ route('guru.profil.update', $user->id)}}" method="POST" enctype="multipart/form-data">
          @elseif(auth()->user()->roles_id == 3)
          <form action="{{ route('siswa.profil.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @endif
            @csrf
            @method('PUT')
    <div class="row">
    <div class="col-md-3">
    <form action="POST">
        <div class="card">
            <img id="avatarPreview" src="{{ asset('assets/img/') . $user->img }}" width="300" class="img img-fluid" alt="Avatar">
            
            <button class="btn btn-success" type="button" onclick="document.getElementById('fileInput').click()">Ubah Foto</button>
            <input type="file" name="img" id="fileInput" style="display: none;" onchange="previewImage(event)">
        </div>
    </form>
</div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Update Profil</h3>
                <div class="d-flex justify-content-end mb-3">

                </div>
                @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{ session('sukses') }}
                </div>
            @endif
          </div>

          <div class="card-body">
            <div class="col-12 d-flex">
                <div class="mb-3 col-6 px-2">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="{{$user->nama}}" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_induk">Nomor Induk</label>
                  <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" placeholder="Masukkan Nomor Induk" value="{{$user->nomor_induk}}" />
                </div>
              </div>
              <div class="col-12 d-flex">
                <div class="mb-3 col-6 px-2">
                  <div class="form-group">
                    <label for="no_hp">Nomor Handphone</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="no_hp" value="{{$user->no_hp}}" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="{{$user->email}}"  />
                </div>
              </div>
              @if(auth()->user()->roles_id != 2)
              <div class="col-12 d-flex">
                <div class="mb-3 col-12 px-2">
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-select" name="id_kelas" id="id_kelas">
                      @foreach ($kelass as $kelas)
                      <option value="{{$kelas->id}}" {{ $kelas->id == $user->id_kelas ? 'selected' : '' }}>
                        {{$kelas->kelas}} {{$kelas->nama}}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              @endif
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    </form>
  </section>
  <script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('avatarPreview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
  
@endsection

