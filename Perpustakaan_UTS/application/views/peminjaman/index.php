<div class="container">
    <?php if ($this->session->flashdata('flash')): ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Peminjaman buku telah <?= $this->session->flashdata('flash');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
     <div class="row mt-3">
        <div class="col-md-9">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data peminjaman..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>  
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <h3 class="mt6">Data Peminjaman</h3>
             <?php if (empty($peminjaman)): ?>
                <div class="alert alert-danger" role="alert">
                     Data buku tidak ditemukan
                </div>
            <?php endif; ?>
            <table class="table table-hover bg-light" style="margin-bottom: 100px;">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Buku</th>
                  <th scope="col">Peminjam</th>
                  <th scope="col">Tgl Peminjaman</th>
                  <th scope="col">Tgl Pengembalian</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1;
              foreach ($peminjaman as $pj) {?>
                <tr>
                  <th scope="row"><?=$no?></th>
                  <td><?=$pj['judul']?></td>
                  <td><?=$pj['nama']?></td>
                  <td><?=$pj['tgl_pinjam']?></td>
                  <td><?=$pj['tgl_kembali']?></td>
                  <td>
                    <a href="<?= base_url(); ?>peminjaman/hapus/<?= $pj['id_peminjaman'];?>" class="btn btn-success float-right" onclick="return confirm('buku telah dikembalikan ?');">Selesai</a>
                  </td>
                </tr>
               <?php
                 $no++;
               }?>
              </tbody>
            </table>
        </div>
    </div>
</div>