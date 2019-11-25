<div class="container" style="margin-bottom: 100px;">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form Tambah Anggota
            </div>
            <div class="card-body">
                <form action="<?= base_url(); ?>anggota/aksiTambahAnggota" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk">
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="tahun">No. Telepon</label>
                        <input type="number" class="form-control" id="telepon" name="telepon">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah Data</button>
                </form>
            </div>
         </div>
        </div>
    </div>
</div>