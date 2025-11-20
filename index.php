<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stanford Medical & Diagnostic Clinic, Inc.</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<!-- NAVBAR --> 
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#home">
            <img src="assets/img/stanford logo.jpg" width="40" class="me-2">
            Stanford Medical & Diagnostic Clinic, Inc.
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#schedule">Schedule</a></li>
                <li class="nav-item"><a class="nav-link" href="#career">Career</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#announcements">Announcements</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<section id="home" class="hero-section d-flex align-items-center"
         style="position: relative; height: 100vh; overflow: hidden;">

    <!-- Background Image -->
    <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('assets/img/coverphoto.png') center center / cover no-repeat;
        z-index: 1;
    "></div>

    <!-- Dark Overlay -->
    <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.7); /* Light overlay fits your theme */
        z-index: 2;
    "></div>

    <!-- Text Content -->
    <div class="container text-center" style="z-index: 3;">
        <h1 class="display-4 fw-bold text-dark position-relative"
            style="font-size: 3rem; padding-bottom: 8px; display: inline-block;">
            Stanford Medical & Diagnostic Clinic, Inc.
            <span style="
                position:absolute;
                left:0;
                bottom:0;
                width:100%;
                height:6px;
                background:#008cff;
                border-radius:3px;
            "></span>
        </h1>


        <p style="font-style: italic; font-size: 1.3rem;">
            “Quality service at a reasonable cost”
        </p>

        <a href="#services" class="btn btn-warning btn-lg mt-4">
            View Services
        </a>
    </div>
</section>
<!-- ABOUT SECTION -->
<section id="about" class="py-5 bg-light" style="scroll-margin-top: 30px;">
    <div class="container">
        <div class="row align-items-center">

            <!-- Text Column -->
            <div class="col-md-6">

                <h2 class="fw-bold mb-4">About Us</h2>

                <p class="fs-5">
                    Stanford Medical and Diagnostic Clinic, Inc. (also known as Stanford Laboratory)
                    opened for business on October 1, 1991 at the 3rd Floor of the Long Se Building,
                    Osmeña Blvd., Capitol Site, Cebu City.
                </p>

                <p class="fs-5">
                    To better serve its customers, Stanford Laboratory moved to its new and more
                    accessible location at the Ground Floor of Avon Plaza, Osmeña Blvd., Capitol Site,
                    Cebu City on June 9, 2015.
                </p>

                <p class="fs-5">
                    The laboratory is equipped with fully automated machines and uses modern systems
                    such as the Laboratory Information System (LIS) and Specimen Barcoding to ensure
                    fast, accurate, and reliable diagnostic results.
                </p>

                <p class="fs-5">
                    Stanford Laboratory is licensed and accredited by the Department of Health to perform
                    hematology, clinical microscopy, clinical chemistry, serology, immunology, ECG,
                    x-ray, ultrasound procedures, and drug testing—both on-site and via mobile clinics.
                </p>


            </div>

            <!-- Logo Column -->
            <div class="col-md-6 text-center">

                <!-- Slider Wrapper -->
                <div class="iso-slider-wrapper mx-auto">
                    <img src="assets/img/stanford logo.jpg" class="iso-slide active" alt="Main Logo">
                    <img src="assets/img/iso.jpg" class="iso-slide" alt="ISO 9001">
                </div>

            </div>



        </div>
    </div>
        <div class="container">

        <div class="row g-4">

            <!-- Mission -->
            <div class="col-md-4">
                <div class="info-box mission-box p-4 text-white rounded-3 h-100 position-relative" data-number="1">

                    <h4 class="fw-bold">Mission</h4>
                    <p class="mb-0">
                        To provide quality and cost effective diagnostic and medical services 
                        to people from all walks of life.
                    </p>
                </div>
            </div>

            <!-- Core Values -->
            <div class="col-md-4">
                <div class="info-box core-box p-4 text-white rounded-3 h-100 position-relative" data-number="2">

                    <h4 class="fw-bold">Our Core Values</h4>
                    <p class="mb-0">
                        Sincerity, Modesty, Dedication, Compassion and Integrity
                    </p>
                </div>
            </div>

            <!-- Slogan -->
            <div class="col-md-4">
                <div class="info-box slogan-box p-4 text-white rounded-3 h-100 position-relative" data-number="3">

                    <h4 class="fw-bold">Our Slogan</h4>
                    <p class="mb-0">
                        "Quality service at reasonable cost"
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>



<!-- SERVICES SECTION -->
<section id="services" class="py-5 bg-light" style="scroll-margin-top: 30px;">
    <div class="container">

        <h2 class="text-center mb-5 fw-bold text-primary">Our Laboratory Services</h2>

        <div class="row g-4">

            <!-- Main Services -->
<div class="col-12">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white fw-bold">
            Laboratory Services
        </div>
        <div class="card-body">
            <div class="row">

                <!-- Column 1 -->
                <div class="col-md-4">
                    <ul class="list-unstyled services-list">
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Blood Chemistry</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Clinical Microscopy</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Electrolytes</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Endocrinology</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Hematology</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Histology</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Immunology</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Serology</li>
                    </ul>
                </div>

                <!-- Column 2 -->
                <div class="col-md-4">
                    <ul class="list-unstyled services-list">
                        
                        
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Drug Test (2 to 7 Panels)</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Cardiac Panel</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>X-ray (Conventional & Digital)</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Electrocardiogram (ECG)</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Diabetic Panel</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Executive Panels A to C</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>General Medical Panel</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Hepatitis Panel</li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4">
                    <ul class="list-unstyled services-list">
                        
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Hypertensive Work Up</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Lipid Profile</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Liver Profile</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Renal Panel</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Pre-Operative Panel</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Thyroid Panels A & B</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Ultrasound Procedures</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Mobile Clinic and Home Services</li>
                        
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>


            <!-- Other Services (Tie-Ups) -->
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-secondary text-white fw-bold">
                        Other Services Offered Through Tie-Ups
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-4">
                                <ul class="list-unstyled services-list">
                                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Visual Acuity/Stress Tests</li>
                                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Audiometry Test</li>
                                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Dental Check-up and Oral Prophylaxis</li>
                                    
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <ul class="list-unstyled services-list">
                                    
                                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Vaccination</li>
                                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Psychological Testing</li>
                                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Echo Scan</li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <ul class="list-unstyled services-list">
                                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>2-D Echo (with or without Doppler)</li>
                                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Treadmill Stress Test</li>
                                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>24-Hour Holter Monitoring</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

                    <!-- Customer Service Systems (2 Columns) -->
                    <div class="col-12">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-success text-white fw-bold">
                                Customer Service Systems
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <!-- Column 1 -->
                                    <div class="col-md-6">
                                        <ul class="list-unstyled services-list">
                                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Two (2) mobile clinic vans</li>
                                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Accept major credit cards</li>
                                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Accredited by various life insurance companies and HMOs</li>
                                        </ul>
                                    </div>

                                    <!-- Column 2 -->
                                    <div class="col-md-6">
                                        <ul class="list-unstyled services-list">
                                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Accepts send-out examinations from other laboratories</li>
                                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Fully automated laboratory machines</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


        </div>

    </div>
</section>



<!-- SCHEDULE SECTION -->
<section id="schedule" class="py-5 bg-light" style="scroll-margin-top: 30px;">
    <div class="container">

        <h2 class="text-center mb-5 fw-bold">Clinic & Doctor Schedules</h2>

        <div class="row g-4">

            <!-- Regular Schedule -->
            <div class="col-md-6">
                <div class="p-4 bg-white shadow-sm rounded-3 h-100">
                    <h4 class="fw-bold mb-3"><i class="bi bi-clock-fill text-primary me-2"></i>Regular Schedule</h4>

                    <h6 class="fw-semibold">Mondays thru Friday</h6>
                    <p class="mb-1">
                        <i class="bi bi-caret-right-fill text-primary me-2"></i>
                        6:00 a.m. – 6:00 p.m.
                        <span class="text-muted">(Cut-off: 5:00 p.m.)</span>
                    </p>

                    <h6 class="fw-semibold mt-3">Saturdays</h6>
                    <p class="mb-1">
                        <i class="bi bi-caret-right-fill text-primary me-2"></i>
                        6:00 a.m. – 5:00 p.m.
                        <span class="text-muted">(Cut-off: 4:00 p.m.)</span>
                    </p>

                    <h6 class="fw-semibold mt-3">Holidays</h6>
                    <p class="mb-0">
                        <i class="bi bi-caret-right-fill text-primary me-2"></i>
                        6:00 a.m. – 4:00 p.m.
                        <span class="text-muted">(Cut-off: 3:00 p.m.)</span>
                    </p>
                </div>
            </div>

            <!-- Doctor Schedule -->
            <div class="col-md-6">
                <div class="p-4 bg-white shadow-sm rounded-3 h-100">
                    <h4 class="fw-bold mb-3"><i class="bi bi-person-badge-fill text-primary me-2"></i>Doctor Schedule</h4>

                    <h6 class="fw-semibold">Mondays thru Saturdays</h6>
                    <p class="mb-1">
                        <i class="bi bi-caret-right-fill text-primary me-2"></i>
                        8:00 a.m. – 12:00 noon
                    </p>
                    <p class="mb-3">
                        <i class="bi bi-caret-right-fill text-primary me-2"></i>
                        1:00 p.m. – 5:00 p.m.
                    </p>

                    <h6 class="fw-semibold">Holidays</h6>
                    <p class="mb-1">
                        <i class="bi bi-caret-right-fill text-primary me-2"></i>
                        8:00 a.m. – 12:00 noon
                    </p>
                    <p class="mb-0">
                        <i class="bi bi-caret-right-fill text-primary me-2"></i>
                        1:00 p.m. – 4:00 p.m.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>






<!-- CAREER SECTION -->
<section id="career" class="py-5 bg-white" style="scroll-margin-top: 30px;">
    <div class="container">

        <h2 class="text-center fw-bold mb-4 text-primary">Careers at Stanford Medical</h2>
        <p class="text-center mb-5 fs-5">
            Be part of a growing medical team committed to quality service and patient care.
        </p>

        <div class="row g-4">

            <!-- Job Opening -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm bg-light rounded-3 h-100">
                    <h4 class="fw-bold mb-3">
                        <i class="bi bi-briefcase-fill text-primary me-2"></i>We Are Hiring
                    </h4>

                    <div class="accordion" id="jobAccordion">

                        <!-- Medical Technologist -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingJob1">
                                <button class="accordion-button collapsed fw-bold"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseJob1"
                                        aria-expanded="false" aria-controls="collapseJob1">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Medical Technologist
                                </button>
                            </h2>
                            <div id="collapseJob1" class="accordion-collapse collapse"
                                 aria-labelledby="headingJob1" data-bs-parent="#jobAccordion">
                                <div class="accordion-body">
                                    <p><strong>Qualifications:</strong></p>
                                    <ul>
                                        <li>Licensed Medical Technologist (PRC)</li>
                                        <li>Preferably with experience in clinical laboratory operations</li>
                                        <li>Knowledge in Hematology, Chemistry, Microbiology</li>
                                        <li>Willing to work flexible hours</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Radiologic Technologist -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingJob2">
                                <button class="accordion-button collapsed fw-bold"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseJob2"
                                        aria-expanded="false" aria-controls="collapseJob2">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Radiologic Technologist
                                </button>
                            </h2>
                            <div id="collapseJob2" class="accordion-collapse collapse"
                                 aria-labelledby="headingJob2" data-bs-parent="#jobAccordion">
                                <div class="accordion-body">
                                    <p><strong>Qualifications:</strong></p>
                                    <ul>
                                        <li>Licensed Radiologic Technologist (PRC)</li>
                                        <li>Experience in X-ray and imaging procedures</li>
                                        <li>Knowledge in Digital & Conventional X-ray</li>
                                        <li>Good patient handling skills</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Registered Nurse -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingJob3">
                                <button class="accordion-button collapsed fw-bold"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseJob3"
                                        aria-expanded="false" aria-controls="collapseJob3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Registered Nurse
                                </button>
                            </h2>
                            <div id="collapseJob3" class="accordion-collapse collapse"
                                 aria-labelledby="headingJob3" data-bs-parent="#jobAccordion">
                                <div class="accordion-body">
                                    <p><strong>Qualifications:</strong></p>
                                    <ul>
                                        <li>Licensed RN (PRC)</li>
                                        <li>BLS/ACLS training is an advantage</li>
                                        <li>Preferably with clinic or hospital experience</li>
                                        <li>Good communication and patient care skills</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Clinic Staff -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingJob4">
                                <button class="accordion-button collapsed fw-bold"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseJob4"
                                        aria-expanded="false" aria-controls="collapseJob4">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Clinic Staff / Receptionist
                                </button>
                            </h2>
                            <div id="collapseJob4" class="accordion-collapse collapse"
                                 aria-labelledby="headingJob4" data-bs-parent="#jobAccordion">
                                <div class="accordion-body">
                                    <p><strong>Qualifications:</strong></p>
                                    <ul>
                                        <li>Good communication skills</li>
                                        <li>Customer service experience</li>
                                        <li>Basic computer skills (MS Office)</li>
                                        <li>Clinic or office reception experience is a plus</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div><!-- end accordion -->

                </div>
            </div>

            <!-- Application Form -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm bg-light rounded-3 h-100">
                    <h4 class="fw-bold mb-3">
                        <i class="bi bi-envelope-fill text-primary me-2"></i>Submit Application
                    </h4>

                    <form action="send_career.php" method="POST">
                        <input type="text" name="fullname" class="form-control mb-3" placeholder="Full Name" required>
                        <input type="email" name="email" class="form-control mb-3" placeholder="Email Address" required>
                        <input type="text" name="position" class="form-control mb-3" placeholder="Position Applying For" required>
                        <textarea name="message" class="form-control mb-3" rows="4" placeholder="Message" required></textarea>
                        <button class="btn btn-primary w-100">Submit Application</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section id="testimonials" class="py-5 bg-light" style="scroll-margin-top: 70px;">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Patient Testimonials</h2>

        <!-- === ROW 1 === -->
        <div class="row mb-4">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <p class="card-text">"Very accommodating staff and fast service. Highly recommended!"</p>
                        <h6 class="fw-bold text-primary mt-3">— Maria L.</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <p class="card-text">"Clean clinic, friendly nurses, and smooth processing of results."</p>
                        <h6 class="fw-bold text-primary mt-3">— John P.</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <p class="card-text">"Fast and reliable laboratory services. Will definitely return."</p>
                        <h6 class="fw-bold text-primary mt-3">— Christine A.</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- === ROW 2 === -->
        <div class="row mb-4">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <p class="card-text">"X-ray and ultrasound were done quickly. Doctors are very professional."</p>
                        <h6 class="fw-bold text-primary mt-3">— Mark D.</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <p class="card-text">"Affordable medical services compared to other clinics."</p>
                        <h6 class="fw-bold text-primary mt-3">— Anna K.</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <p class="card-text">"The staff assisted me from start to finish. Smooth process!"</p>
                        <h6 class="fw-bold text-primary mt-3">— James R.</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- === ROW 3 === -->
        <div class="row mb-4">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <p class="card-text">"Clinic is well-maintained and sanitized. Felt safe throughout my visit."</p>
                        <h6 class="fw-bold text-primary mt-3">— Elaine N.</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <p class="card-text">"Fast release of lab results. Very convenient."</p>
                        <h6 class="fw-bold text-primary mt-3">— Carlo G.</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <p class="card-text">"Doctors are kind and take time to explain everything."</p>
                        <h6 class="fw-bold text-primary mt-3">— Sophia T.</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ANNOUNCEMENTS SECTION -->
<section id="announcements" class="py-5 bg-light" style="scroll-margin-top: 70px;">
    <div class="container">

        <h2 class="fw-bold text-center text-primary mb-4">Announcements</h2>

        <div class="p-4 bg-white shadow-sm rounded-3">

            <h5 class="fw-bold">
                <i class="bi bi-megaphone-fill text-warning me-2"></i>
                Latest Updates
            </h5>

            <ul class="mt-3 fs-5">
                <li>✔ New ISO 9001:2015 Certification Achieved</li>
                <li>✔ Holiday Operating Hours Updated</li>
                <li>✔ New Laboratory Equipment Now Operational</li>
                <li>✔ Promo Packages Available for Executive Check-up</li>
            </ul>
            <h2 class="fw-bold mb-3">We Are Now ISO Certified</h2>
        <p class="fs-5 mb-4" class="container text-center">
            Stanford Medical & Diagnostic Clinic, Inc. is proudly Certified with
            <span class="fw-bold text-warning">𝐈𝐒𝐎 𝟗𝟎𝟎𝟏:𝟐𝟎𝟏𝟓</span>, ensuring world-class quality
            and reliability of all laboratory services.
        </p>
        <img src="assets/img/iso.jpg" width="120" class="mb-3">
        </div>
    </div>

</section>


<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row justify-content-center">

            <!-- Contact Details -->
            <div class="col-md-6">
                <div class="p-4 bg-white shadow rounded">
                    <h4 class="mb-3">Stanford Medical and Diagnostic Clinic, Inc.</h4>

                    <p class="mb-1"><strong>Address:</strong></p>
                    <p>Ground Floor Avon Plaza,<br>
                    Osmeña Blvd., Capitol Site,<br>
                    Cebu City</p>

                    <p class="mb-1"><strong>Telephone:</strong></p>
                    <p>(032) 253-2029<br>
                    (032) 254-7851</p>

                    <p class="mb-1"><strong>Email:</strong></p>
                    <p><a href="mailto:info@stanford.com.ph">info@stanford.com.ph</a></p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="p-4 bg-white shadow rounded">
                    <h4 class="mb-3">Send Us a Message</h4>
                    <form action="send_message.php" method="POST">

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Send Message</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- FOOTER -->
<footer class="bg-primary text-light text-center py-3">
    <p class="mb-0">&copy; <?= date("Y"); ?> Stanford Medical & Diagnostic Clinic, Inc.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>
</html>
