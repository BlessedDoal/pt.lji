<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/login.css">
</head>
<body>
    <div class="container">
        <h5>Registrasi Akun PT. LJI</h5>
        <div class="logo">
            <a href="{{ url('/') }}"><img src="assets/img/logo3.png" alt="ptlji"></a>
        </div>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" required>
                <label for="name">Nama Lengkap</label>
            </div>
            
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" required>
                <label for="email">Email</label>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                <label for="password_confirmation">Konfirmasi Password</label>
            </div>

            <div class="form-group">
                <label for="role" class="form-label"></label>
                <select class="form-control" name="role" id="role" required>
                    <option value="">--Pilih Role--</option>
                    <option value="admin">Admin</option>
                    <option value="karyawan">Karyawan</option>
                    <option value="pemimpin">Pemimpin</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>

            <div class="login-link">
                <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
