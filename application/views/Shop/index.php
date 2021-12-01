                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <?php foreach($barang as $b): ?>
                        <div class="col-lg-3">
                            <div class="card mb-4" style="width: 230px;">
                                <img src="<?= base_url('admin_assets/FotoBarang/'.$b->foto1);?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title barang text-dark"><?= $b->nama; ?></h5>
                                    <p class="card-text barang-text"><?= $b->keterangan; ?></p>
                                    <p class="card-text harga-barang text-dark">Rp<?= number_format($b->harga); ?></p>
                                    <a href="#" class="btn btn-primary">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
