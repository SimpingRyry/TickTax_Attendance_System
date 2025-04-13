<!DOCTYPE html>
<html>
<head>
    <title>Generate Memo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <div class="text-center">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#memoModal">Generate Memo</button>
    </div>

    <!-- Input Modal -->
    <div class="modal fade" id="memoModal" tabindex="-1" aria-labelledby="memoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="memoForm" method="POST" action="{{ route('generate.memo.pdf') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="memoModalLabel">Enter Memo Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <label>To/For:</label>
                            <input type="text" name="to_for" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Venue:</label>
                            <input type="text" name="venue" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Date:</label>
                            <input type="text" name="date" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Start Time:</label>
                            <input type="time" name="start_time" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>End Time:</label>
                            <input type="time" name="end_time" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Confirm</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">
                <h5 class="modal-title mb-3">Success!</h5>
                <p>Your memo PDF has been generated.</p>
                <a id="viewPdfBtn" href="#" class="btn btn-primary mb-2" target="_blank">View PDF</a>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
</body>
</html>
