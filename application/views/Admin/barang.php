
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">My Product</h1>
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
                                                <img class="mb-2" src="<?= base_url('admin_assets/FotoBarang/'.$x->foto1);?>" width="80px" height="80px">
                                                <img src="<?= base_url('admin_assets/FotoBarang/'.$x->foto2);?>" width="80px" height="80px">
                                            </td>
                                            <td><?= $x->keterangan?></td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-dark mb-2" data-toggle="modal" data-target="#UpdateDataBarang<?= $x->kode?>">
                                                    <i class="fas fa-edit"></i>&nbsp; Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#DeleteDataBarang<?= $x->kode?>">
                                                    <i class="fas fa-trash"></i>&nbsp; Delete
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

        <!-- Tambah Barang Modal-->
        <div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" id="TambahDataBarang">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                <form action="<?php echo base_url('index.php/Admin/Page/tambahBarang'); ?>" method="POST" enctype="multipart/form-data" >
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Barang" name="nama" aria-describedby="sizing-addon2" required="">
                    </div>
                    <div class="form-group">
                    <input type="number" class="form-control" placeholder="Harga Barang" name="harga" aria-describedby="sizing-addon2" required="">
                    </div>
                    <div class="form-group">
                    <input type="number" class="form-control" placeholder="Stok" name="stok" aria-describedby="sizing-addon2" required="">
                    </div>
                    <div class="form-group">
                    <textarea type="text" class="form-control" placeholder="Keterangan" name="keterangan" aria-describedby="sizing-addon2" style="resize:none;height:250px;" required=""></textarea>
                    </div>
                    <label>Foto 1 (Primary)</label>
                    <div class="form-group">
                    <input type="file"  class="form-control"  name="foto1" required="">
                    </div>
                    <label>Foto 2</label>
                    <div class="form-group">
                    <input type="file"  class="form-control"  name="foto2" required="">
                    </div>
                    <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
                    </div>
                    </div>
                </form>
            </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <?php foreach($barang as $barang): ?>
    <!-- Update Barang Modal-->
    <div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" id="UpdateDataBarang<?= $barang->kode?>">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data Barang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                <form action="<?php echo base_url('index.php/Admin/Page/updateBarang'); ?>" method="POST" enctype="multipart/form-data" >
                    <div class="form-group">
                    <label for="kode">Kode Barang</label>
                    <input type="text" class="form-control" name="kode" aria-describedby="sizing-addon2" value="<?= $barang->kode?>" required="" readonly>
                    </div>
                    <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" placeholder="Nama Barang" name="nama" aria-describedby="sizing-addon2" value="<?= $barang->nama?>" required="">
                    </div>
                    <div class="form-group">
                    <label for="harga">Harga Barang</label>
                    <input type="number" class="form-control" placeholder="Harga Barang" name="harga" aria-describedby="sizing-addon2" value="<?= $barang->harga?>" required="">
                    </div>
                    <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control" placeholder="Stok" name="stok" aria-describedby="sizing-addon2" value="<?= $barang->stok?>" required="">
                    </div>
                    <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea type="text" class="form-control" placeholder="Keterangan" name="keterangan" aria-describedby="sizing-addon2" style="resize:none;height:250px;" required=""><?= $barang->keterangan?></textarea>
                    </div>
                    <label>Foto 1</label>
                    <div class="form-group">
                        <input type="file"  class="form-control"  name="foto1" required="">
                    </div>
                    <label>Foto 2</label>
                    <div class="form-group">
                        <input type="file"  class="form-control"  name="foto2" required="">
                    </div>
                    <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
                    </div>
                    </div>
                </form>
            </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>

    <!-- Delete Barang Modal-->
    <div class="modal fade" id="DeleteDataBarang<?= $barang->kode?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete recent data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure want to delete this product?</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="<?= base_url('index.php/Admin/Page/deleteBarang/'.$x->kode)?>">Delete</a>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

