<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
    data-target="#modalEditNilai{{ $nilai->id }}">Edit</button>

<div class="modal fade" id="modalEditNilai{{ $nilai->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalEditNilaiLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('guru.nilai.update', $nilai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content bg-info">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditNilaiLabel">Edit Data Nilai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="col-12 d-flex">
                            <div class="mb-3 col-6 px-2">
                                <label class="form-label text-white">Semester</label>
                                <select class="form-select" name="id_semester" id="id_semester">
                                    @foreach ($semesters as $semester)
                                        <option value="{{ $semester->id }}"
                                            {{ $semester->id == $nilai->id_semester ? 'selected' : '' }}>
                                            {{ $semester->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 col-6 px-2">
                                <label class="form-label text-white">Mata Pelajaran</label>
                                <select class="form-select" name="id_mapel" id="id_mapel">
                                    @php
                                        $displayedIds = []; // Array untuk melacak ID yang sudah ditampilkan
                                    @endphp

                                    @foreach ($jadwals as $jadwal)
                                        @if ($jadwal->User->id == auth()->user()->id && !in_array($jadwal->Mapel->id, $displayedIds))
                                            <option value="{{ $jadwal->Mapel->id }}"
                                                {{ $jadwal->Mapel->id == $nilai->id_jadwal ? 'selected' : '' }}>
                                                {{ $jadwal->Mapel->nama }}
                                            </option>
                                            @php
                                                $displayedIds[] = $jadwal->Mapel->id; // Tambahkan ID ke array
                                            @endphp
                                        @endif
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="mb-3 col-12 px-2">
                                <label class="form-label text-white">Guru Pengajar</label>
                                <select class="form-select" name="id_guru" id="id_guru">
                                    <option value="{{ auth()->user()->id }}" @readonly(true)>
                                        {{ auth()->user()->nama }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="mb-3 col-6 px-2">
                                <label class="form-label text-white">Tugas</label>
                                <input type="number" class="form-control" id="tugas" name="tugas"
                                    value="{{ $nilai->tugas }}" />
                            </div>

                            <div class="mb-3 col-6 px-2">
                                <label class="form-label">UTS</label>
                                <input type="number" class="form-control" id="uts" name="uts"
                                    value="{{ $nilai->uts }}" />
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="mb-3 col-12 px-2">
                                <label class="form-label">UAS</label>
                                <input type="number" class="form-control" id="uas" name="uas"
                                    value="{{ $nilai->uas }}" />
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="mb-3 col-12 px-2">
                                <label class="form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required>{{ $nilai->keterangan }}</textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>
