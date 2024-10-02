
    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambahSiswa">Tambah</button>

    <div class="modal fade" id="modalTambahSiswa" tabindex="-1" role="dialog" aria-labelledby="modalTambahSiswaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="{{route('admin.pengumuman.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTambahSiswaLabel">Tambah Data Pengumuman</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="mb-3">
                <label for="judul" class="form-label text-white">Judul Pengumuman</label>
                <input type="text" class="form-control"  id="judul" name="judul" required />
              </div>
              <div class="mb-3">
                <label for="img" class="form-label text-white">Upload File</label>
                <input type="file" class="form-control" id="img" name="img" accept=".pdf, .doc, .docx" required />
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

