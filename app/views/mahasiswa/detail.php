<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['mhs']['nim']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nama']; ?></h6>
                    <p class="card-text"><?= $data['mhs']['email']; ?></p>
                    <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
                    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>