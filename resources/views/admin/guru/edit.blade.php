<!-- Tombol Edit -->
<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalEditGuru{{ $guru->id }}">
    Edit
</button>

<!-- Modal Edit Guru -->
<div class="modal fade" id="modalEditGuru{{ $guru->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalEditGuruLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.guru.update', $guru->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="modal-content bg-info">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditGuruLabel">Edit Data Guru</h5>
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
                                placeholder="Masukkan Nama" value="{{ $guru->nama }}" required />
                            <div class="invalid-feedback">Nama wajib diisi.</div>
                        </div>

                        <!-- Nomor Induk -->
                        <div class="col-md-6 mb-3">
                            <label for="nomor_induk">Nomor Induk</label>
                            <input type="text" class="form-control" name="nomor_induk" id="nomor_induk"
                                placeholder="Masukkan Nomor Induk" value="{{ $guru->nomor_induk }}" required />
                            <div class="invalid-feedback">Nomor Induk wajib diisi.</div>
                        </div>

                        <!-- No HP -->
                        <div class="col-md-6 mb-3">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp"
                                placeholder="Masukkan No HP" value="{{ $guru->no_hp }}" required />
                            <div class="invalid-feedback">Nomor HP wajib diisi.</div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Masukkan Email" value="{{ $guru->email }}" required />
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
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" id="jurusan"
                                placeholder="Masukkan Jurusan" required />
                        </div>
                    </div>
                </div>

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
