
    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambahSiswa">Tambah</button>

    <div class="modal fade" id="modalTambahSiswa" tabindex="-1" role="dialog" aria-labelledby="modalTambahSiswaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <form action="{{route('admin.siswa.store')}}" method="POST">
            @csrf
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTambahSiswaLabel">Tambah Data Siswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
          <div class="modal-body">
              <div class="col-12 d-flex">
                <div class="mb-3 col-6 px-2">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_induk">Nomor Induk</label>
                  <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" placeholder="Masukkan Nomor Induk" />
                </div>
              </div>
              <div class="col-12 d-flex">
                <div class="mb-3 col-6 px-2">
                  <div class="form-group">
                    <label for="no_hp">Nomor Handphone</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan No hp" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" />
                </div>
              </div>
              <div class="col-12 d-flex">
                <div class="mb-3 col-12 px-2">
                  <div class="form-group">
                    <label for="id_kelas">Jurusan</label>
                    <select class="form-select" name="id_kelas" id="id_kelas">
                      @foreach ($kelass as $kelas)
                      <option value="{{$kelas->id}}">{{$kelas->kelas}} {{$kelas->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>
      </div>
    </div>

