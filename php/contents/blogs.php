<?php require_once("models/blogs.php"); ?>
<div class="row">
    <div class="col-md-12 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Blogs
            <a class="btn d-block btn-sm btn-outline-primary float-right" data-toggle="modal" data-target="#AddBlogModal"
                href="#">New Blog</a>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Lorem ipsum dolor sit</td>
                        <td>Nunc eu mi eget lectus consectetur varius. Aliquam lobortis dolor sit amet nunc
                            fermentum, sit amet mollis orci iaculis.</td>
                        <td>2018-08-15</td>
                        <td>
                            <a class="btn btn-sm btn-outline-success" href="#">Edit</a>
                            <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Lorem ipsum dolor sit</td>
                        <td>Nunc eu mi eget lectus consectetur varius. Aliquam lobortis dolor sit amet nunc
                            fermentum, sit amet mollis orci iaculis.</td>
                        <td>2018-08-15</td>
                        <td>
                            <a class="btn btn-sm btn-outline-success" href="#">Edit</a>
                            <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Lorem ipsum dolor sit</td>
                        <td>Nunc eu mi eget lectus consectetur varius. Aliquam lobortis dolor sit amet nunc
                            fermentum, sit amet mollis orci iaculis.</td>
                        <td>2018-08-15</td>
                        <td>
                            <a class="btn btn-sm btn-outline-success" href="#">Edit</a>
                            <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Lorem ipsum dolor sit</td>
                        <td>Nunc eu mi eget lectus consectetur varius. Aliquam lobortis dolor sit amet nunc
                            fermentum, sit amet mollis orci iaculis.</td>
                        <td>2018-08-15</td>
                        <td>
                            <a class="btn btn-sm btn-outline-success" href="#">Edit</a>
                            <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Lorem ipsum dolor sit</td>
                        <td>Nunc eu mi eget lectus consectetur varius. Aliquam lobortis dolor sit amet nunc
                            fermentum, sit amet mollis orci iaculis.</td>
                        <td>2018-08-15</td>
                        <td>
                            <a class="btn btn-sm btn-outline-success" href="#">Edit</a>
                            <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>