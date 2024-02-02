<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Aditya Ravat - Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('/assets') }}/img/favicon.png" rel="icon">
    <link href="{{ url('/assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/css/style.css" rel="stylesheet">
</head>

<body class="text-capitalize">
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    @include('header')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Aditya Ravat</h1>
            <p>I'm <span class="typed" data-typed-items="Web Developer, Freelancer, Photographer, Designer"></span></p>
            <div class="social-links">
                <a href="https://twitter.com/aditya_ravat28" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/ravat.aditya" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/_.aadiiii____" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/aditya-ravat-84b733252" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 pt-4 pt-lg-0 content">
                        <h3>Web Developer.</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>28 January
                                            2004 </span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>99040
                                            21454</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Rajkot,
                                            Gujarat</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                @php
                                  $from = new DateTime('2004-01-28');
                                  $to   = new DateTime('today');
                                @endphp
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$from->diff($to)->y}}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor of
                                            Engineering</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>aditya.ravat.5496@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript - JQUERY <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">API <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Laravel <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Vue - js <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>To seek a challenging position in a progressive company with my experience and contribution to
                        the company's growth. Dedicated Back-end Developer with experience in achieving tangible results
                        and cross team collaboration. Proactive and excited to partner with like-minded individuals to
                        achieve goals.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Aditya Ravat</h4>
                            <p><em>Backend developer with 1+ year of experience in developing and maintaining
                                    high-performance systems. </em></p>
                            <ul>
                                <li>Rajkot, Gujarat. 360004</li>
                                <li>9904021454</li>
                                <li>aditya.ravat.5496@gmail.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Bachelor of Engineering In Information Technology</h4>
                            <h5>2022 - 2025</h5>
                            <p><em>B. H. Gardi College of Engineering And Technology , Rajkot, Gujarat.</em></p>
                        </div>
                        <div class="resume-item">
                            <h4>Diploma In Information Technology</h4>
                            <h5>2019 - 2022</h5>
                            <p><em>Government Polytechnic, Rajkot, Gujarat. </em></p>
                        </div>
                        <div class="resume-item">
                            <h4>Secondary School Certificate (SSC)</h4>
                            <h5>2018 - 2019</h5>
                            <p><em>Alpha Vidhya Sankul, Talala, Gujarat. </em></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Junior Backend Deveoper</h4>
                            <h5>March 2023 - Present</h5>
                            <p><em>Sphererays Technolabs Private Limited, Rajkot, Gujarat. </em></p>
                            <ul>
                                <li>Wrote and developed new and well-tested code for different web application projects
                                    like <b>"Jewellery Management System (AUG-ERP)"</b> and <b>"Project Management
                                        System.(Support System For ERP)"</b>.</li>
                                <li>Wrote clean and dynamic code, leveraging expertise across multiple programming
                                    languages to meet diverse requirements. </li>
                                <li>Developed API (Application Programming Interface) Concept to integrate support
                                    system and and project management system in one way</li>
                                <li>
                                    Reference Links : <br>
                                    <a href="https://one.augerp.in"> Main Module (AUG ERP)</a> <br>
                                    <a href="https://support.augerp.in"> Support Module (SUPPORT SYSTEM)</a> <br>
                                </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Web Developer Trainee</h4>
                            <h5>December 2022 - February 2023</h5>
                            <p><em>Sphererays Technolabs Private Limited, Rajkot, Gujarat. </em></p>
                            <ul>
                                <li>Explored and created new ways to resolve problems with processes, technology or team
                                    members to improve overall efficiency. </li>
                                <li>Learned about Programming languages and developed a logic that can resolve ERP
                                    problems in efficient way</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Project Trainee</h4>
                            <h5>June 2021</h5>
                            <p><em>Jagdish Industries, Rajkot, Gujarat. </em></p>
                            <ul>
                                <li>The Jagdish Industries project is based on Information Of automobile spare parts
                                    items in an easy way from a lndustries. </li>
                                <li> Two roles are there, one for users and another for the vendors. Users can find
                                    Spare parts information and place order through call and email. Vendors can manage
                                    products and add new Spare Parts.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p class="text-uppercase">Rajkot, Gujarat , India - 360004</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p class="text-uppercase">aditya.ravat.5496@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+91 9904021454</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Aditya Ravat</h3>
            <div class="social-links">
                <a href="https://twitter.com/aditya_ravat28" class="twitter">
                  <i class="bx bxl-twitter"></i>
                </a>
                <a href="https://www.facebook.com/ravat.aditya" class="facebook">
                  <i class="bx bxl-facebook"></i>
                </a>
                <a href="https://www.instagram.com/_.aadiiii____" class="instagram">
                  <i class="bx bxl-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/in/aditya-ravat-84b733252" class="linkedin">
                  <i class="bx bxl-linkedin"></i>
                </a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Aditya Ravat</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <b>Aditya Ravat</b>
            </div>
        </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ url('/assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ url('/assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ url('/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('/assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('/assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('/assets') }}/vendor/typed.js/typed.umd.js"></script>
    <script src="{{ url('/assets') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ url('/assets') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ url('/assets') }}/js/main.js"></script>
</body>

</html>
