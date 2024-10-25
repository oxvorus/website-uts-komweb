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
<?php  include 'navbar/navbar.php'  ?>
<!-- Header Section -->
<div class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Achievements</h1>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Prestasi yang Telah Diraih</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about-content">
                    <h3>2018</h3>
                    <ul>
                        <li><i class="bi bi-trophy"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, voluptatum error. Porro magni, eligendi, eaque dicta iste cum fugit nihil ipsam a explicabo repellendus. Ex at quam pariatur nemo perferendis.</li>
                        <li><i class="bi bi-medal"></i> Juara 2 Lomba Desain Grafis di Kompetisi ABC</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content">
                    <h3>2019</h3>
                    <ul>
                        <li><i class="bi bi-trophy"></i> Juara 1 Lomba Hackathon di Perusahaan DEF</li>
                        <li><i class="bi bi-medal"></i> Juara 3 Lomba Penulisan Artikel di Majalah GHI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>