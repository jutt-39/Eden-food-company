<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="icon" href="{{ asset('client-ui/imgs/logo.jpeg') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .form-box {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .logo-circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 1rem;
        }
        .logo-circle img {
            width: 60px;
            height: 60px;
        }
        .company-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: blue;
            margin-bottom: 1.5rem;
        }
        .form-control {
            margin-bottom: 1rem;
        }
        .btn-login {
            width: 100%;
            background-color: #007bff;
            border: none;
            padding: 0.5rem;
            font-size: 1rem;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }
        footer {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
            color: #000;
        }
    </style>
</head>
<body>
    <!-- Login Form -->
    <div class="form-box">
        <!-- Circular Logo -->
        <div class="logo-circle">
            <img src="{{ asset('client-ui/imgs/logo.jpeg') }}" alt="Company Logo">
        </div>
        <!-- Company Name -->
        <div class="company-name text-blue-800">Eden Food Company<br> Canada</div>
        @error('error')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        <!-- Login Form -->
        <form method="post" action="{{route('login')}}">
            @csrf
            <div class="mb-3">

                <input type="text" class="form-control"  id="email"
                    name="email" placeholder="username/email" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">

                <input type="password" class="form-control"  id="password"
                    name="password" placeholder="password" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-login">Login</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        &copy; <span id="current-year"></span> [Eden Food Company]. All rights reserved.
    </footer>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript to Display Current Year -->
    <script>
        // Get the current year
        const currentYear = new Date().getFullYear();
        // Display the current year in the footer
        document.getElementById('current-year').textContent = currentYear;
    </script>
</body>
</html>
