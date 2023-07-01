<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Isla Jor Work </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('images/logo2.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>


    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Source+Code+Pro&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{ route('layoutDash.index') }}" class="navbar-brand mx-4 mb-3">
                    <img src="{{ asset('images/logo-white.png') }}" id="logo" alt="">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ $user->name }}</h6>
                        <span><strong>{{ $education->field_of_study }}</strong> </span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('layoutDash.index') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-users me-2"></i>Users & Company</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                            <a href="{{ route('userdashboard.user') }}" class="dropdown-item"><i class="fas fa-user me-2 "></i>User</a>
                            <a href="{{ route('companydashboard.company') }}" class="dropdown-item"><i class="fas fa-building me-2"></i>Company</a>
                            
                        </div>
                    </div>
                    <div class="navbar-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-briefcase me-2"></i>Jops & Posts</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('jopdashboard.jops') }}" class="dropdown-item"> <i class="fas fa-briefcase me-2"></i>  Jops</a>
                            <a href="{{ route('postdashboard.post') }}"class="dropdown-item"><i class="fas fa-pencil-alt me-2"></i>Posts</a>
                        </div>
                    </div>
                        
                        
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-university me-2"></i>
                            Universitys</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('universitydashboard.university') }}" class="nav-item nav-link"><i class="fas fa-university"></i>University</a>
                            <a href="{{ route('majordashboard.major') }}" class="nav-item nav-link"><i class="fas fa-graduation-cap"></i></i>Majors</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-comment me-2"></i>
                            FeedBack</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('feedbackdashboard.feedback') }}" class="nav-item nav-link"><i class="fas fa-comment me-2"></i>FeedBack</a>
                            
                        </div>
                    </div>
                    


                        
                        
                    
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars" style="color: #222;"></i>
                </a>
                <div class="search">
                    <span class="uil uil-search">
                    </span>
                    <input placeholder="Search" type="text" />
                  </div>
                <div class="navbar-nav align-items-center ms-auto">
                    
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ $user->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ route('admindashboard.profile admin') }}.html" class="dropdown-item">My Profile</a>
                            @if(Auth::check())
                            <a href="#" class="dropdown-item">Log Out</a>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->