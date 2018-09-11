<?php

if (!empty ($_POST)) {
$sql = "INSERT INTO users (username, password, first_name, last_name, email, mobile)
VALUES ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email']."', '".$_POST['mobile']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$sql = "SELECT ID, username, password, first_name, last_name, email, mobile, created FROM users";
$result = $conn->query($sql);

//print_r($result);
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
                                //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                              
                           
                            ?>
                                <tr>
                                    <td><?php echo $row["ID"]?></td>
                                    <td><?php echo $row["username"]?></td>
                                    <td><?php echo $row["first_name"] . " " . $row["last_name"]?></td>
                                    <td><?php echo $row["email"]?></td>
                                    <td><?php echo $row["mobile"]?></td>
                                    <td><?php echo $row["created"]?></td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-success" href="#">Edit</a>
                                        <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                                    </td>

                                </tr>

                              <?php
                               }
                               } else {
                                echo "0 results";
                            }
                            $conn->close();
                              ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>