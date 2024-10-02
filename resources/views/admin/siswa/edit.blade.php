
    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalEditSiswa{{$siswa->id}}">Edit</button>

    <div class="modal fade" id="modalEditSiswa{{$siswa->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditSiswaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="{{route('admin.siswa.update', $siswa->id)}}" method="POST">
          @csrf
          @method('PUT')
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEditSiswaLabel">Edit Data Siswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="col-12 d-flex">
                <div class="mb-3 col-6 px-2">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="{{$siswa->nama}}" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_induk">Nomor Induk</label>
                  <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" placeholder="Masukkan Nomor Induk" value="{{$siswa->nomor_induk}}" />
                </div>
              </div>
              <div class="col-12 d-flex">
                <div class="mb-3 col-6 px-2">
                  <div class="form-group">
                    <label for="no_hp">Nomor Handphone</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="no_hp" value="{{$siswa->no_hp}}" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="{{$siswa->email}}"  />
                </div>
              </div>
              <div class="col-12 d-flex">
                <div class="mb-3 col-12 px-2">
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-select" name="id_kelas" id="id_kelas">
                      @foreach ($kelass as $kelas)
                      <option value="{{$kelas->id}}" {{ $kelas->id == $siswa->id_kelas ? 'selected' : '' }}>
                        {{$kelas->kelas}} {{$kelas->nama}}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>

