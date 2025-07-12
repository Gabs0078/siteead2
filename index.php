<?php
// List of valid pages
$valid_pages = ['home', 'spotify', 'orcamento', 'sobre', 'contato'];

// Get the requested page from the query string
$page = $_GET['page'] ?? 'home';

// Validate the page
if (!in_array($page, $valid_pages)) {
    $page = 'home'; // Default to home if the page is invalid
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B I G Records - Produção Musical</title>
    <meta name="description" content="Confira os últimos lançamentos de BigTheWinner no Spotify e YouTube.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('includes/header.php'); ?>

    <main>
        <?php include("includes/$page.php"); ?>
    </main>

    <?php include('includes/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>