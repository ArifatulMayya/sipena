<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPENA UNDIP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a4baf6;
        }

        .sidebar {
            background-color: #002E5D;
            color: #FFFFFF;
            min-height: calc(100vh);
            padding: 20px;
        }

        .sidebar a {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 20px;
            padding: 10px 15px;
            display: block;
            border-radius: 20px;
            margin-bottom: 10px;
        }

        .sidebar a.active {
            background-color: #1c6fb8;
        }

        .sidebar a:hover {
            background-color: #1c6fb8;
        }

        .main-content {
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            min-height: calc(100vh - 60px);
        }

        .header {
            background-color: #002E5D;
            color: #FFFFFF;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #1c6fb8;
        }
        .footer {
            background-color: #002E5D;
            padding: 15px 20px;
            color: #FFFFFF;
            position: absolute;
            bottom: 0;
            width: 100%;

        }

        .no-padding {
            padding: 0;
            margin: 0;
        }

        .custom-title {
    color: #333;
    font-weight: bold;
    margin-bottom: 20px;
}

h1.custom-title {
    font-size: 28px;
}

.card {
    border: none;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 1.5rem;
}

.card-footer {
    background-color: #f8f9fa;
    border-top: 1px solid #dee2e6;
    padding: 1rem 1.5rem;
}

.table thead th {
    background-color: #002E5D;
    color: #fff;
    border-bottom: none;
    padding: 0.75rem 1.5rem;
}

.table td {
    color: #333;
    padding: 0.75rem 1.5rem;
    border-top: 1px solid #dee2e6;
}

.btn-primary {
    background-color: #002E5D;
    border-color: #002E5D;
}

.btn-primary:hover {
    background-color: #1c6fb8;
    border-color: #1c6fb8;
}




    </style>
</head>

<body>

    <div class="container-fluid no-padding">
        <div class="row no-padding">
            <!-- Sidebar -->
            <div class="col-12 col-sm-4 col-md-3 sidebar d-flex flex-column align-items-center justify-content-center">
                <div class="text-center mb-4">
                    <img src="https://via.placeholder.com/100" alt="User" class="rounded-circle">
                    <h6 class="mt-3">Stefani Mayya Febria Hutagalung</h6>
                    <p>NIM : 24060122129800</p>
                    <p>Informatika S1</p>
                </div>
                <a href="/dashboardMhs">Dashboard</a>
                <a href="/registrasi">Registrasi</a>
                <a href="#">Akademik</a>
                <a href="/buatIRSMhs">Buat IRS</a>
                <a href="/irsMhs">IRS</a>
                <a href="/khsMhs">KHS</a>
                <a href="/transkripMhs">Transkrip</a>
            </div>

            <!-- Main Content Area -->
            <div class="col-12 col-sm-8 col-md-9 no-padding">
                <!-- Header -->
                <div class="header">
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40" alt="Logo" class="me-2" style="width: 40px; height: 40px;">
                        <h5 class="mb-0 text-white">SIPENA UNDIP</h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-bell-fill text-white me-3" style="font-size: 20px;"></i>
                        <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px;">
                    </div>
                </div>

                <div class="container my-5">
    <!-- Title -->
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1 class="custom-title">Transkrip Akademik</h1>
        </div>
    </div>

    <!-- Transkrip Akademik Table -->
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PAIK6101</td>
                        <td>MATEMATIKA 1</td>
                        <td>2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PAIK6102</td>
                        <td>DASAR PEMROGRAMAN</td>
                        <td>3</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PAIK6103</td>
                        <td>DASAR SISTEM</td>
                        <td>3</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>PAIK6104</td>
                        <td>LOGIKA INFORMATIKA</td>
                        <td>3</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>PAIK6105</td>
                        <td>STRUKTUR DISKRIT</td>
                        <td>4</td>
                        <td>A</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <div>
                    <span>IP Komulatif : 3.9</span>
                </div>
                <div>
                    <span>SKS Komulatif : 15</span>
                </div>
            </div>
            <div class="text-end">
            <button class="btn btn-primary">
                <i class="fas fa-print"></i> Print
            </button>
        </div>
    </div>
  
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="path/to/font-awesome/js/all.min.js"></script>
</body>

</html>