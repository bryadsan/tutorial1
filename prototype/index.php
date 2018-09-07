<?php 
    $_page = (!empty($_GET['page'])) ? strtolower($_GET['page']) : 'home' ;

    $_allowed_pages = ['home', 'blogs', 'users'];

    if (!in_array ($_page, $_allowed_pages)) {
        $_page = 'home';
    }

    
// () ? : ; 

    // echo $_page;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP Tutorial - Basic1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css" />
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

</body>

<div class="container">
    
    <?php 
        include_once('elements/header.php'); 

        // if ($_page == 'users') {
        //     include_once('contents/users.php');
        // }
        // elseif ($_page == 'blogs') {
        //     include_once('contents/blogs.php');
        // }
        // else {
        //     include_once('contents/home.php');
        // }
        include_once("contents/$_page.php");

        include_once('elements/footer.php');

    ?>
</div>

<script type="text/javascript" src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table-blogs').DataTable();
        });
    </script>

</html>
