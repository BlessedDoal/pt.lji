<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Karyawan - PT. LJI</title>
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
            <div class="search-bar">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
                <input type="text" placeholder="Search here...">
            </div>

            <div class="user-profile">
                <span>Kairi</span>
                <img src="{{ asset('images/logo.png') }}" alt="User Avatar" class="user-avatar">
            </div>
                    </div>

        <div class="month-title">REKAP PER BULAN JANUARI</div>

        <div class="stats-container">
            <div class="stat-card">
                <h3>Jumlah Izin</h3>
                <p class="stat-value">0</p>
                        </div>

            <div class="stat-card">
                <h3>Jumlah Kunjungan</h3>
                <p class="stat-value">0</p>
            </div>
            
            <div class="stat-card">
                <h3>Durasi Lembur</h3>
                <p class="stat-value">0 Jam</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


