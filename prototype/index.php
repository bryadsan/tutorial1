<?php require("database/config.php"); ?>

<?php
    $_page = ( !empty($_GET['page']) ) ? strtolower($_GET['page']) : 'home';

    // (<condition>) ? <true> : <false> ;
    // (!empty(test) ) ? 1  : 0 ;

    // if ( !empty($_GET['page']) ) {
    //     $_page =$_GET['page'];
    // } else {
    //     $_page  = 'home';
    // }

    // if ( $_page != 'home' && $_page != 'blogs' && $_page != 'users' ) {
    //     $_page  = 'home';
    // }

    $_allowed_pages = ['home' , 'blogs', 'users' ];

    if ( !in_array($_page, $_allowed_pages ) ) {
        $_page  = 'home';
    }

    // echo $_page;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP Tutorial - Basic 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css" />
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
<div class="container">
    
    <?php include_once("elements/header.php"); ?>

    <?php 
        // if ($_page == 'blogs') {
        //     include_once("view/blogs.php"); 
        // } elseif ($_page == 'users') {
        //     include_once("view/users.php");
        // } else {
        //     include_once("view/home.php");
        // }
        include_once("contents/$_page.php");
    ?>
    
    <?php include_once("elements/footer.php"); ?>
    <?php include_once("elements/modal.php"); ?>
</div>

<script src="../assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table-blogs').DataTable();

            $('#AddUserModal').on('show.bs.modal', function (event) {
                // alert(1);
                // console.log(1);

                var button = $(event.relatedTarget) // Button that triggered the modal

                console.log(button);
                var username = button.data('username');
                var first_name = button.data('first_name');
                var last_name = button.data('last_name');
                var email = button.data('email');
                var mobile = button.data('mobile');
                var id = button.data('id');
                console.log(id, username, first_name, last_name, email, mobile);

                var modal = $(this);

                if (id) {
                    modal.find('#AddUserModalLabel').text('Edit User');
                    modal.find('button[type="submit"]').text('Update');
                    modal.find('.modal-body input[name="username"]').val(username);
                    modal.find('.modal-body input[name="first_name"]').val(first_name);
                    modal.find('.modal-body input[name="last_name"]').val(last_name);
                    modal.find('.modal-body input[name="email"]').val(email);
                    modal.find('.modal-body input[name="mobile"]').val(+mobile);
                    modal.find('.modal-body input[name="id"]').val(id);
                } else {
                    modal.find('#AddUserModalLabel').text('New User');
                    modal.find('button[type="submit"]').text('Add');
                    modal.find('.modal-body input[name="id"]').val("");
                    modal.find('form').trigger('reset');
                    // modal.find('.modal-body input[name="id"]').val(id);
                }


            });


             $('#AddBlogModal').on('show.bs.modal', function (event) {
                // alert(1);
                // console.log(1);

                var button = $(event.relatedTarget) // Button that triggered the modal

                console.log(button);
                var title = button.data('title');
                var content = button.data('content');
                var id = button.data('id');
                console.log(id, title, content);

                var modal = $(this);

                if (id) {
                    modal.find('#AddBlogModalLabel').text('Edit Blog');
                    modal.find('button[type="submit"]').text('Update');
                    modal.find('.modal-body input[name="title"]').val(title);
                    modal.find('.modal-body textarea[name="content"]').val(content);
                    modal.find('.modal-body input[name="id"]').val(id);
                } else {
                    modal.find('#AddBlogModalLabel').text('New Blog');
                    modal.find('button[type="submit"]').text('Add');
                    modal.find('.modal-body input[name="id"]').val("");
                    modal.find('form').trigger('reset');
                    // modal.find('.modal-body input[name="id"]').val(id);
                }


            });
        });
    </script>

</body>

</html>