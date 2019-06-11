<?php
$is_auth = (bool)rand(0, 1);
$data = [
    [
        'link' => "blog.html",
        'img' => "assets/images/blog-1.jpg",
        'category' => "Travel",
        'title' => "Home is peaceful place",
        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
        'author' => "Rubel",
        'date' => "February 12, 2019"
    ],
    [
        'link' => "blog.html",
        'img' => "assets/images/abc.jpg",
        'category' => "craft",
        'title' => "wooden table is beautiful",
        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
        'author' => "Rubel",
        'date' => "February 10, 2019"
    ],
    [
        'link' => "blog.html",
        'img' => "assets/images/blog-2.jpg",
        'category' => "Lifestyle",
        'title' => "Small work station",
        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
        'author' => "Rubel",
        'date' => "February 12, 2018"
    ],
    [
        'link' => "blog.html",
        'img' => "assets/images/blog-3.jpg",
        'category' => "Mission",
        'title' => "Waiting to launch on the sky",
        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
        'author' => "Rubel",
        'date' => "February 12, 2018"
    ],
    [
        'link' => "blog.html",
        'img' => "assets/images/blog-4.jpg",
        'category' => "Cloth",
        'title' => "A day labour wore jeans",
        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
        'author' => "Rubel",
        'date' => "February 12, 2018"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon icon -->

    <title>Blog</title>

    <!-- common css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

</head>

<body>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a href="#">Homepage</a></li>
                    <li><a href="about-me.html">ABOUT ME </a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>

                <ul class="nav navbar-nav text-uppercase pull-right">
                    <?php
                    if ($is_auth == true) {
                        ?>
                        <li><a href="contact.html">My profile</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="#">Register</a></li>
                        <li><a href="about-me.html">Login</a></li>
                    <?php
                    }
                    ?>


                </ul>

            </div>
            <!-- /.navbar-collapse -->


            <div class="show-search">
                <form role="search" method="get" id="searchform" action="#">
                    <div>
                        <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>


<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                foreach ($data as $pop) {
                    ?>
                    <article class="post">
                        <div class="post-thumb">
                            <a href="<?=$pop["link"]?>"><img src="<?=$pop["img"]?>" alt=""></a>

                            <a href="<?=$pop["link"]?>" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">View Post</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="#"> <?=$pop["category"]?></a></h6>

                                <h1 class="entry-title"><a href="blog.html"><?=$pop["title"]?></a></h1>


                            </header>
                            <div class="entry-content">
                                <p><?=$pop["text"]?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?=$pop["link"]?> class="more-link">Continue Reading</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">By <a href="#"><?=$pop["author"]?></a> <?=$pop["date"]?></span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article><?php
                }?>
<!--                <article class="post">-->
<!--                    <div class="post-thumb">-->
<!--                        <a href="blog.html"><img src="assets/images/abc.jpg" alt=""></a>-->
<!---->
<!--                        <a href="blog.html" class="post-thumb-overlay text-center">-->
<!--                            <div class="text-uppercase text-center">View Post</div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="post-content">-->
<!--                        <header class="entry-header text-center text-uppercase">-->
<!--                            <h6><a href="#">craft</a></h6>-->
<!---->
<!--                            <h1 class="entry-title"><a href="blog.html">wooden table is beautiful</a></h1>-->
<!---->
<!---->
<!--                        </header>-->
<!--                        <div class="entry-content">-->
<!--                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod-->
<!--                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et-->
<!--                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem-->
<!--                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy-->
<!--                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.-->
<!--                            </p>-->
<!---->
<!--                            <div class="btn-continue-reading text-center text-uppercase">-->
<!--                                <a href="blog.html" class="more-link">Continue Reading</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="social-share">-->
<!--                            <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> On February 12, 2016</span>-->
<!--                            <ul class="text-center pull-right">-->
<!--                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </article>-->
<!--                <article class="post">-->
<!--                    <div class="post-thumb">-->
<!--                        <a href="blog.html"><img src="assets/images/blog-2.jpg" alt=""></a>-->
<!---->
<!--                        <a href="blog.html" class="post-thumb-overlay text-center">-->
<!--                            <div class="text-uppercase text-center">View Post</div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="post-content">-->
<!--                        <header class="entry-header text-center text-uppercase">-->
<!--                            <h6><a href="#"> Lifestyle</a></h6>-->
<!---->
<!--                            <h1 class="entry-title"><a href="blog.html">Small work station</a></h1>-->
<!---->
<!---->
<!--                        </header>-->
<!--                        <div class="entry-content">-->
<!--                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod-->
<!--                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et-->
<!--                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem-->
<!--                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy-->
<!--                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.-->
<!--                            </p>-->
<!---->
<!--                            <div class="btn-continue-reading text-center text-uppercase">-->
<!--                                <a href="blog.html" class="more-link">Continue Reading</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="social-share">-->
<!--                            <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> On February 12, 2016</span>-->
<!--                            <ul class="text-center pull-right">-->
<!--                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </article>-->
<!--                <article class="post">-->
<!--                    <div class="post-thumb">-->
<!--                        <a href="blog.html"><img src="assets/images/blog-3.jpg" alt=""></a>-->
<!---->
<!--                        <a href="blog.html" class="post-thumb-overlay text-center">-->
<!--                            <div class="text-uppercase text-center">View Post</div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="post-content">-->
<!--                        <header class="entry-header text-center text-uppercase">-->
<!--                            <h6><a href="#"> Mission</a></h6>-->
<!---->
<!--                            <h1 class="entry-title"><a href="blog.html">Waiting to launch on the sky</a></h1>-->
<!---->
<!---->
<!--                        </header>-->
<!--                        <div class="entry-content">-->
<!--                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod-->
<!--                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et-->
<!--                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem-->
<!--                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy-->
<!--                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.-->
<!--                            </p>-->
<!---->
<!--                            <div class="btn-continue-reading text-center text-uppercase">-->
<!--                                <a href="blog.html" class="more-link">Continue Reading</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="social-share">-->
<!--                            <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> On February 12, 2016</span>-->
<!--                            <ul class="text-center pull-right">-->
<!--                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </article>-->
<!---->
<!--                <article class="post">-->
<!--                    <div class="post-thumb">-->
<!--                        <a href="blog.html"><img src="assets/images/blog-4.jpg" alt=""></a>-->
<!---->
<!--                        <a href="blog.html" class="post-thumb-overlay text-center">-->
<!--                            <div class="text-uppercase text-center">View Post</div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="post-content">-->
<!--                        <header class="entry-header text-center text-uppercase">-->
<!--                            <h6><a href="#"> Cloth</a></h6>-->
<!---->
<!--                            <h1 class="entry-title"><a href="blog.html">A day labour wore jeans</a></h1>-->
<!---->
<!---->
<!--                        </header>-->
<!--                        <div class="entry-content">-->
<!--                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod-->
<!--                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et-->
<!--                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem-->
<!--                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy-->
<!--                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.-->
<!--                            </p>-->
<!---->
<!--                            <div class="btn-continue-reading text-center text-uppercase">-->
<!--                                <a href="blog.html" class="more-link">Continue Reading</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="social-share">-->
<!--                            <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> On February 12, 2016</span>-->
<!--                            <ul class="text-center pull-right">-->
<!--                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                    </div>
<!--                </article>-->
                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <aside class="widget news-letter">
                        <h3 class="widget-title text-uppercase text-center">Get Newsletter</h3>

                        <form action="#">
                            <input type="email" placeholder="Your email address">
                            <input type="submit" value="Subscribe Now"
                                   class="text-uppercase text-center btn btn-subscribe">
                        </form>

                    </aside>
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="assets/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>

                            </div>
                        </div>
                        <div class="popular-post">

                            <a href="#" class="popular-img"><img src="assets/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="assets/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Featured Posts</h3>

                        <div id="widget-feature" class="owl-carousel">
                            <div class="item">
                                <div class="feature-content">
                                    <img src="assets/images/p1.jpg" alt="">

                                    <a href="#" class="overlay-text text-center">
                                        <h5 class="text-uppercase">Home is peaceful</h5>

                                        <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feature-content">
                                    <img src="assets/images/p2.jpg" alt="">

                                    <a href="#" class="overlay-text text-center">
                                        <h5 class="text-uppercase">Home is peaceful</h5>

                                        <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feature-content">
                                    <img src="assets/images/p3.jpg" alt="">

                                    <a href="#" class="overlay-text text-center">
                                        <h5 class="text-uppercase">Home is peaceful</h5>

                                        <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="assets/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="assets/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="assets/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="assets/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Food & Drinks</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Travel</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Business</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Story</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">DIY & Tips</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
<!--footer start-->
<div id="footer">
    <div class="footer-instagram-section">
        <h3 class="footer-instagram-title text-center text-uppercase">Instagram</h3>

        <div id="footer-instagram" class="owl-carousel">

            <div class="item">
                <a href="#"><img src="assets/images/ins-1.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="assets/images/ins-2.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="assets/images/ins-3.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="assets/images/ins-4.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="assets/images/ins-5.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="assets/images/ins-6.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="assets/images/ins-7.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="assets/images/ins-8.jpg" alt=""></a>
            </div>

        </div>
    </div>
</div>

<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img"><img src="assets/images/footer-logo.png" alt=""></div>
                    <div class="about-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed voluptua. At vero eos et
                        accusam et justo duo dlores et ea rebum magna text ar koto din.
                    </div>
                    <div class="address">
                        <h4 class="text-uppercase">contact Info</h4>

                        <p> 142/5 BC Street, ES, VSA</p>

                        <p> Phone: +123 456 78900</p>

                        <p>rahim@marlindev.ru</p>
                    </div>
                </aside>
            </div>

            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Testimonials</h3>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!--Indicator-->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                            tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                            vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                            magna aliquyam eratma</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="assets/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Sophia</h4>

                                            <h4>Client, Tech</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                            tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                            vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                            magna aliquyam eratma</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="assets/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Sophia</h4>

                                            <h4>Client, Tech</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                            tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                            vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                            magna aliquyam eratma</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="assets/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Sophia</h4>

                                            <h4>Client, Tech</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Custom Category Post</h3>


                    <div class="custom-post">
                        <div>
                            <a href="#"><img src="assets/images/footer-img.png" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="text-uppercase">Home is peaceful Place</a>
                            <span class="p-date">February 15, 2016</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2017 <a href="#">Blog, </a> Designed with <i
                                class="fa fa-heart"></i> by <a href="#">Marlin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- js files -->
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.stickit.min.js"></script>
<script type="text/javascript" src="assets/js/menu.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html>