<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form Tambah Buku
            </div>
            <div class="card-body">
                <form action="<?= base_url(); ?>buku/aksiTambahBuku" method="post">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun Terbit</label>
                        <input type="number" class="form-control" id="tahun" name="tahun" maxlength="4" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah Data</button>
                </form>
            </div>
         </div>
        </div>
    </div>
</div>