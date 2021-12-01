<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('Auth/_partials/head');?>
    <title>Registration</title>

</head>

<body class="own-bg">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center mb-4">
                                <img src="<?= base_url('')?>admin_assets/img/skinlab.png" width="120px">
                            </div>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('')?>index.php/Login/Auth/register">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="name"
                                        placeholder="Full Name" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email Address" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('')?>index.php/Login/Auth/">Already have an account? Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('')?>admin_assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('')?>admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('')?>admin_assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('')?>admin_assets/js/sb-admin-2.min.js"></script>

</body>

</html>