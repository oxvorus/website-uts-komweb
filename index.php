<?php include './connect/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php  include 'navbar/navbar.php'  ?>
    <header class="bg-primary-custom text-white py-5" style="margin-top: 56px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-center text-md-end mb-3 mb-md-0">
                <img src="gambar/bahanweb1.jpg" alt="Foto Profil" class="profile-image">
            </div>
            <div class="col-md-8">
                <h1 class="display-4">El Pasya Athalla Nadhifa</h1>
                <p class="lead">Informatika</p>
            </div>
        </div>
    </div>
</header>

    <main class="container my-5">
        

        

        <section id="projects" class="mb-5">
            <h2 class="mb-3">Projects</h2>
            <div class="row">
                
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x200" class="gambar\bahan_web_2.jpg" alt="Proyek 2">
                        <div class="card-body">
                            <h5 class="card-title">Proyek 2</h5>
                            <p class="card-text">Deskripsi singkat proyek 2</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <section id="contact">
            <h2 class="mb-3">Contact</h2>
            <div class="d-flex gap-2">
                <a href="mailto:email@anda.com" class="btn btn-outline-primary">
                    <i class="bi bi-envelope me-2"></i>Email
                </a>
                <a href="https://github.com/username" target="_blank" class="btn btn-outline-primary">
                    <i class="bi bi-github me-2"></i>GitHub
                </a>
                <a href="https://linkedin.com/in/username" target="_blank" class="btn btn-outline-primary">
                    <i class="bi bi-linkedin me-2"></i>LinkedIn
                </a>
            </div>
        </section>
    </main>

    <footer class="bg-secondary-custom text-white py-3 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Nama Anda. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            navLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    var navbarToggler = document.querySelector('.navbar-toggler');
                    var navbarCollapse = document.querySelector('.navbar-collapse');
                    if (window.getComputedStyle(navbarToggler).display !== 'none') {
                        navbarCollapse.classList.remove('show');
                    }
                });
            });
        });
    </script>
</body>
</html>