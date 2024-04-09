<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">
          Tambah Data Mahasiswa
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h3>Daftar Mahasiswa</h3>
                    <ul class="list-group">
                        <?php foreach ($data['mhs'] as $mhs) :  ?>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span><?= $mhs['nama']; ?></span>
                                    <div class="d-flex">
                                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary badge-padding-y.35em; me-2">detail</a>
                                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success tampilModalUbah badge-padding-y.35em; me-2" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger badge-padding-y.35em;" onclick="return confirm('yakin?');">hapus</a>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post" id="modalMahasiswa">
                        <input type="hidden" name="id" id="id">
                        <div class="modal-header">
                            <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="nrp" class="form-label">NRP</label>
                                <input type="number" class="form-control" id="nrp" name="nrp">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>


                            <select class="form-select" aria-label="jurusan" name="jurusan" id="jurusan">
                                <option selected>Jurusan</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                            </select>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>