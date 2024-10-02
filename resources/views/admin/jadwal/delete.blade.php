<!-- Button trigger modal -->
<a role="button" class="btn btn-sm btn-danger delete-button" data-bs-toggle="modal"
data-bs-target=".bd-example-modal-sm{{ $jadwal->id }}">
Hapus
</a>
<!-- Modal -->
<div class="modal fade bd-example-modal-sm{{ $jadwal->id }}" tabindex="-1" role="dialog" aria-hidden="">
<div class="modal-dialog ">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><strong>Hapus @yield('title')</strong>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
            </button>
        </div>
        <div class="modal-body">Apakah anda yakin ingin menghapus
            @yield('title')?</div>
        <div class="modal-footer">
            <form action="{{ route('admin.jadwal.destroy', $jadwal->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" class="btn btn-danger light" name=""
                    id="" value="Hapus">
                <button type="button" class="btn btn-primary"
                    data-bs-dismiss="modal">Tidak</button>
            </form>
        </div>
    </div>
</div>
</div>