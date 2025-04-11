<!-- resources/views/layouts/topbar.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    <title>CCMS Attendance System</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light custom-navbar fixed-top">
    <div class="container-fluid">

        <!-- Offcanvas Trigger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Logo and Brand -->
        <a class="navbar-brand fw-bold text-uppercase d-flex align-items-center" href="#">
            <img src="{{ asset('images/tikatax_logo.png') }}" alt="TickTax Logo" class="navbar-logo">
            TickTax
        </a>

        <!-- Collapse Trigger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <!-- Profile Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center profile-link" href="#"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                             fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd"
                                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 
                                  11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        <span class="profile-text">Profile</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="static">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Log out</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

{{-- Optional: include Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoFLGs8Ik4N0ZXGU6hgR9E1BM9YjE4D7zUlbELpK/dfIks+" 
        crossorigin="anonymous"></script>

</body>
</html>
