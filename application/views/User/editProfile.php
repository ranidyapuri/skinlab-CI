                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

                    <!-- form -->
                    <?= form_open_multipart('User/Page/editProfile');?>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <img src="<?= base_url('admin_assets/img/profile/').$user['foto'];?>" class=" img-thumbnail rounded-circle">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['nama'];?>">
                                        <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Picture</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Edit Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

