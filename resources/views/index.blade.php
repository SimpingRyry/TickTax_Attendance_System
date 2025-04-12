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

          @if (Auth::user()->role === 'admin')

          <li>
            <a href="#" class="nav-link px-3">
              <img src="{{ asset('images/instructor_ico.png') }}" alt="Instructors" width="20" height="20" class="me-2" />
              <span>Instructors</span>
            </a>
          </li>

          @endif

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
          <h2 class="fw-bold">Dashboard</h2>
          <small class="text-muted">Home / Dashboard</small>
        </div>

        <div class="row">
          <div class="col-lg-8">
            <div class="row mb-3">
              <div class="col-md-4 mb-3">
                <div class="card text-white bg-primary h-100">
                  <div class="card-body">
                    <h5 class="card-title">Total Students</h5>
                    <p class="card-text display-6">1,200</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card text-white bg-success h-100">
                  <div class="card-body">
                    <h5 class="card-title">Registered Students</h5>
                    <p class="card-text display-6">1,000</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card text-white bg-danger h-100">
                  <div class="card-body">
                    <h5 class="card-title">Unregistered Students</h5>
                    <p class="card-text display-6">200</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Student Information</h5>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-bordered table-hover">
                  <thead class="table-light">
                    <tr>
                      <th>#</th>
                      <th>Student Name</th>
                      <th>Course</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Password</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Juan Dela Cruz</td>
                      <td>BSIT</td>
                      <td>juan@example.com</td>
                      <td>juandelacruz</td>
                      <td>••••••••</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Maria Clara</td>
                      <td>BSED</td>
                      <td>maria@example.com</td>
                      <td>mariaclara</td>
                      <td>••••••••</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card mb-3" style="height: 300px;">
              <div class="card-header bg-info text-white">
                <h5 class="mb-0">Upcoming Events</h5>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Seminar - April 15</li>
                  <li class="list-group-item">Midterms - April 20</li>
                  <li class="list-group-item">Enrollment - May 1</li>
                </ul>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Total Accumulated Fines</h5>
              </div>
              <div class="card-body">
                <h3 class="text-danger">₱15,250.00</h3>
                <p class="mb-0 text-muted">Across all students this semester.</p>
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
