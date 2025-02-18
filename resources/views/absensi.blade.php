<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Karyawan - PT. LJI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/dashboard.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="Logo PT. LJI" class="logo">
            <div class="company-name">Sistem Informasi PT. LJI</div>
        </div>

        <button class="nav-button">Dashboard</button>
        <button class="nav-button">Absensi</button>
        <button class="nav-button">Izin</button>
        <button class="nav-button">Kunjungan</button>
        <button class="nav-button">Kegiatan</button>
        <button class="nav-button">Lembur</button>
    </div>

    <div class="main-content">
        <div class="header">
            <div class="month-title">
                <div class="month-title">ABSENSI KARYAWAN</div>
            </div>

            <div class="user-profile">
                <span>Kairi</span>
                <img src="{{ asset('images/logo.png') }}" alt="User Avatar" class="user-avatar">
            </div>
        </div>

        <div class="stats-container">
            <div class="stat-card">
                <h3>Absen Masuk</h3>
                <p class="stat-value">10</p>
            </div>

            <div class="stat-card">
                <h3>Absen Pulang</h3>
                <p class="stat-value">10</p>
            </div>
            
            <div class="stat-card">
                <h3>Absen Kunjungan</h3>
                <p class="stat-value">9 Jam</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

