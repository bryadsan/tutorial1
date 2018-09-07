<header>
            <nav id="header-top" class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">PHP Tutorial - Basic</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                   
                
                    
                        <li class="nav-item <?php echo ($_page == 'home') ? 'active' : '' ; ?>">
                            <a class="nav-link" href="http://localhost/tutorial1/prototype/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php echo ($_page == 'blogs') ? 'active' : '' ; ?>">
                            <a class="nav-link" href="http://localhost/tutorial1/prototype/?page=blogs">Blogs</a>
                        </li>
                        <li class="nav-item <?php echo ($_page == 'users') ? 'active' : '' ; ?>">
                            <a class="nav-link" href="http://localhost/tutorial1/prototype/?page=users">Users</a>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#SignInModal" href="#">Sign
                        In</a>
                </div>
            </nav>

            <?php 

            if ($_page == 'home') {

                ?>
                <div id="header-slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#header-slider" data-slide-to="1"></li>
                    <li data-target="#header-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="http://via.placeholder.com/800x300" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="http://via.placeholder.com/800x300" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="http://via.placeholder.com/800x300" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#header-slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <?php
            }

            
            ?>
            



        </header>