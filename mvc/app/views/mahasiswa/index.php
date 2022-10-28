<div class="container mt-5">
    <section>
        <h3 class="mb-4">Daftar Mahasiswa</h3>
        <div class="col-6 daftar-mahasiswa">
            <ul class="list-grup">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class=" badge text-decoration-none bg-primary text-light">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</div>