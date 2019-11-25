<div class="container">

    <?php if ($this->session->flashdata('flash')): ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Buku telah <?= $this->session->flashdata('flash');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>buku/tambah" class="btn btn-primary">Tambah data buku</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-9">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data buku..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>  
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <h3 class="mt6">Data Buku</h3>
             <?php if (empty($buku)): ?>
                <div class="alert alert-danger" role="alert">
                     Data buku tidak ditemukan
                </div>
            <?php endif; ?>
            <table class="table table-hover bg-light" style="margin-bottom: 100px;">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Penulis</th>
                  <th scope="col">Penerbit</th>
                  <th scope="col">Tahun</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1;
              foreach ($buku as $bk) {?>
                <tr>
                  <th scope="row"><?=$no?></th>
                  <td><?=$bk['judul']?></td>
                  <td><?=$bk['penulis']?></td>
                  <td><?=$bk['penerbit']?></td>
                  <td><?=$bk['tahun_terbit']?></td>
                  <td>
                    <a href="<?= base_url(); ?>buku/hapus/<?= $bk['id_buku'];?>" class="btn btn-danger float-right" onclick="return confirm('yakin akan menghapus buku ?');">Hapus</a>
                    <a href="<?= base_url(); ?>buku/ubah/<?= $bk['id_buku'];?>" class="btn btn-info float-right">Ubah</a>
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