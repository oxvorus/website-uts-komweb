<?php include './connect/koneksi.php'; ?>
<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --color-primary: #493628;
            --color-secondary: #AB886D;
            --color-tertiary: #D6C0B3;
            --color-background: #E4E0E1;
        }

        body {
            background-color: var(--color-background);
            color: var(--color-primary);
            font-family: Arial, sans-serif;
        }

        .navbar-custom {
            background-color: var(--color-primary);
            padding: 1rem 0;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: var(--color-background);
        }

        .navbar-custom .nav-link:hover {
            color: var(--color-tertiary);
        }

        .header-section {
            background-color: var(--color-primary);
            color: var(--color-background);
            padding: 4rem 0;
            margin-top: 56px;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--color-tertiary);
        }

        .about-section {
            background-color: var(--color-tertiary);
            padding: 4rem 0;
        }

        .about-section h2 {
            color: var(--color-primary);
            font-size: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .about-content {
            background-color: var(--color-background);
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .about-content p {
            color: var(--color-primary);
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .about-content ul {
            list-style-type: none;
            padding-left: 0;
        }

        .about-content ul li {
            margin-bottom: 0.5rem;
        }

        .about-content ul li i {
            color: var(--color-secondary);
            margin-right: 0.5rem;
        }

        @media (max-width: 768px) {
            .about-content {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
<?php  include 'navbar\navbar.php'  ?>   

<header class="header-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-end mb-3 mb-md-0">
                    <img src="gambar\bahanweb1.jpg" alt="Foto Profil" class="profile-image">
                </div>
                <div class="col-md-8">
                    <h1 class="display-4">El Pasya Athalla Nadhifa</h1>
                    <p class="lead">Informatika</p>
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="about-section">
        <div class="container">
            <h2>About Me</h2>
            <div class="about-content">
                <p>
                    Halo! Saya El Pasya Athalla Nadhifa, seorang mahasiswa Informatika yang bersemangat dalam dunia pengembangan web dan teknologi informasi. Saya memiliki ketertarikan yang kuat dalam menciptakan solusi digital yang inovatif dan bermanfaat bagi masyarakat.
                </p>
                <p>
                    Dengan latar belakang pendidikan di bidang Informatika, saya telah mengembangkan keterampilan yang kuat dalam pemrograman, analisis data, dan pemecahan masalah. Saya selalu bersemangat untuk belajar teknologi baru dan mengaplikasikannya dalam proyek-proyek yang menantang.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle-fill"></i>Mahasiswa Informatika tahun ke-3</li>
                    <li><i class="bi bi-check-circle-fill"></i>Pengalaman magang di perusahaan teknologi</li>
                    <li><i class="bi bi-check-circle-fill"></i>Aktif dalam organisasi kampus dan komunitas teknologi</li>
                    <li><i class="bi bi-check-circle-fill"></i>Pemenang beberapa hackathon tingkat nasional</li>
                </ul>
                <p>
                    Saya percaya bahwa teknologi memiliki kekuatan untuk mengubah dunia menjadi lebih baik, dan saya berkomitmen untuk terus belajar dan berkontribusi dalam industri ini. Mari terhubung dan diskusikan bagaimana kita bisa berkolaborasi untuk menciptakan solusi teknologi yang berdampak!
                </p>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>