<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HighTech - IT Solutions Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{url('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{url('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Chandigarh India</small>
                        <small class="me-3 text-white-50">
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mk3841210@gmail.com" target="_blank" class="text-white-50"><i class="fas fa-envelope me-2 text-secondary"></i>mk3841210@gmail.com</a>
                        </small>
                    </div>
                    <div id="note" class="text-secondary d-none d-xl-flex"><small>Note : We help you to Grow your Business</small></div>
                    <div class="top-link">
                        {{-- <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a> --}}
                        <a href="https://x.com/Monukushwa17969" class="bg-light nav-fill btn btn-sm-square rounded-circle" target="_blank"><i class="fab fa-twitter text-primary"></i></a>
                        {{-- <a href="https://www.linkedin.com/in/monu-kushwaha-7609a6250/" class="bg-light nav-fill btn btn-sm-square rounded-circle" target="_blank"><i class="fab fa-instagram text-primary"></i></a> --}}
                        <a href="https://www.linkedin.com/in/monu-kushwaha-7609a6250/" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container-fluid bg-primary home-page-header">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="/" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block">Developer<span class="text-secondary">Monu</span> </h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active text-secondary' : '' }}">Home</a>
                            <a href="{{ url('about-us') }}" class="nav-item nav-link {{ Request::path() == 'about-us' ? 'active' : '' }}">About</a>
                            {{-- <a href="service" class="nav-item nav-link {{ Request::path() == 'service' ? 'active' : '' }}">Services</a> --}}
                            <a href="project" class="nav-item nav-link {{ Request::path() == 'project' ? 'active' : '' }}">Projects</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle {{ Request::path() == 'blog' ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded">
                                    <a href="{{url('blog')}}" class="dropdown-item {{ Request::path() == 'blog' ? 'active' : '' }}">Our Blog</a>
                                    <a href="{{url('404')}}" class="dropdown-item">404 Page</a>
                                </div>
                            </div>
                            <a href="contact-us" class="nav-item nav-link {{ Request::path() == 'contact-us' ? 'active' : '' }}">Contact</a>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shirink-0">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                            <a href="" class="position-relative animated tada infinite">
                                <i class="fa fa-phone-alt text-white fa-2x"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-4 border-end">
                            <span class="text-white-50">Have any questions?</span>
                            <span class="text-secondary">Call: +91 8303342422</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-center ms-4 ">
                            <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>