<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

  <title>Admin Dashboard</title>
  <link rel="icon" href="{{ asset('client-ui/imgs/logo.jpeg') }}" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    /* Circular Logo */
    .navbar-brand img {
      height: 40px;
      width: 40px;
      border-radius: 50%; /* Makes the logo circular */
      object-fit: cover; /* Ensures the image fits well */
    }
    /* Navbar Items */
    .navbar-nav .nav-link {
      color: #ffffff; /* White text */
      font-weight: 500;
      margin: 0 10px;
      padding: 8px 15px;
      border-radius: 5px;
      transition: all 0.3s ease;
    }
    .navbar-nav .nav-link:hover {
      background-color: #495057; /* Darker background on hover */
      color: #ffffff;
    }
    /* Dropdown Menu */
    .dropdown-menu {
      background-color: #343a40; /* Dark background */
      border: none;
    }
    .dropdown-item {
      color: #ffffff; /* White text */
      padding: 8px 15px;
      transition: all 0.3s ease;
    }
    .dropdown-item:hover {
      background-color: #495057; /* Darker background on hover */
      color: #ffffff;
    }
    /* Active Nav Link */
    .navbar-nav .nav-link.active {
      background-color: #495057; /* Darker background for active link */
      color: #ffffff;
    }
    /* Main Content */
    .main-content {
      padding: 20px;
    }
    /* Footer */
    .footer {
      text-align: center;
      padding: 10px;
      background-color: #343a40;
      color: white;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- Company Logo -->
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{ asset('client-ui/imgs/logo.jpeg') }}" alt="Company Logo">
      </a>

      <!-- Navbar Toggler for Mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Items -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <!-- Table Link -->
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf <!-- Add CSRF token for security -->
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">RegisterAdmin</a>
          </li>
          <!-- Form Link -->
          <li class="nav-item">
            <a class="nav-link" href="{{route('show')}}">Admin Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('accounts.table')}}">Accounts</a>
          </li>
          <!-- Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
              User-Data
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('account-department-table')}}">Accounts Department</a></li>
              <li><a class="dropdown-item" href="{{route('apply-biometric-table')}}">Apply Biometric</a></li>
              <li><a class="dropdown-item" href="{{route('job-application-table')}}">Job-Applications</a></li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
              Documents
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('offer-letter-table')}}">Offer Letter</a></li>
              <li><a class="dropdown-item" href="{{route('lmia-approval-table')}}">LMIA Approval</a></li>
              <li><a class="dropdown-item" href="{{route('work-permit-table')}}">Work Permit</a></li>
              <li><a class="dropdown-item" href="{{route('visa-status-table')}}">Visa Status</a></li>
              <li><a class="dropdown-item" href="{{route('ticket-status-table')}}">Ticket Status</a></li>
              <li><a class="dropdown-item" href="{{route('hicc-card-table')}}">HICC Card</a></li>
              <li><a class="dropdown-item" href="{{route('fee-status-table')}}">Fee Status</a></li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <!-- Main Content -->
   <div class="main-content">
