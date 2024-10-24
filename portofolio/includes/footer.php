<!-- Footer -->
<footer class="footer mt-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                <h5 class="text-uppercase mb-4 font-weight-bold">Tautan Cepat</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php?page=home" class="footer-link">Home</a></li>
                    <li><a href="index.php?page=about" class="footer-link">About</a></li>
                    <li><a href="index.php?page=portfolio" class="footer-link">Portofolio</a></li>
                    <li><a href="index.php?page=blog" class="footer-link">Blog</a></li>
                    <li><a href="index.php?page=contact" class="footer-link">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                <h5 class="text-uppercase mb-4 font-weight-bold">Ikuti Saya</h5>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/ivandrmawn" class="footer-social-link"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://x.com/mivannnn" class="footer-social-link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/ivan-darmawan-385bb0333/"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/Ivandarmawann" class="footer-social-link"><i class="fab fa-github"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-4 bg-light">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
                <p class="mb-md-0">&copy; <?php echo date("Y"); ?> <strong>Ivandarmawan</strong>. Semua hak dilindungi.</p>
            </div>
            <div class="col-md-5 col-lg-4">
            </div>
        </div>
    </div>
</footer>

<style>
    .footer {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: #f8f9fa;
        font-family: 'Poppins', sans-serif;
    }
    .footer h5 {
        font-weight: 600;
    }
    .footer-link {
        color: #f8f9fa;
        transition: color 0.3s ease, transform 0.3s ease;
        display: inline-block;
    }
    .footer-link:hover {
        color: #00a8ff;
        text-decoration: none;
        transform: translateX(5px);
    }
    .footer-social-link {
        color: #f8f9fa;
        font-size: 1.2rem;
        transition: all 0.3s ease;
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
    }
    .footer-social-link:hover {
        color: #00a8ff;
        background-color: rgba(255, 255, 255, 0.2);
        transform: translateY(-3px);
    }
    .animate__animated {
        animation-duration: 1s;
    }
</style>

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">