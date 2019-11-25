<div class="container">
    <div class="row mt-3">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Form Pinjam Buku
            </div>
            <div class="card-body">
                <form action="<?= base_url(); ?>home/aksiPinjamBuku" method="post">
                    <input type="hidden" name="id_buku" value="<?= $buku['id_buku']; ?>">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="anggota">Peminjam (Anggota)</label>
                        <select class="form-control" name="id_anggota">
                        <?php foreach ($anggota as $agt): ?>
                          <option value="<?= $agt['id_anggota']?>"><?= $agt['nama']?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_pinjam">Tangal Pinjam</label>
                       <input type="text" id="datepicker" name="tgl_pinjam" class="datepicker form-control" placeholder="Tanggal" required><br>
                    </div>
                     <div class="form-group">
                        <label for="tgl_pinjam">Tangal Kembali</label>
                       <input type="text" id="datepicker" name="tgl_kembali" class="datepicker form-control" placeholder="Tanggal" required><br>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" name="pinjam">Pinjam Buku</button>
                </form>
            </div>
         </div>
        </div>
    </div>
</div>