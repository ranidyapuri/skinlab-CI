                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <?php foreach($barang as $b): ?>
                        <div class="col-lg-3 col-md-6 ">
                            <div class="card mb-4" style="width: 230px;">
                                <img src="<?= base_url('admin_assets/FotoBarang/'.$b->foto1);?>" class="card-img-top img-fluid" alt="Responsive image">
                                <div class="card-body">
                                    <h5 class="card-title barang text-dark"><?= $b->nama; ?></h5>
                                    <p class="card-text barang-text"><?= $b->keterangan; ?></p>
                                    <p class="card-text harga-barang text-dark">
                                        Rp<?= number_format($b->harga); ?>
                                        <small class="float-right">Stock : <?= $b->stok; ?></small>
                                    </p>
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                        <input id="item<?= $b->kode; ?>" class="quantity" min="1" max="<?= $b->stok; ?>" name="quantity" value="0" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                    </div>
                                    <button class="btn btn-block btn-primary mt-4 btn-add-chart"
                                        data-kode="<?= $b->kode; ?>"
                                        data-nama="<?= $b->nama; ?>"
                                    >
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
