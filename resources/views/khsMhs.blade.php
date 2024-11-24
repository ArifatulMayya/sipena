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

        .card {
    background-color: #ffffff;
    border-radius: 8px;
    margin-bottom: 15px;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.card:last-child {
    margin-bottom: 0;
}

.card .info {
    display: flex;
    flex-direction: column;
    text-align: left;
    color: #333333;
    flex: 1;
}

.card .info span:first-child {
    font-size: 16px;
    font-weight: bold;
}

.card .info span:last-child {
    font-size: 14px;
}

.card .icon {
    color: #007bff;
    font-size: 20px;
    cursor: pointer;
    margin-left: auto;
}

.card .icon:hover {
    color: #0056b3;
}

        .row{
            margin-bottom: 20px;
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
                <a href="#">KHS</a>
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
                


                <div class="d-flex align-items-center">
                    <div class="col-12 col-sm-8 col-md-9 px-4 py-3">
                        <h1>Kartu Hasil Studi (KHS)</h1>
                        <div class="row">
        
                        <div class="card">
                    <div class="info">
                        <span>Semester I</span>
                        <span>IPS: 3.9 | SKS: 24</span>
                    </div>
                    <div class="icon">👁️</div>
                </div>
                <div class="card">
                    <div class="info">
                        <span>Semester II</span>
                        <span>IPS: 3.9 | SKS: 24</span>
                    </div>
                    <div class="icon">👁️</div>
                </div>
                <div class="card">
                    <div class="info">
                        <span>Semester III</span>
                        <span>IPS: 3.9 | SKS: 24</span>
                    </div>
                    <div class="icon">👁️</div>
                </div>
                <div class="card">
                    <div class="info">
                        <span>Semester IV</span>
                        <span>IPS: 3.9 | SKS: 24</span>
                    </div>
                    <div class="icon">👁️</div>
                </div>
                   </div>
    </div>
</body>

</html>