<div class="container mt-4">
    <section>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title mb-3"><?= $data['mhs']['nama']; ?></h5>
                <h6 class="card-subtitle text-muted"><?= $data['mhs']['nrp']; ?></h6>
                <p class="card-text"><?= $data['mhs']['email']; ?></p>
                <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
                <a href="<?= BASEURL; ?>/mahasiswa">Kembali</a>
            </div>
        </div>
    </section>
</div>