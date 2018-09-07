<?php require_once("models/users.php"); ?>
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
                        <th width="15%" scope="col">Username</th>
                        <th scope="col">Full Name</th>
                        <th width="14%" scope="col">Email</th>
                        <th width="11%" scope="col">Mobile</th>
                        <th width="10%" scope="col">Created</th>
                        <th width="14%" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($_users->num_rows > 0) :
                        while($row = $_users->fetch_assoc()) :
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["ID"]; ?></th>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["first_name"] . ' ' . $row["last_name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["mobile"]; ?></td>
                        <td><?php echo $row["created"]; ?></td>
                        <td>
                            <a class="btn btn-sm btn-outline-success" href="#">Edit</a>
                            <a class="btn btn-sm btn-outline-danger" href="<?php echo $_url . "?page=$_page&action=delete&id=" . $row["ID"]; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>