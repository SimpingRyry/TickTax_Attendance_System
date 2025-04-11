<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5Wa2Ro9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Custom Styles --}}
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <title>CCMS Attendance System</title>
</head>

<body style="background-color: #EDF1F7;">

    {{-- Top Navigation --}}
    @include('layouts.top_bar') {{-- Create a partial view: resources/views/partials/top_bar.blade.php --}}

    {{-- Sidebar --}}
    <div class="offcanvas offcanvas-start bg-white text-dark sidebar-nav" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel" style="width: 270px !important;" tabindex="-1">

        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <div class="small fw-bold text-uppercase px-3">CORE</div>
                    </li>

                    <li>
                        <a href="{{ url('index') }}" class="nav-link px-3 active">
                            <img src="{{ asset('images/dashboard_ico.png') }}" alt="Dashboard" width="20" height="20" class="me-2" />
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="my-4">
                        <hr class="border-secondary" />
                    </li>

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
                        <a href="{{ url('registration') }}" class="nav-link px-3">
                            <img src="{{ asset('images/rgistration_ico.png') }}" alt="Registration" width="20" height="20" class="me-2" />
                            <span>Registration</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('events') }}" class="nav-link px-3">
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
                        <a href="#" class="nav-link px-3">
                            <img src="{{ asset('images/logs_ico.png') }}" alt="Logs" width="20" height="20" class="me-2" />
                            <span>Logs</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

    {{-- Main Content --}}
    <main id="main-content" class="px-4">
        <div class="container mt-4 py-4">
            <div class="container-fluid">

                <div class="mb-3">
                    <h2 class="fw-bold">Profile</h2>
                    <small class="text-muted">User / Profile</small>
                </div>

                <div class="row">
                    <!-- Left Column: Profile Card -->
                    <div class="col-md-4">
                        <div class="card text-center shadow p-3">
                            <img src="https://via.placeholder.com/120" class="rounded-circle mx-auto d-block mt-3" width="120" height="120" alt="Profile Icon">
                            <div class="card-body">
                                <h5 class="card-title">Juan Dela Cruz</h5>
                                <p class="text-muted">President</p>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profileModal">View</button>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Statistics -->
                    <div class="col-md-8">
                        <div class="card shadow p-3">
                            <h5 class="fw-bold">Attendance Summary</h5>
                            <p class="text-muted mb-2">Total Fees: <strong>₱ 1,250.00</strong></p>

                            <div class="mb-2">
                                <label>Events Attended</label>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 70%;">14</div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label>Late</label>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 20%;">4</div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label>Absents</label>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" style="width: 10%;">2</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Modal -->
                <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="profileModalLabel">User Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-2">
                                        <label for="profileName" class="form-label">Name</label>
                                        <input type="text" id="profileName" class="form-control" value="Juan Dela Cruz" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="profileEmail" class="form-label">Email</label>
                                        <input type="email" id="profileEmail" class="form-control" value="juan@example.com" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="profileProgram" class="form-label">Program</label>
                                        <input type="text" id="profileProgram" class="form-control" value="BSIT" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="profilePosition" class="form-label">Position</label>
                                        <input type="text" id="profilePosition" class="form-control" value="President" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="profileOrg" class="form-label">Organization</label>
                                        <input type="text" id="profileOrg" class="form-control" value="IT Society" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="profileAge" class="form-label">Age</label>
                                        <input type="number" id="profileAge" class="form-control" value="21" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="profileContact" class="form-label">Contact</label>
                                        <input type="text" id="profileContact" class="form-control" value="09123456789" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="profileAddress" class="form-label">Address</label>
                                        <input type="text" id="profileAddress" class="form-control" value="Daet, Camarines Norte" readonly>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>


    {{-- JavaScript --}}
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