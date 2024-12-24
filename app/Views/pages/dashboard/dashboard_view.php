<?php
$loginsession ??= [];
?>

<?= $this->extend('home/header') ?>

<!-- Main Content -->
<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Digital SDM</h1>
        </div>
        <div class="section-body">
            <div class="row mt-4">
                <div class="col-md-3 mb-3 d-flex justify-content-center align-items-center" style="height: 25vh;">
                    <div class="card-custom pink">
                        <h1>150</h1>
                        <h2>PKWTT</h2>
                        <button class="btn btn-custom pink-dark">More Info</button>
                    </div>
                </div>
                <div class="col-md-3 mb-3 d-flex justify-content-center align-items-center" style="height: 25vh;">
                    <div class="card-custom blue">
                        <h1>100</h1>
                        <h2>PKWT</>
                            <button class="btn btn-custom blue-dark">More Info</button>
                    </div>
                </div>
                <div class="col-md-3 mb-3 d-flex justify-content-center align-items-center" style="height: 25vh;">
                    <div class="card-custom green">
                        <h1>80</h1>
                        <h2>Outsource</h2>
                        <button class="btn btn-custom green-dark">More Info</button>
                    </div>
                </div>
                <div class="col-md-3 mb-3 d-flex justify-content-center align-items-center" style="height: 25vh;">
                    <div class="card-custom blue-light">
                        <h1>60</h1>
                        <h2>Pensiun</h2>
                        <button class="btn btn-custom blue-light-dark">More Info</button>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-3">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3 text-md-left mb-2 mb-md-0">
                        <h4 class="font-weight-bold mb-0 txt-color">
                            Digital <span class="font-weight-bold">SDM</span>
                        </h4>
                    </div>

                    <div class="col-12 col-md-5 d-flex justify-content-center mb-2 mb-md-0">
                        <div class="custom-input mr-2 w-50">
                            <input type="text" class="form-control" placeholder="Nik Pekerja">
                            <i class="fas fa-search icon-style"></i>
                        </div>
                        <div class="w-50">
                            <select class="form-control">
                                <option selected>Unit Kerja</option>
                                <option value="1">Unit 1</option>
                                <option value="2">Unit 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 text-center text-md-right">
                        <button class="btn btn-download">
                            <i class="fas fa-download"></i> Unduh data
                        </button>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-4 py-2">
                <h4 class="txt-color mt-2">Happy Birthday</h4>
                <div class="row mt-4 g-3">
                    <div class="col-md-3">
                        <div class="birthday-card">
                            <img src="<?php echo base_url('assets/admin/assets/img/kas.jpg') ?>" alt="logo" class="mb-2 rounded-image" style="max-width: 80%;">
                            <br>
                            <h5>Aura</h5>
                            <p class="mb-1">Staf Senior Hukum</p>
                            <small>11 November</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="birthday-card">
                            <img src="<?php echo base_url('assets/admin/assets/img/kas.jpg') ?>" alt="logo" class=" mb-2 rounded-image" style="max-width: 80%;">
                            </br>
                            <h5>Aura</h5>
                            <p class="mb-1">Staf Senior Hukum</p>
                            <small>11 November</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="birthday-card">
                            <img src="<?php echo base_url('assets/admin/assets/img/kas.jpg') ?>" alt="logo" class=" mb-2 rounded-image" style="max-width: 80%;">
                            </br>
                            <h5>Aura</h5>
                            <p class="mb-1">Staf Senior Hukum</p>
                            <small>11 November</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="birthday-card">
                            <img src="<?php echo base_url('assets/admin/assets/img/kas.jpg') ?>" alt="logo" class=" mb-2 rounded-image" style="max-width: 80%;">
                            </br>
                            <h5>Aura</h5>
                            <p class="mb-1">Staf Senior Hukum</p>
                            <small>11 November</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>