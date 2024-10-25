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

        .skills-section {
            background-color: var(--color-background);
            padding: 4rem 0;
        }

        .skills-section h2 {
            color: var(--color-primary);
            font-size: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .skills-container {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
        }

        .skills-column {
            flex: 1;
        }

        .skills-column h4 {
            color: var(--color-primary);
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .skills-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .skills-list li {
            background-color: var(--color-tertiary);
            color: var(--color-primary);
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 4px;
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .skills-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<?php  include 'navbar/navbar.php'  ?>

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

    <section id="skills" class="skills-section">
        <div class="container">
            <h2>Skills</h2>
            <div class="skills-container">
                <div class="skills-column">
                    <h4>Technical Skills</h4>
                    <ul class="skills-list">
                        <li>HTML5 & CSS3</li>
                        <li>JavaScript (ES6+)</li>
                        <li>React.js</li>
                        <li>Node.js</li>
                        <li>SQL & NoSQL Databases</li>
                    </ul>
                </div>
                <div class="skills-column">
                    <h4>Soft Skills</h4>
                    <ul class="skills-list">
                        <li>Problem Solving</li>
                        <li>Team Collaboration</li>
                        <li>Time Management</li>
                        <li>Adaptability</li>
                        <li>Continuous Learning</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>