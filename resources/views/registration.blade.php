<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCMS Attendance System</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <style>
        .table-dark th {
            background-color: #333;
            color: white;
        }

        .table td, .table th {
            vertical-align: middle;
        }
    </style>
</head>

<body style="background-color: #EDF1F7;">

    {{-- Top Navigation Bar --}}
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
                        <a href="#" class="nav-link px-3 active">
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
                        <a href="#" class="nav-link px-3">
                            <img src="{{ asset('images/logs_ico.png') }}" alt="Logs" width="20" height="20" class="me-2" />
                            <span>Logs</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Main content -->
    <main id="main-content" class="px-4">
        <div class="container mt-4 py-4">
            <div class="container-fluid">
                <!-- Heading -->
                <div class="mb-3">
                    <h2 class="fw-bold" style="color: #5CE1E6;">Register</h2>
                    <small style="color: #989797;">Manage /</small>
                    <small style="color: #444444;">Registration</small>
                </div>

                <!-- Main Card -->
                <div class="card shadow-sm p-4">
                    <div class="row g-3">
                        @foreach (['Course', 'Block', 'Year Level', 'Status'] as $label)
                            <div class="col-md">
                                <div class="card h-100 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">{{ $label }}</h6>
                                        @if ($label == 'Course')
                                            <input type="text" class="form-control" placeholder="Enter Course">
                                        @else
                                            <select class="form-select">
                                                <option selected disabled>Select {{ $label }}</option>
                                                @if ($label == 'Block')
                                                    @foreach (['A', 'B', 'C', 'D'] as $option)
                                                        <option>{{ $option }}</option>
                                                    @endforeach
                                                @elseif ($label == 'Year Level')
                                                    @foreach (range(1, 4) as $year)
                                                        <option>{{ $year }}</option>
                                                    @endforeach
                                                @else
                                                    <option>Enrolled</option>
                                                    <option>Unenrolled</option>
                                                @endif
                                            </select>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-auto d-flex align-items-center">
                            <button class="btn btn-success">Search</button>
                        </div>
                    </div>

                    <!-- CSV Upload -->
                    <div class="row mb-4 mt-4">
                        <div class="col-md">
                            <form id="csvForm" action="{{ route('import') }}" method="post" enctype="multipart/form-data"
                                class="d-flex flex-column align-items-start" style="gap: 8px; max-width: 300px;"
                                onsubmit="return validateCSV();">
                                @csrf
                                <div class="form-text text-start text-muted">
                                    Upload a .csv file
                                </div>
                                <div class="input-group input-group-sm">
                                    <input type="file" class="form-control" name="importFile" accept=".csv" required>
                                    <button class="btn btn-sm btn-primary" type="submit">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    Student List
                    <div class="card shadow-sm p-4 mt-2">
                        <h5 class="mb-3 fw-bold" style="color: #5CE1E6;">Student List</h5>

                        <!-- Displaying students list -->
                        @if($students->isEmpty())
                            <p>No students found.</p>
                        @else
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                        <th>Units</th>
                                        <th>Section</th>
                                        <th>Contact Number</th>
                                        <th>Birth Date</th>
                                        <th>Address</th>

                                        <!-- Add other columns as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{ $student->no }}</td>
                                            <td>{{ $student->id_number }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->gender }}</td>
                                            <td>{{ $student->course }}</td>
                                            <td>{{ $student->year }}</td>
                                            <td>{{ $student->units }}</td>
                                            <td>{{ $student->section }}</td>
                                            <td>{{ $student->contact_no }}</td>
                                            <td>{{ $student->birth_date }}</td>
                                            <td>{{ $student->address }}</td>

                                            <!-- Add other columns as needed -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script>
        function adjustSidebar() {
            const navbar = document.querySelector('.navbar');
            const sidebar = document.getElementById("offcanvasExample");

            if (!navbar || !sidebar) return;

            const navbarHeight = navbar.offsetHeight;

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

        function validateCSV() {
            const fileInput = document.querySelector('input[type="file"]');
            const file = fileInput.files[0];

            if (!file) {
                redirectWithError("CSV file is required");
                return false;
            }

            const fileName = file.name.toLowerCase();
            if (!fileName.endsWith('.csv')) {
                redirectWithError("Only CSV files are allowed");
                return false;
            }

            return true;
        }

        function redirectWithError(message) {
            const encodedMessage = encodeURIComponent(message);
            const baseUrl = window.location.origin + window.location.pathname;
            window.location.href = `${baseUrl}?error=${encodedMessage}`;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
