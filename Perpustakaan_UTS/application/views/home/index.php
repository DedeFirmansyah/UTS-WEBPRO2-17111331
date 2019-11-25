<div class="container">

    <?php if ($this->session->flashdata('flash')): ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Buku <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
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
            <ul class="list-group" style="margin-bottom: 100px;">
                <h3 class="mt6">Data Buku</h3>
            <?php if (empty($buku)): ?>
                <div class="alert alert-danger" role="alert">
                     Data buku tidak ditemukan
                </div>
            <?php endif; ?>
            <?php foreach ($buku as $bk): ?>
                <li class="list-group-item">
                    <?php echo $bk['judul']; ?>
                    <a href="<?= base_url(); ?>home/pinjam/<?= $bk['id_buku'];?>" class="btn btn-success float-right">Pinjam</a>
                    <a href="<?= base_url(); ?>home/detail/<?= $bk['id_buku'];?>" class="btn btn-info float-right">Detail</a>
                </li>
                
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</div>