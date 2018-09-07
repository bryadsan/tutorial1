<?php
    require_once("database.php");

    $_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . strtok($_SERVER['REQUEST_URI'],'?');
    $_page = !empty($_GET['page']) ? strtolower($_GET['page']) : 'home';
    $_action = !empty($_GET['action']) ? strtolower($_GET['action']) : '';

    if ( !in_array($_page, ['home', 'blogs', 'users']) ) {
        $_page = 'home';
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP Tutorial - Basic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php include_once("./templates/header.php"); ?>
        <main role="main" class="container mt-4">
            <?php include_once("./contents/$_page.php"); ?>
        </main>
        <?php include_once("./templates/footer.php"); ?>
    </div>
    <?php include_once("./templates/modals.php"); ?>
    <script src="../assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>

</html>