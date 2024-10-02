
    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalEditGuru{{$arsip->id}}">Edit</button>

    <div class="modal fade" id="modalEditGuru{{$arsip->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditGuruLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="{{route('guru.arsip.update', $arsip->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEditGuruLabel">Edit Data Arsip</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-white mb-3" style="background-color: #4682b4; color: white">
                  <div class="card-header text-center"><i class="fas fa-upload"></i> E-Raport</div>
                  <div class="card-body">
                      <input type="file" class="form-control" id="file-link" name="file_eraport" accept=".pdf, .doc, .docx" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-white mb-3" style="background-color: #4682b4; color: white">
                  <div class="card-header text-center"><i class="fas fa-upload"></i> Sertifikat</div>
                  <div class="card-body">
                      <input type="file" class="form-control" id="file-link" name="file_sertifikat" accept=".pdf, .doc, .docx" />
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </form>
      </div>
    </div>

