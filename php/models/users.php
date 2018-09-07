<?php
echo "models/users:";
$_users = [];
$db_msg = "";
switch($_action) {
    case "insert":
        echo "insert";
        if ( !empty($_POST['username']) && !empty($_POST['password']) ) {
            
            $sql = "
                    INSERT INTO 
                    users (username, first_name, last_name, email, mobile, password)
                    VALUES (
                        '" . $_POST['username'] . "', 
                        '" . $_POST['first_name'] . "', 
                        '" . $_POST['last_name'] . "', 
                        '" . $_POST['email'] . "', 
                        '" . $_POST['mobile'] . "', 
                        '" . md5($_POST['password']) . "'
                    )
                    ";
            
            $db_msg = "New record created successfully";
        }
    break;
    case "update":
        echo "update";
        if ( !empty($_POST['id']) ) {
            $fields = "
                username = '" . $_POST['username'] . "', 
                first_name = '" . $_POST['first_name'] . "', 
                last_name = '" . $_POST['last_name'] . "', 
                email = '" . $_POST['email'] . "', 
                mobile = '" . $_POST['mobile'] . "'
            ";
            
            $sql = "UPDATE users SET {$fields} WHERE ID=" . $_POST['id'];
            
            $db_msg = "Record updated successfully";
        }
    break;
    case "delete":
        echo "delete";
        if ( !empty($_GET['id']) ) {
            
            $sql = "DELETE FROM users WHERE ID=" . $_GET['id'];
            
            $db_msg = "Record deleted successfully";
        }
    break;
    case "select-all":
    default:
        echo "select-all";
        $sql = "SELECT * FROM users";
    break;
}

if ( !empty($sql) ) {
    $_users = $db_conn->query($sql);
    print_r($_users);
    if ( $_users === TRUE || ( !empty($_users->num_rows) && $_users->num_rows > 0) ) {
        echo "Success: $_action:$db_msg";
        if ( $_users === TRUE ) {
            header('Location: '.$_url . "?page=$_page");
        }
    } else {
        echo "Error: $_action:$sql<br>" . $db_conn->error;
    }

    // $conn->close();
}

