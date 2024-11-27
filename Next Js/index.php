<?php
// Start the session
session_start();

// Include configuration file
require_once 'config.php';

// Include functions file
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>

<body>
    <?php include('components/header.php'); ?>

    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        
        switch($page) {
            case 'about':
                include('components/about.php');
                break;
            case 'services':
                include('components/services.php');
                break;
            case 'contact':
                include('components/contact.php');
                break;
            default:
                include('components/home.php');
                break;
        }
        ?>
    </main>

    <?php include('components/footer.php'); ?>
</body>

</html>