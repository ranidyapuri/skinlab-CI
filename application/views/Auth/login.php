<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('Auth/_partials/head');?>
    <title>Login</title>
</head>

<body class="own-bg">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center mb-4">
                                        <img src="<?= base_url('')?>admin_assets/img/skinlab.png" width="120px">
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login to your account</h1>
                                    </div>
                                    <?= $this->session->flashdata('message');?>
                                    <form class="user" method="post" action="<?= base_url('')?>index.php/Login/Auth">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp" name="email"
                                                placeholder="Email Address" value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('')?>index.php/Login/Auth/register">Don't have any account? Sign up</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php $this->load->view('Auth/_partials/foot');?>
</body>

</html>