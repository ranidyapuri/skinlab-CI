
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Produk Saya</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#TambahDataBarang">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Add Product</span>
                        </a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Foto</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Foto</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($barang as $x): ?>
                                        <tr>
                                            <td><?= $x->kode?></td>
                                            <td><?= $x->nama?></td>
                                            <td>Rp<?= number_format($x->harga)?></td>
                                            <td><?= $x->stok?></td>
                                            <td>
                                                <img src="<?= base_url('admin_assets/FotoBarang/'.$x->foto1);?>" width="100px" height="100px">
                                                <img src="<?= base_url('admin_assets/FotoBarang/'.$x->foto2);?>" width="100px" height="100px">
                                            </td>
                                            <td><?= $x->keterangan?></td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-circle btn-warning " data-toggle="modal" data-target="#UpdateDataBarang<?= $x->kode?>">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('index.php/Admin/Page/deleteBarang/'.$x->kode)?>" class="btn btn-sm btn-circle btn-danger ">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>

                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
