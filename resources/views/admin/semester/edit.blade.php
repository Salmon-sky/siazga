<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
    data-target="#modalEditSemester{{ $semester->id }}">Edit</button>

<div class="modal fade" id="modalEditSemester{{ $semester->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalEditSemesterLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.semester.update', $semester->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content bg-info">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditSemesterLabel">Edit Data Semester</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 d-flex">
                        <div class="mb-3 col-6 px-2">
                            <div class="form-group">
                                <label for="nama">Semester</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Masukkan Semester" value="{{ $semester->nama }}" />
                            </div>
                            <div class="form-group">
                                <label for="is_active">Aktif?</label>
                                <input type="checkbox" class="form-check" name="is_active" id="is_active"
                                    placeholder="Masukkan Semester" value="1" @checked($semester->is_active == 1) />
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
