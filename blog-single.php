<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yamifood Restaurant</title>
    <link rel="icon" href="<?php echo BASE_URL; ?>/public/images/icon.png">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/bootstrap.min.css">
    <script src="<?php echo BASE_URL; ?>/public/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/styles.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/blog-single.css">
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>/public/images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/reservation.html">Reservation</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/stuff.html">Stuff</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/gallery.html">Gallery</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Blog</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/blog.html">Blog</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/blog-single.html">Blog Single</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Blog-singlel -->
    <section class="bg-all">
        <h2>Blog-Single</h2>
    </section>
    <section class="blog-single">
        <div class="container">
            <div class="heading text-center">
                <h1>Blog</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 col-xl-8-col-sm-12">
                        <div class="left-content">
                            <div class="blog-image">
                                <img src="<?php echo BASE_URL; ?>/public/images/inner-blog-img.jpg" alt="img1" class="img-fluid">
                                <div class="date">
                                    <span>27 Fab</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h3>
                                <ul>
                                    <li><span>Posted By : <span class="orange">Rubel Ahmed</span></span></li>
                                    <li><span>|</span></li>
                                    <li><span>Time: <span class="orange">11:30 am</span></span></li>
                                </ul>
                                <p>Vestibulum quis ultricies enim. Quisque eu sapien a erat congue lacinia bibendum ac
                                    massa. Morbi vehicula aliquet libero sit amet dictum. Integer vel mauris non magna
                                    consequat porttitor. Nulla facilisi. Suspendisse posuere, elit eu fringilla congue,
                                    turpis magna tempor odio, a placerat magna tortor a mauris. Phasellus lobortis
                                    turpis dui, eget mollis ex vestibulum auctor. Nunc viverra leo ut accumsan aliquet.
                                    Maecenas aliquam dolor eget felis bibendum blandit.</p>
                                <p>Nunc iaculis, massa eget pellentesque mollis, nulla mauris aliquam eros, vitae
                                    condimentum leo nisl ut purus. Etiam nibh diam, vehicula non tincidunt id, consequat
                                    nec ex. Praesent vulputate sapien non tellus ultrices hendrerit. Vestibulum ante
                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus
                                    pellentesque arcu erat. Curabitur dapibus fringilla porta. Sed in neque sit amet
                                    ante feugiat blandit. Nulla fringilla purus diam, cursus venenatis diam luctus nec.
                                </p>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non feugiat lacus.
                                        Nunc nisi velit, consectetur vitae ex porttitor, placerat scelerisque mauris.
                                        Phasellus sit amet tincidunt metus, quis tempus ex. Quisque in lorem ut mi
                                        ullamcorper suscipit eu nec purus. Nam maximus sagittis iaculis.</p>
                                </blockquote>
                                <p>Vestibulum quis ultricies enim. Quisque eu sapien a erat congue lacinia bibendum ac
                                    massa. Morbi vehicula aliquet libero sit amet dictum. Integer vel mauris non magna
                                    consequat porttitor. Nulla facilisi. Suspendisse posuere, elit eu fringilla congue,
                                    turpis magna tempor odio, a placerat magna tortor a mauris.</p>
                            </div>
                            <div class="blog-comment">
                                <h2>Comments</h2>
                                <div class="comment-item">
                                    <div class="img-item">
                                        <img src="<?php echo BASE_URL; ?>/public/images/avt-img.jpg" alt="avt" class="img-fluid">
                                    </div>
                                    <div class="content-item">
                                        <div class="name-left">
                                            <a href="#">Rubel Ahmed</a>
                                        </div>
                                        <div class="time-right"><span class="clock"><i
                                                    class="far fa-clock"></i></span>Time: <span>11.30 am</span>
                                        </div>
                                        <div class="content">
                                            <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus.
                                                Pellentesque
                                                consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet
                                                varius urna. In auctor.</p>
                                        </div>
                                        <a href="#" class="btn-right"><span><i class="fas fa-reply"></i></span>Reply</a>
                                    </div>
                                </div>
                                <div class="comment-item children">
                                    <div class="img-item">
                                        <img src="<?php echo BASE_URL; ?>/public/images/avt-img.jpg" alt="avt" class="img-fluid">
                                    </div>
                                    <div class="content-item">
                                        <div class="name-left">
                                            <a href="#">Admin</a>
                                        </div>
                                        <div class="time-right"><span class="clock"><i
                                                    class="far fa-clock"></i></span>Time: <span>11.30 am</span>
                                        </div>
                                        <div class="content">
                                            <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus.
                                                Pellentesque
                                                consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet
                                                varius urna. In auctor.</p>
                                        </div>
                                        <a href="#" class="btn-right"><span><i class="fas fa-reply"></i></span>Reply</a>
                                    </div>
                                </div>
                                <div class="comment-item">
                                    <div class="img-item">
                                        <img src="<?php echo BASE_URL; ?>/public/images/avt-img.jpg" alt="avt" class="img-fluid">
                                    </div>
                                    <div class="content-item">
                                        <div class="name-left">
                                            <a href="#">Rubel Ahmed</a>
                                        </div>
                                        <div class="time-right"><span class="clock"><i
                                                    class="far fa-clock"></i></span>Time: <span>11.30 am</span>
                                        </div>
                                        <div class="content">
                                            <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus.
                                                Pellentesque
                                                consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet
                                                varius urna. In auctor.</p>
                                        </div>
                                        <a href="#" class="btn-right"><span><i class="fas fa-reply"></i></span>Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-comment">
                                <h2>Leave your comment</h2>
                                <form action="<?php echo BASE_URL; ?>/blog-single.html" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="input">
                                                <input type="text" name="name" id="name" placeholder="Name">
                                            </div>
                                            <div class="input">
                                                <input type="email" name="email" id="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <textarea name="content" id="content" rows="2" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-submit" type="submit">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-6 col-sm-8 col-12">
                        <div class="right-content">
                            <h2>Search</h2>
                            <div class="search-box">
                                <form action="<?php echo BASE_URL; ?>/index.html" method="get">
                                    <div class="box-search">
                                        <input class="search" type="search" name="search" id="search"
                                            placeholder="Search blog">
                                        <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <h2>Categories</h2>
                            <div class="list-category">
                                <ul>
                                    <li><a href="*">Food</a></li>
                                    <li><a href="*">Pizza</a></li>
                                    <li><a href="*">Drink</a></li>
                                    <li><a href="*">Lorem Sit</a></li>
                                    <li><a href="*">Burger</a></li>
                                    <li><a href="*">Music</a></li>
                                </ul>
                            </div>
                            <h2>Recent Post</h2>
                            <div class="post">
                                <div class="box-post">
                                    <div class="img">
                                        <img src="<?php echo BASE_URL; ?>/public/images/post-img-01.jpg" alt="post1" class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <ul>
                                            <li>Posted By: <span>Rubel Ahmed</span></li>
                                            <li><span>|</span></li>
                                            <li>Time: <span>11:30 pm</span></li>
                                            <p>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</p>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-post">
                                    <div class="img">
                                        <img src="<?php echo BASE_URL; ?>/public/images/post-img-02.jpg" alt="post1" class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <ul>
                                            <li>Posted By: <span>Rubel Ahmed</span></li>
                                            <li><span>|</span></li>
                                            <li>Time: <span>11:30 pm</span></li>
                                            <p>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</p>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-post">
                                    <div class="img">
                                        <img src="<?php echo BASE_URL; ?>/public/images/post-img-03.jpg" alt="post1" class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <ul>
                                            <li>Posted By: <span>Rubel Ahmed</span></li>
                                            <li><span>|</span></li>
                                            <li>Time: <span>11:30 pm</span></li>
                                            <p>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</p>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-post">
                                    <div class="img">
                                        <img src="<?php echo BASE_URL; ?>/public/images/post-img-01.jpg" alt="post1" class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <ul>
                                            <li>Posted By: <span>Rubel Ahmed</span></li>
                                            <li><span>|</span></li>
                                            <li>Time: <span>11:30 pm</span></li>
                                            <p>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h2>Recent Tag</h2>
                            <div class="tag">
                                <ul>
                                    <li><a href="*">Food</a></li>
                                    <li><a href="*">Drink</a></li>
                                    <li><a href="*">Nature</a></li>
                                    <li><a href="*">Italian</a></li>
                                    <li><a href="*">VietNam</a></li>
                                    <li><a href="*">Fashion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h4>Phone</h4>
                        <p>+84 33-568-4403</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p>vanlong20it@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h4>Location</h4>
                        <p>Ho Chi Minh City, VietNam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="bg-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="content">
                        <h3>About Us</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit praesentium libero porro
                            repudiandae mollitia neque alias voluptates magnam voluptate, quis fuga sed explicabo
                            et,
                            nostrum tempore consectetur at reiciendis dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="content">
                        <h3>Opening Hours</h3>
                        <hr>
                        <p>Monday: Closed</p>
                        <p>Tue-Wed: 9AM - 10PM</p>
                        <p>Thu-Fri: 9AM - 10PM</p>
                        <p>Sat-Sun: 5PM - 10PM</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="content">
                        <h3>Contact Information</h3>
                        <hr>
                        <p>Vo Van Ngan Street, Thu Duc</p>
                        <p>+8412121212</p>
                        <p>vlnguyen@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="content">
                        <div class="submit">
                            <h3>Subscribe</h3>
                            <hr>
                            <form action="#" method="post">
                                <input type="email" name="" id="" placeholder="Email Address...">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>All right Reserved &copy; 2020 Yamifood Restaurant Design By: vanlong20it</p>
    </div>
    <!-- javascript -->
    <script src="<?php echo BASE_URL; ?>/public/font-awesome/js/all.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/apps.js"></script>
</body>

</html>