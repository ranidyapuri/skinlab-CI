<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Lab</title>
    <link rel="icon" href="<?= base_url('')?>admin_assets/img/shortcut-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('')?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('')?>bootstrap/styles.css">
</head>
<body>
    <div id="main">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('')?>admin_assets/img/skinlab.png" width="100px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn" href="<?= base_url('')?>Login/Auth/" role="button">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- landing-page -->
        <div id="landing-page">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="title">
                            <h1 class="title-1">Make your skin glow anytime anywhere</h1>
                            <p class="title-2">Feel fresh with premium and organic ingredients treatment from Skin Lab</p>
                        </div>
                        <a class="btn" href="<?= base_url('')?>Login/Auth/" role="button">Shop now</a>
                    </div>
                    <div class="col">
                        <img src="<?= base_url('')?>admin_assets/img/model.png" width="406px">
                    </div>
                </div>
            </div>
        </div>

        <!-- product -->
        <div id="product">
            <div class="container-fluid">
                <div class="product-title">
                    <div class="row">
                        <div class="col">
                            <h2 class="featured-product">Featured Product</h2>
                        </div>
                        <div class="col">
                            <a href="<?= base_url('')?>Login/Auth/" class="view-all" style="float: right; margin-right: 30px;">View all</a>
                        </div>
                    </div>
                </div>
                <div class="product-detail mt-4">
                    <div class="row justify-content-center">
                    <?php foreach ($barang as $b) : ?>
                        <?php if ($b->kode == 5) {
                            break;
                        } $b->kode++; ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card mb-4" style="width: 240px;">
                                <img src="<?= base_url('admin_assets/FotoBarang/'.$b->foto1);?>" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-title"><?= $b->nama; ?></p>
                                    <p class="card-text"><?= $b->keterangan; ?></p>
                                    <h6 class="harga">Rp<?= number_format($b->harga); ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

        <!-- footer -->
        <div id="footer">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img class="footer-image" src="<?= base_url('')?>admin_assets/img/skinlab.png" width="142px">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <h4>OFFICE</h4>
                    <p>Beverly Hills</p>
                    <p>Jakarta Selatan</p>
                    <p>(021) 1110002</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <h4>STAY CONNECTED</h4>
                    <div class="sosmed">
                        <a href="#"class="contact-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"class="contact-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="contact-link">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="footer-bawah">Copyright &copy; Ranidya Putri 2021</p>

    <script src="<?= base_url('')?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('')?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>