<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CCMS Attendance System - One Page</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet" />
  <!-- FullCalendar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"/>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/home_page.css') }}">
</head>
<body>
<!-- Side Panel for Large Screens -->
<div id="orgSidebar" class="org-sidebar d-none d-md-block">
  <h5 class="text-white px-3 pt-3">Organizations</h5>
  <ul class="list-unstyled px-3">
    <li class="accordion-item">
      <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#ccmsDropdown" aria-expanded="false" aria-controls="ccmsDropdown">
        <img src="{{ asset('images/ccms_logo.png') }}" alt="CCMS Logo" height="20" class="me-2"> CCMS Student Government
      </a>
      <ul id="ccmsDropdown" class="collapse list-unstyled">
        <li class="ps-3"><a href="{{ url('orgs/its_page') }}" class="d-flex align-items-center"><img src="{{ asset('images/its_logo.png') }}" alt="ITS Logo" height="20" class="me-2"> ITS</a></li>
        <li class="ps-3"><a href="{{ url('orgs/praxis_page') }}" class="d-flex align-items-center"><img src="{{ asset('images/praxis_logo.png') }}" alt="Praxis Logo" height="20" class="me-2"> Praxis</a></li>
      </ul>
    </li>
  </ul>
</div>

<!-- Navbar -->
<section id="home" class="position-relative">
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#">TickTax</a>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">LOGO DITO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <li class="nav-item dropdown d-block d-md-none">
            <a class="nav-link dropdown-toggle" href="#" id="orgDropdown" role="button" data-bs-toggle="dropdown">
              Organizations
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="orgDropdown">
              <li><a class="dropdown-item" href="#">CCMS Student Government</a></li>
              <li><a class="dropdown-item" href="{{ url('orgs/its_page') }}">ITS</a></li>
              <li><a class="dropdown-item" href="{{ url('orgs/praxis_page') }}">Praxis</a></li>
            </ul>
          </li>
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item"><a class="nav-link mx-lg-2 active" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link mx-lg-2" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link mx-lg-2" href="#events">Events</a></li>
            <li class="nav-item"><a class="nav-link mx-lg-2" href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <a href="{{ route('login') }}" class="login-button">LOGIN</a>
      <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Carousel -->
  <div id="home" class="carousel-container position-relative">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active"><img src="{{ asset('images/carousel_image1.jpg') }}" class="d-block w-100" alt="Slide 1"></div>
        <div class="carousel-item"><img src="{{ asset('images/carousel_image2.jpg') }}" class="d-block w-100" alt="Slide 2"></div>
        <div class="carousel-item"><img src="{{ asset('images/carousel_image3.jpg') }}" class="d-block w-100" alt="Slide 3"></div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

    <div class="overlay-content text-center text-white position-absolute top-50 start-50 translate-middle">
      <div class="logo-container mb-3">
        <img src="{{ asset('images/ccms_logo.png') }}" alt="Logo 1" height="60" class="me-2">
        <img src="{{ asset('images/org_ccms_logo.png') }}" alt="Logo 2" height="60">
      </div>
      <h1 class="fw-bold">College of Computing and Multimedia Studies</h1>
      <h2 class="fw-semibold">Attendance System</h2>
    </div>
  </div>

  <!-- Card Grid -->
  <section class="container py-5">
    <div class="row g-4">
      @for ($i = 1; $i <= 6; $i++)
      <div class="col-md-4">
        <div class="card shadow-lg border-0 p-3">
          <div class="card-body text-center">
            <h5 class="card-title fw-bold">Event {{ $i }}</h5>
            <p class="card-text">Short details about Event {{ $i }}.</p>
          </div>
        </div>
      </div>
      @endfor
    </div>
  </section>
</section>

<!-- About Section -->
<section id="about" class="position-relative">
    <!-- Gradient Background -->
    <div class="w-100" style="height: 20vh;">
        <img src="{{ asset('images/about_nav.png') }}" alt="Full Image" style="width: 100%; height: 100%; object-fit: cover;">
    </div>

    <!-- About Content -->
    <div class="container text-center mt-5 mb-5">
        <!-- Main Card View -->
        <div class="card border-0 p-4 mt-4">
            <div class="row gy-3 gy-md-4 mt-5 mb-5 gy-lg-0 align-items-lg-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <!-- Logo in CardView -->
                    <div class="col-5 d-flex justify-content-end">
                        <div class="card p-3 border-3" style="width: 80%; border-color: #000;">
                            <img src="{{ asset('images/tikatax_logo.png') }}" alt="CCMS Logo" class="img-fluid">
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="col-7 ps-4">
                        <h2 class="mb-3">What is CCMS: Attendance System?</h2>
                        <p class="lead text-muted text-justify">
                            The College of Computing and Multimedia Studies (CCMS) at Camarines Norte State College
                            is revolutionizing attendance tracking through an IoT-driven system. Traditional methods,
                            such as manual logs and signatures, are prone to inaccuracies, time consumption, and
                            attendance fraud. Our system leverages biometric fingerprint authentication for reliable
                            tracking, automates fine imposition for non-compliance, and streamlines event monitoring.
                            By integrating security measures and real-time data processing, this system enhances
                            accountability while reducing administrative workload.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-4 gy-md-0 gx-xxl-5 mt-5">
                <!-- First Feature -->
                <div class="col-12 col-md-6 offset-md-6">
                    <div class="card p-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/fingerpr_ico.jpeg') }}" alt="B" width="40" class="me-3 rounded-circle">
                            <div>
                                <h2 class="h4 mb-3">Biometric Authentication</h2>
                                <p class="text-secondary mb-0 text-justify">
                                    Say goodbye to manual logs! Our system ensures secure and fraud-proof attendance
                                    tracking using fingerprint scanning technology.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Feature -->
                <div class="col-12 col-md-6">
                    <div class="card p-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/realtime_icon.png') }}" alt="R" width="40" class="me-3 rounded-circle">
                            <div>
                                <h2 class="h4 mb-3">Real-Time Monitoring</h2>
                                <p class="text-secondary mb-0 text-justify">
                                    Administrators can track attendance records instantly, ensuring transparency
                                    and efficiency in student and faculty attendance tracking.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Developer Profiles -->
        <div class="card border-0 p-4 mt-5">
            <h2 class="mb-4 text-center">Meet the Developers</h2>
            <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
                <!-- Developer 1 -->
                <div class="col">
                    <div class="card border-0 p-3 d-flex flex-column align-items-center h-100"
                         style="box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3); border-radius: 12px;">
                        <img src="{{ asset('images/yuki_pik.png') }}" alt="Developer 1" class="rounded-circle mx-auto mb-3"
                             style="width: 120px; height: 120px; object-fit: cover;">
                        <h5 class="mb-1">Yuki Golimlim</h5>
                        <p class="text-muted">Lead Developer</p>
                        <p class="text-secondary flex-grow-1 text-wrap" style="min-height: 50px;">
                            Kung ang susi ay key, palambing naman si Yuki
                        </p>
                    </div>
                </div>

                <!-- Developer 2 -->
                <div class="col">
                    <div class="card border-0 p-3 d-flex flex-column align-items-center h-100"
                         style="box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3); border-radius: 12px;">
                        <img src="{{ asset('images/arden_pik.jpg') }}" alt="Developer 2" class="rounded-circle mx-auto mb-3"
                             style="width: 120px; height: 120px; object-fit: cover;">
                        <h5 class="mb-1">Arden Clyde De Ramos</h5>
                        <p class="text-muted">UI/UX Designer</p>
                        <p class="text-secondary flex-grow-1 text-wrap" style="min-height: 50px;">
                            Wala lang, slay lang
                        </p>
                    </div>
                </div>

                <!-- Developer 3 -->
                <div class="col">
                    <div class="card border-0 p-3 d-flex flex-column align-items-center h-100"
                         style="box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3); border-radius: 12px;">
                        <img src="{{ asset('images/ver_pik.png') }}" alt="Developer 3" class="rounded-circle mx-auto mb-3"
                             style="width: 120px; height: 120px; object-fit: cover;">
                        <h5 class="mb-1">Ver Andre Borje</h5>
                        <p class="text-muted">Software Engineer</p>
                        <p class="text-secondary flex-grow-1 text-wrap" style="min-height: 50px;">
                            Si Foreman
                        </p>
                    </div>
                </div>

                <!-- Developer 4 -->
                <div class="col">
                    <div class="card border-0 p-3 d-flex flex-column align-items-center h-100"
                         style="box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3); border-radius: 12px;">
                        <img src="{{ asset('images/papib_pik.png') }}" alt="Developer 4" class="rounded-circle mx-auto mb-3"
                             style="width: 120px; height: 120px; object-fit: cover;">
                        <h5 class="mb-1">Mark Joseph Beltran</h5>
                        <p class="text-muted">Project Manager</p>
                        <p class="text-secondary flex-grow-1 text-wrap" style="min-height: 50px;">
                            Shy type na BBF
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="events" class="bg-light mt-5">
  <div class="container mt-5">
    <h2 class="text-center mb-4 mt-5">Upcoming Events</h2>
    <div id="calendar"></div>
  </div>

</section>

<!-- Contact Section -->
<section id="contact" class="bg-white text-dark mt-5">
  <div class="container text-center">
    <h2 class="mb-4">Contact Us</h2>
    <p>Email: info@ticktax-ccms.com</p>
    <p>Facebook: fb.com/ticktaxccms</p>
    <p>Phone: (123) 456-7890</p>
  </div>
</section>
<footer class="bg-dark text-white text-center py-4">
  <div class="container">
    <p class="mb-0">© 2025 CCMS Attendance System. All Rights Reserved.</p>
    <p class="mb-0">Developed by Yuki Golimlim</p>
    <div class="mt-2">
      <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
      <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
      <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script>
  $(document).ready(function () {
    $('#calendar').fullCalendar({
      defaultView: 'month',
      editable: false,
      events: [
        {
          title: 'Bday ni ver',
          start: '2025-04-06'
        },
        {
          title: 'Sana walang pasok',
          start: '2025-04-15',
          end: '2025-04-16'
        },
        {
          title: 'Sana walang pasok',
          start: '2025-04-16',
          end: '2025-04-16'
        }
      ]
    });
  });
  window.onscroll = function() {changeNavbarColorOnScroll()};

function changeNavbarColorOnScroll() {
  var navbar = document.getElementById("navbar");
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
}
// Set active class to the navbar link based on the scroll position
document.addEventListener("DOMContentLoaded", function() {
  const links = document.querySelectorAll('.nav-link');
  const sections = document.querySelectorAll('section');

  window.addEventListener('scroll', function() {
    let current = "";

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      if (pageYOffset >= sectionTop - sectionHeight / 3) {
        current = section.getAttribute("id");
      }
    });

    links.forEach(link => {
      link.classList.remove("active");
      if (link.getAttribute("href").includes(current)) {
        link.classList.add("active");
      }
    });
  });
});
  window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>

<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
