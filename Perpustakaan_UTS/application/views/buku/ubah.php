<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form Ubah Buku
            </div>
            <div class="card-body">
                <form action="<?= base_url(); ?>buku/aksiUbahBuku" method="post">
                    <input type="hidden" name="id" value="<?= $buku['id_buku']; ?>">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku['penerbit'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun Terbit</label>
                        <input type="number" class="form-control" id="tahun" name="tahun" value="<?= $buku['tahun_terbit'] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="ubah" float="rigth">Ubah Data</button>
                </form>
            </div>
         </div>
        </div>
    </div>
</div>