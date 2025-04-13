<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Memo</title>
    <!-- Bootstrap CSS (online) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 30px;
        }

        .logo {
            width: 100px;
            height: auto;
        }

        .org-details {
            line-height: 1.4;
        }

        .contact-info {
            text-align: right;
            font-size: 10px;
            margin-top: -40px;
        }

        .motto {
            text-align: center;
            font-weight: bold;
            font-size: 11px;
            margin: 10px 0;
        }

        .vision-mission {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 10px;
            font-style: italic;
            font-size: 10px;
        }

        .vision-mission .box {
            width: 50%;
        }

        .content {
            margin-top: 30px;
        }

        .content p {
            margin: 6px 0;
        }

        ul {
            margin-top: 5px;
            margin-bottom: 10px;
        }

        hr {
            border: none;
            border-top: 1px solid #000;
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <!-- Header with logo and org info -->
    <div class="container">
        <div class="row align-items-start">
            <div class="col-auto">
                <img src="{{ $logo }}" alt="Org Logo" class="logo">
            </div>
            <div class="col org-details">
                <strong>CAMARINES NORTE STATE COLLEGE</strong><br>
                COLLEGE OF COMPUTING AND MULTIMEDIA STUDIES<br>
                <strong>STUDENT GOVERNMENT</strong><br>
                F. PIMENTEL AVENUE, BARANGAY II, DAET, CAMARINES NORTE - 4600, PHILIPPINES
            </div>
        </div>

        <div class="contact-info">
            www.facebook.com/ics.csc<br>
            ics_csc@cnsc.edu.ph<br>
            (+63) 093-705-6129
        </div>

        <!-- Motto -->
        <div class="motto">LEAD, SERVE, EXCEL</div>

        <!-- Vision & Mission -->
        <div class="vision-mission">
            <div class="box">
                <strong>Vision</strong><br>
                To empower generation of transformative leaders who will shape a more just, equitable, and sustainable world.
            </div>
            <div class="box">
                <strong>Mission</strong><br>
                To foster a democratic and self-governing student body that empowers students to unite, protect their rights and interests, fulfill their duties and responsibilities, and actively engage in strengthening good governance to advance the institution’s pursuit of excellence.
            </div>
        </div>

        <!-- Memo content -->
        <div class="text-center mt-4">
            <strong>OFFICE OF THE COLLEGE STUDENT GOVERNMENT PRESIDENT</strong><br>
            Memorandum No. 12<br>
            Series of 2025<br><br>
        </div>

        <div class="content">
            <p><strong>To/For:</strong> {{ $to_for }}</p>
            <p><strong>From:</strong> REIZO BHIENN CATAROJA<br>
            President, CCMS – Student Government</p>

            <p><strong>Subject:</strong> Scheduled Registration and Biometric Data Collection</p>
            <p><strong>Venue:</strong> {{ $venue }}</p>
            <p><strong>Date:</strong> {{ $date }}</p>
            <p><strong>Time:</strong> {{ $start_time }} to {{ $end_time }}</p>

            <hr>

            <p>Greetings!</p>

            <p>
                In compliance with the upcoming academic term and as part of the modernization of student services, 
                all CCMS students are required to participate in the scheduled Registration and Biometric Data 
                Collection from {{ $date }} at {{ $venue }}. This initiative is part of the student profiling and security 
                enhancement protocols being implemented by the College in partnership with the CNSC Information 
                Systems Office.
            </p>

            <p>This activity involves the following:</p>
            <ul>
                <li>Verification and update of personal student information</li>
                <li>Capture of digital photograph</li>
                <li>Collection of fingerprint data for biometric verification</li>
                <li>Issuance of new digital student ID</li>
            </ul>

            <p>Students are advised to bring one (1) valid government ID, their student ID (if applicable), and 
            ensure they are properly groomed for photo capture. All data collected will be treated in accordance 
            with the Data Privacy Act of 2012 and the institution’s data management policy.</p>

            <p>Your full cooperation is expected to ensure the smooth facilitation of this registration. Should you 
            have further concerns, feel free to contact the CCMS-SG Office.</p>

            <p>Thank you for your prompt attention and participation.</p>

            <br><br>
            <p><strong>Noted:</strong></p>
            <p>SGD<br>MARC LESTER ACUNIN<br>Adviser, CCMS – Student Government</p>
        </div>
    </div>

</body>
</html>
