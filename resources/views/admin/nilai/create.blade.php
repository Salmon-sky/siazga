<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambahNilai">Tambah</button>

<div class="modal fade" id="modalTambahNilai" tabindex="-1" role="dialog" aria-labelledby="modalTambahNilaiLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('guru.nilai.store') }}" method="POST">
            @csrf
            <div class="modal-content bg-info">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahNilaiLabel">Tambah Data Nilai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 d-flex">
                        <div class="mb-3 col-6 px-2">
                            <div class="form-group">
                                <label for="id_student">Siswa</label>
                                <select class="form-select" name="id_siswa" id="id_student">
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}">{{ $student->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_mapel">Mapel</label>
                            <select class="form-select" name="id_mapel" id="id_mapel">
                                @foreach ($mapels as $mapel)
                                    <option value="{{ $mapel->id }}">{{ $mapel->nama }}</option>
                                @endforeach
                            </select>
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
