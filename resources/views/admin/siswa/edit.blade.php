<!-- Tombol Edit -->
<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
    data-target="#modalEditSiswa{{ $siswa->id }}">Edit</button>

<!-- Modal Edit Siswa -->
<div class="modal fade" id="modalEditSiswa{{ $siswa->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalEditSiswaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST"
            id="formEditSiswa{{ $siswa->id }}" novalidate>
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
                    <div class="row">
                        <!-- Nama -->
                        <div class="col-md-6 mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                value="{{ $siswa->nama }}" placeholder="Masukkan Nama" required />
                            <div class="invalid-feedback">Nama wajib diisi.</div>
                        </div>

                        <!-- Nomor Induk -->
                        <div class="col-md-6 mb-3">
                            <label for="nomor_induk">Nomor Induk</label>
                            <input type="text" class="form-control" name="nomor_induk" id="nomor_induk"
                                value="{{ $siswa->nomor_induk }}" placeholder="Masukkan Nomor Induk" required />
                            <div class="invalid-feedback">Nomor Induk wajib diisi.</div>
                        </div>

                        <!-- Nomor HP -->
                        <div class="col-md-6 mb-3">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp"
                                value="{{ $siswa->no_hp }}" placeholder="Masukkan No HP" required />
                            <div class="invalid-feedback">Nomor HP wajib diisi.</div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{ $siswa->email }}" placeholder="Masukkan Email" required />
                            <div class="invalid-feedback">Email wajib diisi.</div>
                        </div>

                        <!-- Password -->
                        <div class="col-md-6 mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Masukkan Password" minlength="8" required />
                            <div class="invalid-feedback">Password wajib diisi dan minimal 8 karakter.</div>
                        </div>

                        <!-- Jurusan -->
                        <div class="col-md-6 mb-3">
                            <label for="id_kelas">Jurusan</label>
                            <select class="form-select form-control" name="id_kelas" id="id_kelas" required>
                                <option value="" disabled>Pilih Jurusan</option>
                                @foreach ($kelass as $kelas)
                                    <option value="{{ $kelas->id }}"
                                        {{ $kelas->id == $siswa->id_kelas ? 'selected' : '' }}>
                                        {{ $kelas->kelas }} {{ $kelas->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Jurusan wajib dipilih.</div>
                        </div>
                    </div>
                </div>

                <!-- Footer Modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <script>
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            const forms = document.querySelectorAll('form[id^="formEditSiswa"]');
                            forms.forEach(function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (!form.checkValidity()) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
        </form>
    </div>
</div>
