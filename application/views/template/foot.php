            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Ranidya Putri 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure want to logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">This will end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('index.php/Login/Auth/logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

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
                    <input type="hidden" name="kode" value="<?= $barang->kode?>">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Barang" name="nama" aria-describedby="sizing-addon2" value="<?= $barang->nama?>" required="">
                    </div>
                    <div class="form-group">
                    <input type="number" class="form-control" placeholder="Harga Barang" name="harga" aria-describedby="sizing-addon2" value="<?= $barang->harga?>" required="">
                    </div>
                    <div class="form-group">
                    <input type="number" class="form-control" placeholder="Stok" name="stok" aria-describedby="sizing-addon2" value="<?= $barang->stok?>" required="">
                    </div>
                    <div class="form-group">
                    <textarea type="text" class="form-control" placeholder="Keterangan" name="keterangan" aria-describedby="sizing-addon2" style="resize:none;height:250px;" required=""><?= $barang->keterangan?></textarea>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('')?>admin_assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('')?>admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('')?>admin_assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('')?>admin_assets/js/sb-admin-2.min.js"></script>
    
    <!-- data table -->
    <!-- Page level plugins -->
    <script src="<?= base_url('')?>admin_assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('')?>admin_assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('')?>admin_assets/js/demo/datatables-demo.js"></script>

</body>

</html>