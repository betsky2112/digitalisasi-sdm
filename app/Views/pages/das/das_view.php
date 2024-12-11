<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Digital SDM</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        .sidebar {
            min-height: 100vh;
            background-color: #fff;
            border-right: 1px solid #ddd;
        }

        .sidebar .nav-link {
            font-size: 16px;
            color: #333;
        }

        .sidebar .nav-link.active {
            font-weight: bold;
            color: #007bff;
        }

        .topbar {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            background-color: #f8f9fa;
            height: 60px;
        }

        .nav-left {
            display: flex;
            align-items: center;
        }

        .nav-right {
            display: flex;
            align-items: center;
        }

        .notification-bell {
            margin-right: 20px;
            cursor: pointer;
        }

        .admin-icon {
            cursor: pointer;
        }


        .card button {
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            color: #fff;
        }

        .card.pink {
            background-color: #ffe4e6;
        }

        .card.blue {
            background-color: #e0e7ff;
        }

        .card.green {
            background-color: #dcfce7;
        }

        .card.light-blue {
            background-color: #e0f2fe;
        }

        .birthday-card {
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
        }

        .rounded-image {
            width: 150px;
            /* Ubah sesuai kebutuhan */
            height: 150px;
            /* Ukuran yang sama dengan width */
            border-radius: 50%;
            /* Membuat sudut menjadi bulat */
            object-fit: cover;
            /* Menghindari gambar terdistorsi */
            border: 2px solid #ddd;
            /* Tambahkan border jika diperlukan */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Tambahkan efek bayangan jika diinginkan */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 sidebar d-flex flex-column p-3">
                <div class="text-center mb-4">
                    <img src="<?php echo base_url('assets/images/logo.jpg') ?>" alt="logo" class="img-fluid" style="max-width: 80%;">
                    <span class="hamburger-menu">☰</span>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-home me-2"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('datadiri'); ?>"><i class="fas fa-user me-2"></i>Data Diri Pegawai</a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto px-md-4">
                <!-- Topbar -->
                <div class="navbar">
                    <div class="nav-left">
                        <!-- Other navigation items -->
                    </div>
                    <div class="nav-right">
                        <span class="notification-bell">🔔</span>
                        <span class="admin-icon">👤 Admin </span>
                    </div>
                </div>

                <div class="container">
                    <!-- Dashboard Title -->
                    <h1 class="mt-4">Dashboard Digital SDM</h1>

                    <!-- Cards -->
                    <div class="row mt-4 g-3">
                        <div class="col-md-3">
                            <div class="card pink text-center p-4">
                                <h2>150</h2>
                                <p>PKWTT</p>
                                <button class="btn btn-primary">More Info</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card blue text-center p-4">
                                <h2>100</h2>
                                <p>PKWT</p>
                                <button class="btn btn-primary">More Info</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card green text-center p-4">
                                <h2>80</h2>
                                <p>Outsource</p>
                                <button class="btn btn-primary">More Info</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card light-blue text-center p-4">
                                <h2>60</h2>
                                <p>Pensiun</p>
                                <button class="btn btn-primary">More Info</button>
                            </div>
                        </div>
                    </div>

                    <!-- Search Section -->
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Nik Pekerja">
                        </div>
                        <div class="col-md-4">
                            <select class="form-select">
                                <option>Unit Kerja</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary w-100">Unduh Data</button>
                        </div>
                    </div>

                    <!-- Birthday Section -->
                    <h2 class="mt-5">Happy Birthday</h2>
                    <div class="row mt-4 g-3">
                        <div class="col-md-3">
                            <div class="birthday-card">

                                <img src="<?php echo base_url('assets/images/kas.jpg') ?>" alt="logo" class="mb-2 rounded-image" style="max-width: 80%;">
                                <br>
                                <h5>Agus Salim M.H</h5>
                                <p class="mb-1">Staf Senior Hukum</p>
                                <small>11 November</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="birthday-card">

                                <img src="<?php echo base_url('assets/images/kas.jpg') ?>" alt="logo" class=" mb-2 rounded-image" style="max-width: 80%;">
                                </br>
                                <h5>Agus Salim M.H</h5>
                                <p class="mb-1">Staf Senior Hukum</p>
                                <small>11 November</small>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>