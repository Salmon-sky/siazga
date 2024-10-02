
    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalEditJadwal{{$jadwal->id}}">Edit</button>

    <div class="modal fade" id="modalEditJadwal{{$jadwal->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditJadwalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="{{route('admin.jadwal.update', $jadwal->id)}}" method="POST">
          @csrf
          @method('PUT')
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEditJadwalLabel">Edit Data Jadwal Pelajaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="col-12 d-flex">
                <div class="mb-3 col-6 px-2">
                  <div class="form-group">
                    <label for="jam_ke">Jam_ke</label>
                    <input type="number" class="form-control" name="jam_ke" id="jam_ke" placeholder="Masukkan jam_ke" value="{{$jadwal->jam_ke}}" />
                  </div>
                  <div class="form-group">
                    <label for="id_kelas">Kelas</label>
                    <select class="form-select" name="id_kelas" id="id_kelas">
                      @foreach ($kelass as $kelas)
                      <option value="{{$kelas->id}}"  {{ $kelas->id == $jadwal->id_kelas ? 'selected' : '' }} >{{$kelas->kelas}} {{$kelas->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="id_mapel">Mapel</label>
                  <select class="form-select" name="id_mapel" id="id_mapel">
                    @foreach ($mapels as $mapel)
                    <option value="{{$mapel->id}}" {{ $mapel->id == $jadwal->id_mapel ? 'selected' : '' }}>{{$mapel->nama}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-12 d-flex">
                <div class="mb-3 col-6 px-2">
                  <div class="form-group">
                    <label for="id_guru">guru</label>
                    <select class="form-select" name="id_guru" id="id_guru">
                      @foreach ($gurus as $guru)
                      <option value="{{$guru->id}}" {{ $guru->id == $jadwal->id_guru ? 'selected' : '' }}>{{$guru->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="hari">hari</label>
                  <select class="form-select" name="hari" id="hari">
                    @foreach ($haris as $hari)
                    <option value="{{$hari['nama']}}" {{ $hari['nama'] == $jadwal->hari ? 'selected' : '' }}>{{$hari['nama']}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-12 d-flex">
                <div class="mb-3 col-12 px-2">
                  <div class="form-group">
                    <label for="jam_mulai">Jam_mulai</label>
                    <input type="text" class="form-control" name="jam_mulai" id="jam_mulai" placeholder="Masukkan jam_mulai" value="{{$jadwal->jam_mulai}}" />
                  </div>
                </div>
              </div>
              <div class="col-12 d-flex">
                <div class="mb-3 col-12 px-2">
                  <div class="form-group">
                    <label for="jam_selesai">Jam_selesai</label>
                    <input type="text" class="form-control" name="jam_selesai" id="jam_selesai" placeholder="Masukkan Jam_selesai" value="{{$jadwal->jam_selesai}}" />
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

