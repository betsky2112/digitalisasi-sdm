<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIMA STAR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login_style.css'); ?>">
</head>
<body>
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Banner (Carousel) -->
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="<?php echo base_url('assets/images/Banner.png'); ?>" class="d-block w-100 h-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo base_url('assets/images/Banner.png'); ?>" class="d-block w-100 h-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo base_url('assets/images/Banner.png'); ?>" class="d-block w-100 h-100" alt="Slide 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            

            <!-- Login Box -->
            <div class="col-md-4">
            <?php if (session()->getFlashdata('error')): ?>
                <div style="color: red;">
            <?= session()->getFlashdata('error'); ?>      
            <?php endif; ?>
                <img src="<?php echo base_url('assets/images/Pkss.png') ?>" class="w-25 float-end" alt="">
                <div class="login-box mt-5">
                    <h3 class="text-center fw-bolder fs-1"><span class="text-primary fw-bolder fs-1">PRIMA</span> <span class="text-warning fw-bolder fs-1">STAR</span></h3>
                    <h6 class="text-center" style="color: #000000; opacity: 0.4;">Enter your username and password to continue.</h6>
                    <form action="<?php echo base_url('login/process'); ?>" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label" style="color: #000000; opacity: 0.7;">Username</label>
                            <input type="text" class="form-control h-25" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: #000000; opacity: 0.7;">Password</label>
                            <input type="password" class="form-control h-25" id="password" name="password" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-25 justify-align-center">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Article Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Article Card 1 -->
            <div class="col-md-4">
                <div class="article mb-4">
                    <img src="<?php echo base_url('assets/images/image-1.png') ?>" alt="Rayakan 25 Tahun" class="w-100 mb-2">
                    <h5>Rayakan Momen 25 Tahun Raih Sukses</h5>
                    <p>Selengkapnya</p>
                </div>
            </div>
            <!-- Article Card 2 -->
            <div class="col-md-4">
                <div class="article mb-4">
                    <img src="<?php echo base_url('assets/images/image-2.png') ?>" alt="Corporate Value" class="w-100 mb-2">
                    <h5>Kick Off New Corporate Value</h5>
                    <p>Selengkapnya</p>
                </div>
            </div>
            <!-- Article Card 3 -->
            <div class="col-md-4">
                <div class="article mb-4">
                    <img src="<?php echo base_url('assets/images/image-3.png') ?>" alt="PKSS Layanan" class="w-100 mb-2">
                    <h5>Kunci Sukses PKSS Layani Sepenuh Hati</h5>
                    <p>Selengkapnya</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center bg-light mt-4">
        <p>&copy; 2024 PKSS. All Rights Reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
