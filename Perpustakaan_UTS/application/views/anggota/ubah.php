<div class="container" style="margin-bottom: 100px;">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form Ubah Anggota
            </div>
            <div class="card-body">
                <form action="<?= base_url(); ?>anggota/aksiUbahAnggota" method="post">
                    <input type="hidden" name="id" value="<?= $anggota['id_anggota']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $anggota['nama']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk">
                        <?php if($anggota['jk'] == "Laki-laki") :?>
                          <option value="Laki-laki" selected="selected">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        <?php else : ?>
                          <option value="Perempuan" selected="selected">Perempuan</option>
                          <option value="Laki-laki">Laki-laki</option>
                        <?php endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="email" value="<?= $anggota['email'] ?>" name="email">
                    </div>
                    <div class="form-group">
                        <label for="tahun">No. Telepon</label>
                        <input type="number" class="form-control" id="telepon" value="<?= $anggota['telepon'] ?>" name="telepon">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $anggota['alamat'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" name="ubah">Ubah Data</button>
                </form>
            </div>
         </div>
        </div>
    </div>
</div>