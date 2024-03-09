<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="secret??" href="/secret-1/">
    <title>LFI Challenge</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="/secret/secret-1/">
</head>
<body>
    <h1>CyberCamp 2024</h1>
    <p>Anda memiliki akses ke file sistem, dapatkah Anda menemukan flag yang tersembunyi?</p>

    <div class="content">
        <?php
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            include($page . ".php");
        } else {
            include("home.php");
        }
        ?>
    </div>

    <footer>&copy; 2024 LFI Challenge</footer>
</body>
</html>
