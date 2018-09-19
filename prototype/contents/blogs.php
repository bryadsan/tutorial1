<?php
$message = "";
$sql = "";

if(!empty($_GET['action']) && !empty($_GET['id'])){
    $sql = "DELETE FROM blogs WHERE id=" . $_GET['id'];
    $message = "Record has been deleted successfully";
}

if(!empty($_POST)){
    if(!empty($_POST['id']))
    {
        $sql = "UPDATE blogs SET title ='" .$_POST['title']. "', 
                                content = '" .$_POST['content']. "'

                                 WHERE id= ".$_POST['id'];
                                 $message = "record has been updated";

    }
    else{
    $sql = "INSERT INTO blogs(title, content) 
            VALUES ('" .$_POST['title'] . "',
                    '" .$_POST['content'] ."')";

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

<?php $sql = "SELECT * FROM blogs"; 
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
                        Blogs
                        <a class="btn d-block btn-sm btn-outline-primary float-right" data-toggle="modal" data-target="#AddBlogModal" href="#">New Blog</a>
                    </h3>

                    <div class="blog-post">
                        <table id="table-blogs" class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th width="3%" scope="col">#</th>
                                    <th width="20%" scope="col">Title</th>
                                    <th scope="col">Content</th>
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
                                    <td><?php echo $row["title"]?></td>
                                    <td><?php echo $row["content"]?></td>
                                    <td><?php echo $row["created_time"]?></td>
                                    <td>
                                        <a 
                                        class="btn btn-sm btn-outline-success" 
                                        data-toggle="modal" 
                                        data-target="#AddBlogModal" 
                                        data-title="<?php echo $row["title"]?>"
                                        data-content="<?php echo $row["content"]?>"
                                        data-id="<?php echo $row["ID"]?>"
                                        
                                        href="#">Edit</a>
                                        <a class="btn btn-sm btn-outline-danger" href="?page=blogs&action=delete&id=<?php echo $row["ID"]?>">Delete</a>
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