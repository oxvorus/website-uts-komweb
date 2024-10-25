<?php include './connect/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <style>
        <head>
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

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background: #35424a;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        main {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1 {
            color: #35424a;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        button {
            background: #35424a;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background: #45a049;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #35424a;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .success-message {
            color: green;
            font-weight: bold;
        }
    </style>
    <script>
        function validateForm() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const message = document.getElementById("message").value;
            if (name === "" || email === "" || message === "") {
                alert("All fields must be filled out");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<?php  include 'navbar\navbar.php'  ?> 
    <header>
        <h1>Contact Us</h1>
    </header>
    <main>
    
        <?php
        if (!empty($message)) {
            echo "<p class='success-message'>$message</p>";
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2023 EL PASYA ATHALLA NADHIFA. All rights reserved