<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <!-- Add necessary CSS files here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5Wa2Ro9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tesseract.js@4.0.2/dist/tesseract.min.js"></script>



    <!-- Add any custom styles here -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/document_scroll.css') }}">

</head>
<body>

    <!------------------------------------------------------ NAVBAR -------------------------------------------------------->
    @include('layouts.top_bar')

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start bg-white text-dark sidebar-nav" id="offcanvasExample" tabindex="-1" style="width: 270px !important; margin-top: 60px;">
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
                        <a href="#" class="nav-link px-3 ">
                            <img src="{{ asset('images/rgistration_ico.png') }}" alt="Registration" width="20" height="20" class="me-2" />
                            <span>Registration</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3 active">
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
    <main id="main-content" class="px-4">
        <div class="container mt-4 py-4">
            <div class="container-fluid">
                <!-- Top Heading -->
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="fw-bold" style="color: #5CE1E6;">Events</h2>
                        <small style="color: #989797;">Announcement /</small>
                        <small style="color: #444444;">Events</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="vr me-3" style="height: 40px;"></div>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addEventModal">
                            Add Event <span class="ms-2">+</span>
                        </button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="addEventModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addEventModalLabel">Add New Event</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="mb-3">
                                <label for="memoImage" class="form-label">Upload Memo Image</label>
                                <input class="form-control" type="file" id="memoImage" accept="image/*">
                            </div>
                            <div class="mb-3 text-end">
                                <button id="extractBtn" class="btn btn-primary">Extract Text</button>
                            </div>

                            <!-- OCR Loading Spinner -->
                            <div id="loadingSpinner" class="text-center d-none">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Processing...</span>
                                </div>
                                <p class="mt-2">Extracting text from image...</p>
                            </div>

                            <!-- Modal to Display Extracted Info -->
                            <div class="modal fade" id="extractedInfoModal" tabindex="-1" aria-labelledby="extractedInfoLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="extractedInfoLabel">Extracted Memo Information</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-2">
                                                    <label class="form-label">Memorandum No.</label>
                                                    <input type="text" class="form-control" id="memoNo" readonly>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">Series</label>
                                                    <input type="text" class="form-control" id="series" readonly>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">To/For:</label>
                                                    <input type="text" class="form-control" id="toFor" readonly>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">From:</label>
                                                    <input type="text" class="form-control" id="from" readonly>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">Subject:</label>
                                                    <input type="text" class="form-control" id="subject" readonly>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">Venue:</label>
                                                    <input type="text" class="form-control" id="venue" readonly>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">Date:</label>
                                                    <input type="text" class="form-control" id="date" readonly>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FullCalendar Display -->
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card shadow">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Event Calendar</h5>
                            </div>
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Add necessary JavaScript files here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tesseract.js@5/dist/tesseract.min.js"></script>

  

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

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                height: 600,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek'
                }
            });
            calendar.render();

            // Disable past dates
            const today = new Date().toISOString().split('T')[0];
            document.getElementById("eventDate").setAttribute('min', today);
        });
    </script>

<script>
document.getElementById('extractBtn').addEventListener('click', function () {
    const imageInput = document.getElementById('memoImage');
    const file = imageInput.files[0];

    if (!file) {
        alert('Please upload an image first.');
        return;
    }

    // Show loading
    document.getElementById('loadingSpinner').classList.remove('d-none');

    Tesseract.recognize(
        file,
        'eng',
        {
            logger: m => console.log(m)
        }
    ).then(({ data: { text } }) => {
        console.log('Extracted Text:', text);

        // Hide loading spinner
        document.getElementById('loadingSpinner').classList.add('d-none');

        // Extract fields with regex
        const memoNo = text.match(/Memorandum\s*[:\-]\s*(.+)/i);
        const series = text.match(/Series\s*[:\-]\s*(.+)/i);
        const toFor = text.match(/To\/For\s*[:\-]\s*(.+)/i);
        const from = text.match(/From\s*[:\-]\s*(.+)/i);
        const subject = text.match(/Subject\s*[:\-]\s*(.+)/i);
        const venue = text.match(/Venue\s*[:\-]\s*(.+)/i);
        const date = text.match(/Date\s*[:\-]\s*(.+)/i);

        alert(memoNo)

        // Populate form fields
        document.getElementById('memoNo').value = memoNo ? memoNo[1].trim() : '';
        document.getElementById('series').value = series ? series[1].trim() : '';
        document.getElementById('toFor').value = toFor ? toFor[1].trim() : '';
        document.getElementById('from').value = from ? from[1].trim() : '';
        document.getElementById('subject').value = subject ? subject[1].trim() : '';
        document.getElementById('venue').value = venue ? venue[1].trim() : '';
        document.getElementById('date').value = date ? date[1].trim() : '';

        // Show the extracted info modal
        const extractedModal = new bootstrap.Modal(document.getElementById('extractedInfoModal'));
        extractedModal.show();

    }).catch(error => {
        console.error(error);
        alert('Failed to extract text. Make sure the image is clear.');
        document.getElementById('loadingSpinner').classList.add('d-none');
    });
});
</script>

</body>
</html>
