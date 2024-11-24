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

.status-card {
            background-color: #002B5B;
            padding: 20px;
            border-radius: 20px;
            margin-bottom: 20px;
            color: #FFFFFF;
        }

        .status-card .row div {
            text-align: center;
        }

        .schedule-card {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .schedule-card table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }

        .schedule-card th {
            background-color: #F0F4FF;
            color: #002B5B;
            padding: 10px;
        }

        .schedule-card td {
            padding: 8px;
        }

        .schedule-card tr:nth-child(even) {
            background-color: #F9FBFF;
        }        .row{
            margin-bottom: 20px;
        }
        .Tambah {
            padding: 5px 5px 5px 5px;
            border-radius: 13px;
            font-weight: 540;
            margin: 2px;
            background-color: #03C988;
            color: black;
            text-decoration: none;
        }
        .Batal {
            padding: 5px 5px 5px 5px;
            border-radius: 13px;
            margin: 2px;
            font-weight: 540;
            background-color: #D71313;
            color: black;
            text-decoration: none;
        }
        .batal:hover {
            padding: 5px 5px 5px 5px;
            border-radius: 13px;
            margin: 2px;
            font-weight: 540;
            background-color: #D71313;
            color: black;
            text-decoration: none;
        }
        .search-container {
    display: flex;
    align-items: center;
    background-color: #f2f2f2;
    border-radius: 20px;
    padding: 5px 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-right: 20px;
}

.search-form {
    display: flex;
    align-items: center;
}

.search-input {
    border: none;
    background-color: transparent;
    padding: 8px 12px;
    font-size: 14px;
    flex-grow: 1;
    outline: none;
}

.search-button {
    background-color: transparent;
    border: none;
    color: #333;
    font-size: 16px;
    cursor: pointer;
    padding: 0 8px;
}

.search-button:hover {
    color: #555;
}
.custom-title {
    font-size: 20px;
    font-weight: bold;
    margin: 0;
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
                <br><br><br>


                <div class="row align-items-center">
    <div class="col-auto">
        <div class="search-container">
            <form class="search-form">
                <input type="text" class="search-input" placeholder="Search...">
                <button type="submit" class="search-button">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="col text-end">
        <h1 >Buat Isian rencana Studi (IRS)</h1>
    </div>
</div>
                        <div class="schedule-card">
                            <h4>Mata Kuliah Semester 2</h4>
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>Mata Kuliah</th>
                                        <th>Kelas</th>
                                        <th>Kuota Kelas</th>
                                        <th>Kuota Terisi</th>
                                        <th>Waktu</th>
                                        <th>Keterangan</th>
                                
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Struktur Data</td>
                                        <td>A</td>
                                        <td>50</td>
                                        <td>50</td>
                                        <td><b>Senin,07:00-9:30</b></td>
                                        <td>
                                            <a class="Tambah">Tambah</a>
                                            <a class="Batal">Batal</a>
                                        </td>
                                      
                                    </tr>
                                    <tr>
                                        <td>Struktur Data</td>
                                        <td>A</td>
                                        <td>50</td>
                                        <td>50</td>
                                        <td><b>Senin,07:00-9:30</b></td>
                                        <td>
                                        <a class="Tambah">Tambah</a>
                                        <a class="Batal">Batal</a>
                                        </td>
                                
                                    </tr>
                                    <tr>
                                        <td>Struktur Data</td>
                                        <td>A</td>
                                        <td>50</td>
                                        <td>50</td>
                                        <td><b>Senin,07:00-9:30</b></td>
                                        <td>
                                        <a class="Tambah">Tambah</a>
                                        <a class="Batal">Batal</a>
                                        </td>
                                      
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
    </div>
</body>

</html>