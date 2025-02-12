<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="about.php">Tentang Saya</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="services.php">Layanan</a></li>
            <li><a href="contact.php">Kontak</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Hubungi Saya</h1>
        <form action="contact.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>