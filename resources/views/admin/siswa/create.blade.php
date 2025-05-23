<!-- Tombol Tambah -->
<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambahSiswa">
    Tambah
</button>

<!-- Modal Tambah Siswa -->
<div class="modal fade" id="modalTambahSiswa" tabindex="-1" role="dialog" aria-labelledby="modalTambahSiswaLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.siswa.store') }}" method="POST" id="formTambahSiswa" novalidate>
            @csrf
            <div class="modal-content bg-info">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahSiswaLabel">Tambah Data Siswa</h5>
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
                                placeholder="Masukkan Nama" required />
                            <div class="invalid-feedback">Nama wajib diisi.</div>
                        </div>

                        <!-- Nomor Induk -->
                        <div class="col-md-6 mb-3">
                            <label for="nomor_induk">Nomor Induk</label>
                            <input type="text" class="form-control" name="nomor_induk" id="nomor_induk"
                                placeholder="Masukkan Nomor Induk" required />
                            <div class="invalid-feedback">Nomor Induk wajib diisi.</div>
                        </div>

                        <!-- No HP -->
                        <div class="col-md-6 mb-3">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp"
                                placeholder="Masukkan No HP" required />
                            <div class="invalid-feedback">Nomor HP wajib diisi.</div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Masukkan Email" required />
                            <div class="invalid-feedback">Email wajib diisi.</div>
                        </div>

                        <!-- Password -->
                        <div class="col-md-6 mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Masukkan Password" minlength="8" required />
                            <div class="invalid-feedback">Password wajib diisi dan maksimal 8 karakter.</div>
                        </div>

                        <!-- Jurusan -->
                        <div class="col-md-6 mb-3">
                            <label for="id_kelas">Jurusan</label>
                            <select class="form-select form-control" name="id_kelas" id="id_kelas" required>
                                <option value="" disabled selected>Pilih Jurusan</option>
                                @foreach ($kelass as $kelas)
                                    <option value="{{ $kelas->id }}">{{ $kelas->kelas }} {{ $kelas->nama }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Jurusan wajib dipilih.</div>
                        </div>
                    </div>
                </div>

                <!-- Footer Modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                <script>
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            var form = document.getElementById('formTambahSiswa');
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        }, false);
                    })();
                </script>
            </div>
        </form>
    </div>
</div>
