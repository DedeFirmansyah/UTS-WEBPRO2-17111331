<div class="container">

    <?php if ($this->session->flashdata('flash')): ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data anggota telah <?= $this->session->flashdata('flash');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>anggota/tambah" class="btn btn-primary">Tambah data anggota</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-9">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data anggota..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>  
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <h3 class="mt6">Data anggota</h3>
             <?php if (empty($anggota)): ?>
                <div class="alert alert-danger" role="alert">
                     Data anggota tidak ditemukan
                </div>
            <?php endif; ?>
            <table class="table table-hover bg-light" style="margin-bottom: 100px;">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">No. Telepon</th>
                  <th scope="col">email</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1;
              foreach ($anggota as $agt) {?>
                <tr>
                  <th scope="row"><?=$no?></th>
                  <td><?=$agt['nama']?></td>
                  <td><?=$agt['jk']?></td>
                  <td><?=$agt['telepon']?></td>
                  <td><?=$agt['email']?></td>
                  <td><?=$agt['alamat']?></td>
                  <td>
                    <a href="<?= base_url(); ?>anggota/hapus/<?= $agt['id_anggota'];?>" class="btn btn-danger float-right" onclick="return confirm('yakin akan menghapus anggota ?');">Hapus</a>
                    <a href="<?= base_url(); ?>anggota/ubah/<?= $agt['id_anggota'];?>" class="btn btn-info float-right">Ubah</a>
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