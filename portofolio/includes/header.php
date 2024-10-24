<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        /* Navbar styling */
        .navbar {
            background-color: transparent;
            transition: background-color 0.3s ease;
            padding: 1rem 2rem;
        }
        .navbar.scrolled {
            background-color: #343a40;
        }
        .navbar-brand {
            font-size: 1.75rem;
            color: #f8f9fa !important;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #f8f9fa !important;
            font-size: 1.1rem;
            font-weight: 500;
            margin-right: 1.5rem;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #00a8ff !important;
        }
        
        /* Header styling */
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        .header-content {
            color: #f8f9fa;
            text-align: left;
            z-index: 2;
        }
        header h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            animation: fadeInDown 1s ease;
        }
        header p {
            font-size: 1.25rem;
            font-weight: 300;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.5s;
            animation-fill-mode: both;
        }
        .btn-custom {
            background-color: #00a8ff;
            color: #fff;
            border: none;
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease 1s;
            animation-fill-mode: both;
        }
        .btn-custom:hover {
            background-color: #0097e6;
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .header-image {
            position: absolute;
            right: -5%;
            top: 50%;
            transform: translateY(-50%);
            width: 50%;
            animation: fadeInRight 1s ease 0.5s;
            animation-fill-mode: both;
        }
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(-50%) translateX(0px); }
            50% { transform: translateY(-50%) translateX(15px); }
            100% { transform: translateY(-50%) translateX(0px); }
        }
    </style>
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">Portofolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=portofolio">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- Header with animated content -->
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-content">
                        <h1>Welcome to My Portofolio</h1>
                        <p>I'm a student from Universitas Pembangunan Jaya. I hope you enjoy exploring my page!</p>
                        <a href="index.php?page=contact" class="btn btn-custom">Get In Touch <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <img src="foto2.jpg" alt="Header Image" class="header-image floating">
    </header>

    <div class="container mt-5">
        <!-- Your content here -->
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        // Change navbar background on scroll
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });
    </script>
</body>
</html>