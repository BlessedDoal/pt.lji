<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/login.css">
</head>
<body>
    <div class="container">
        <h5>Selamat Datang di Sistem Absensi PT. LJI</h5>
        <div class="logo">
            <a href="{{ url('/') }}"><img src="assets/img/logo3.png" alt="ptlji"></a>
        </div>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" required>
                <label for="email">Email</label>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="password">Password</label>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox" name="remember"> Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

            <div class="register-link">
                <p>Don't have account? <a href="{{ route('register') }}">Register</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
