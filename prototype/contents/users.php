<?php
$message = "";
$sql = "";

if(!empty($_GET['action']) && !empty($_GET['id'])){
    $sql = "DELETE FROM users WHERE id=" . $_GET['id'];
    $message = "Record has been deleted successfully";
}

if(!empty($_POST)){
    if(!empty($_POST['id']))
    {
        $sql = "UPDATE users SET username='" .$_POST['username']. "', 
                                first_name = '" .$_POST['first_name']. "',
                                 last_name = '" .$_POST['last_name']. "', 
                                 email = '" .$_POST['email'] . "'  ,
                                 mobile = '" .$_POST['mobile']. "'

                                 WHERE id= ".$_POST['id'];
                                 $message = "record has been updated";

    }
    else{
    $sql = "INSERT INTO users(username, password, first_name, last_name, email, mobile) 
            VALUES ('" .$_POST['username'] . "',
                    '" .$_POST['password'] . "',
                    '" .$_POST['first_name']. "',
                    '" .$_POST['last_name'] . "',
                    '" .$_POST['email'] . "',
                    '" .$_POST['mobile'] ."')";

    $message = "New record created successfully";
    }
}

if ( !empty($sql) ) {
    if ($conn->query($sql) === TRUE) {
        echo $message;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php $sql = "SELECT * FROM users"; 
    $result = $conn->query($sql);
    print_r($result);
    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         echo "<br> id: ". $row["ID"];
    //     }
    // } else {
    //     echo "0 results";
    // }
?>


<main role="main" class="container mt-4">
            <div class="row">
                <div class="col-md-12 blog-main">
                    <h3 class="pb-3 mb-4 font-italic border-bottom">
                        Users
                        <a class="btn d-block btn-sm btn-outline-primary float-right" data-toggle="modal" data-target="#AddUserModal"
                            href="#">New User</a>
                    </h3>

                    <div class="blog-post">
                        <table id="table-blogs" class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th width="3%" scope="col">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th width="10%" scope="col">Created</th>
                                    <th width="14%" scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                             if ($result->num_rows > 0) {
                                // output data of each row
                             

                                while($row = $result->fetch_assoc()) {
                                    
                                
                            ?>
                               <tr>
                                    <th scope="row"><?php echo $row["ID"]?></th>
                                    <td><?php echo $row["username"]?></td>
                                    <td><?php echo $row["first_name"]." ". $row["last_name"]?></td>
                                    <td><?php echo $row["email"]?></td>
                                    <td><?php echo $row["mobile"]?></td>
                                    <td><?php echo $row["created"]?></td>
                                    <td>
                                        <a 
                                            class="btn btn-sm btn-outline-success" 
                                            data-toggle="modal" 
                                            data-target="#AddUserModal" 
                                            data-username="<?php echo $row["username"]?>"
                                            data-first_name="<?php echo $row["first_name"]?>"
                                            data-last_name="<?php echo $row["last_name"]?>"
                                            data-email="<?php echo $row["email"]?>"
                                            data-mobile="<?php echo $row["mobile"]?>"
                                            data-id="<?php echo $row["ID"]?>"
                                            href="#"
                                        >Edit</a>
                                        <a class="btn btn-sm btn-outline-danger" href="?page=users&action=delete&id=<?php echo $row["ID"]?>">Delete</a>
                                    </td>
                                </tr>

                            <?php } 
                            } 
                            ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>