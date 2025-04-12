{{-- Equivalent to: include '../php_functions/function.php'; --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCMS Attendance System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5Wa2Ro9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body style="background-color: #EDF1F7;">

    {{-- Equivalent to: include 'top_bar.php'; --}}
    @include('layouts.top_bar')

<!-- Sidebar -->
<div class="offcanvas offcanvas-start bg-white text-dark sidebar-nav" id="offcanvasExample" tabindex="-1" style="width: 270px !important;">
    <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <div class="small fw-bold text-uppercase px-3">CORE</div>
                </li>
                <li>
                    <a href="{{ url('index') }}" class="nav-link px-3">
                        <img src="{{ asset('images/dashboard_ico.png') }}" alt="Dashboard" width="20" height="20" class="me-2" />
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="my-4"><hr class="border-secondary" /></li>
                <li>
                    <div class="small fw-bold text-uppercase px-3">Manage</div>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <img src="{{ asset('images/instructor_ico.png') }}" alt="Instructors" width="20" height="20" class="me-2" />
                        <span>Instructors</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <img src="{{ asset('images/students_ico.png') }}" alt="Students" width="20" height="20" class="me-2" />
                        <span>Students</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <img src="{{ asset('images/rgistration_ico.png') }}" alt="Registration" width="20" height="20" class="me-2" />
                        <span>Registration</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <img src="{{ asset('images/events_ico.png') }}" alt="Events" width="20" height="20" class="me-2" />
                        <span>Events</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <img src="{{ asset('images/records_ico.png') }}" alt="Records" width="20" height="20" class="me-2" />
                        <span>Records</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-3 active">
                        <img src="{{ asset('images/logs_ico.png') }}" alt="Logs" width="20" height="20" class="me-2" />
                        <span>Logs</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

    <main id="main-content" class="px-4">
        <div class="container mt-4 py-4">
            <div class="container-fluid">
                <div class="mb-3">
                    <h2 class="fw-bold" style="color: #5CE1E6;">Logs</h2>
                    <small style="color: #989797;">View /</small>
                    <small style="color: #444444;">Logs</small>
                </div>

                <div class="card shadow-sm p-4 mt-4">
                    <h5 class="mb-3 fw-bold" style="color: #5CE1E6;">Logs List</h5>
                    
                </div>
            </div>
        </div>
    </main>

    <script>
        function adjustSidebar() {
            let navbar = document.querySelector('.navbar');
            let sidebar = document.getElementById("offcanvasExample");

            if (!navbar || !sidebar) return;

            let navbarHeight = navbar.offsetHeight;

            if (window.innerWidth >= 992) {
                sidebar.style.cssText = `
                    transform: none;
                    visibility: visible !important;
                    position: fixed;
                    top: ${navbarHeight}px;
                    height: calc(100% - ${navbarHeight}px);
                    width: 270px !important;
                `;
            } else {
                sidebar.style.cssText = `
                    width: 270px !important;
                    margin-top: ${navbarHeight}px;
                    position: fixed;
                    height: calc(100% - ${navbarHeight}px);
                    overflow-y: auto;
                `;
            }
        }

        window.addEventListener("load", adjustSidebar);
        window.addEventListener("resize", adjustSidebar);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
