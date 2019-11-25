<div class="container">
    <div class="row mt-3">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Detail Buku
                </div>
                <div class="card-body">
                    <h5 class="card-title">Judul : <?= $buku['judul'] ?></h5>
                    <p class="card-text">Penulis : <?= $buku['penulis'] ?></p>
                    <p class="card-text">Penerbit : <?= $buku['penerbit'] ?></p>
                    <p class="card-text">Tahun terbit : <?= $buku['tahun_terbit'] ?></p>
                    <a href="<?= base_url(); ?>home" class="btn btn-primary float-right">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>