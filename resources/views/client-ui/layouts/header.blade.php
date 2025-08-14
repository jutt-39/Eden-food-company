<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eden Food Company Canada')</title>
    {{-- favicon --}}
    <link rel="icon" href="{{ asset('client-ui/imgs/logo.jpeg') }}" type="image/png">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('client-ui/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('client-ui/account-style.css') }}">
    <style>

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black ">
        <div class="container-fluid">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('client-ui/imgs/logo.jpeg') }}" alt="Company Logo" class="rounded-circle"
                    width="40" height="40">

            </a>

            <!-- Toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="onlineStatusDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Online Status
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="onlineStatusDropdown">
                            <li><a class="dropdown-item" href="{{ route('offer-letter') }}">Offer Letter</a></li>
                            <li><a class="dropdown-item" href="{{ route('lmia-approval') }}">LMIA Approval</a></li>
                            <li><a class="dropdown-item" href="{{ route('work-permit') }}">Work Permit</a></li>
                            <li><a class="dropdown-item" href="{{ route('visa-status') }}">Visa Status</a></li>
                            <li><a class="dropdown-item" href="{{ route('ticket-status') }}">Ticket Status</a></li>
                            <li><a class="dropdown-item" href="{{ route('hicc-card') }}">HICC Card</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fee-status') }}">Fee Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('account-department') }}">Accounts Department</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apply-biometric') }}">Apply Biometric</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jobs') }}">Jobs</a>
                    </li>


                </ul>
                </ul>
                <!-- Buttons on the right -->
                <div class="d-flex">
                    <a href="{{ route('apply-now') }}" class="btn btn-primary me-2">Apply Now</a>
                    <a href="{{route('login')}}" class="btn btn-outline-light">Admin</a>
                </div>
            </div>
        </div>
    </nav>
