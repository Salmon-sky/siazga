
    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambahSemester">Tambah</button>

    <div class="modal fade" id="modalTambahSemester" tabindex="-1" role="dialog" aria-labelledby="modalTambahSemesterLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <form action="{{route('admin.semester.store')}}" method="POST">
            @csrf
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTambahSemesterLabel">Tambah Data Semester</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
          <div class="modal-body">
              <div class="col-12 d-flex">
                <div class="mb-3 col-6 px-2">
                  <div class="form-group">
                    <label for="nama">Semester</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Semester" />
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

