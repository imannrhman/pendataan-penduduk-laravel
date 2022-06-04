@extends('layouts.public')

@section('content')
    <!-- site wrapper -->
    <div class="site-wrapper">

        <div class="main-overlay"></div>

        <!-- header -->
        <header class="header-default">
            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">
                    <!-- site logo -->


                    <a class="navbar-brand" href="index.html">
                        <h3>E-RW 13</h3>
                    </a>

                    <div class="collapse navbar-collapse">
                        <!-- menus -->
                        <ul class="mr-auto navbar-nav">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="index.html">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.html">Magazine</a></li>
                                    <li><a class="dropdown-item" href="personal.html">Personal</a></li>
                                    <li><a class="dropdown-item" href="personal-alt.html">Personal Alt</a></li>
                                    <li><a class="dropdown-item" href="minimal.html">Minimal</a></li>
                                    <li><a class="dropdown-item" href="classic.html">Classic</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.html">Lifestyle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.html">Inspiration</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="category.html">Category</a></li>
                                    <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                    <li><a class="dropdown-item" href="blog-single-alt.html">Blog Single Alt</a></li>
                                    <li><a class="dropdown-item" href="about.html">About</a></li>
                                    <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- header right section -->
                    <div class="header-right">
                        <!-- social icons -->
                        <ul class="mb-0 social-icons list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <!-- header buttons -->
                        <div class="header-buttons">
                            <button class="search icon-button">
                                <i class="icon-magnifier"></i>
                            </button>
                            <button class="burger-menu icon-button">
                                <span class="burger-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- hero section -->
        <section id="hero">

            <div class="container-xl">

                <div class="row gy-4">

                    <div class="col-lg-8">

                        <!-- featured post large -->
                        <div class="post featured-post-lg">
                            <div class="clearfix details">
                                <a href="category.html" class="category-badge">Inspiration</a>
                                <h2 class="post-title"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into
                                        Success</a></h2>
                                <ul class="mb-0 meta list-inline">
                                    <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                    <li class="list-inline-item">29 March 2021</li>
                                </ul>
                            </div>
                            <a href="blog-single.html">
                                <div class="rounded thumb">
                                    <div class="inner data-bg-image"
                                        data-bg-image="https://scontent.fcgk8-1.fna.fbcdn.net/v/t39.30808-6/277586343_645331553560004_8058699531532527896_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=e3f864&_nc_ohc=IMpW78QnTJQAX-MvwYk&_nc_zt=23&_nc_ht=scontent.fcgk8-1.fna&oh=00_AT8lauc5xu7Xm6GcBn2SyFiLvdahUXjQoQwsbaBGPmC-FQ&oe=62A0155E">
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <!-- post tabs -->
                        <div class="rounded post-tabs bordered">
                            <!-- tab navs -->
                            <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                                <li class="nav-item" role="presentation"><button aria-controls="popular"
                                        aria-selected="true" class="nav-link active" data-bs-target="#popular"
                                        data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Popular</button></li>
                                <li class="nav-item" role="presentation"><button aria-controls="recent"
                                        aria-selected="false" class="nav-link" data-bs-target="#recent"
                                        data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Recent</button></li>
                            </ul>
                            <!-- tab contents -->
                            <div class="tab-content" id="postsTabContent">
                                <!-- loader -->
                                <div class="lds-dual-ring"></div>
                                <!-- popular posts -->
                                <div aria-labelledby="popular-tab" class="tab-pane fade show active" id="popular"
                                    role="tabpanel">
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="{{ asset('assets/katen/images/posts/tabs-1.jpg') }}"
                                                        alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">3 Easy Ways To Make Your
                                                    iPhone Faster</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-2.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">An Incredibly Easy Method
                                                    That Works For All</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-3.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">10 Ways To Immediately
                                                    Start Selling Furniture</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-4.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">15 Unheard Ways To
                                                    Achieve Greater Walker</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- recent posts -->
                                <div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-2.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">An Incredibly Easy
                                                    Method That Works For All</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-1.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">3 Easy Ways To Make Your
                                                    iPhone Faster</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-4.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">15 Unheard Ways To
                                                    Achieve Greater Walker</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-3.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">10 Ways To Immediately
                                                    Start Selling Furniture</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!-- section main content -->
        <section class="main-content">
            <div class="container-xl">

                <div class="row gy-4">

                    <div class="col-lg-8">

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Editor’s Pick</h3>
                            <img src="images/wave.svg" class="wave" alt="wave" />
                        </div>

                        <div class="rounded padding-30 bordered">
                            <div class="row gy-5">
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post">
                                        <div class="rounded thumb">
                                            <a href="category.html" class="category-badge position-absolute">Lifestyle</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/editor-lg.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="mt-4 mb-0 meta list-inline">
                                            <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png"
                                                        class="author" alt="author" />Katen Doe</a></li>
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                        <h5 class="mt-3 mb-3 post-title"><a href="blog-single.html">15 Unheard Ways To
                                                Achieve Greater Walker</a></h5>
                                        <p class="mb-0 excerpt">A wonderful serenity has taken possession of my entire
                                            soul, like these sweet mornings of spring which I enjoy</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/editor-sm-1.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">3 Easy Ways To Make Your
                                                    iPhone Faster</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/editor-sm-2.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">An Incredibly Easy
                                                    Method That Works For All</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/editor-sm-3.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">10 Ways To Immediately
                                                    Start Selling Furniture</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/editor-sm-4.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">15 Unheard Ways To
                                                    Achieve Greater Walker</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <!-- horizontal ads -->
                        <div class="ads-horizontal text-md-center">
                            <span class="ads-title">- Sponsored Ad -</span>
                            <a href="#">
                                <img src="images/ads/ad-750.png" alt="Advertisement" />
                            </a>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Trending</h3>
                            <img src="images/wave.svg" class="wave" alt="wave" />
                        </div>

                        <div class="rounded padding-30 bordered">
                            <div class="row gy-5">
                                <div class="col-sm-6">
                                    <!-- post large -->
                                    <div class="post">
                                        <div class="rounded thumb">
                                            <a href="category.html" class="category-badge position-absolute">Culture</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/trending-lg-1.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="mt-4 mb-0 meta list-inline">
                                            <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png"
                                                        class="author" alt="author" />Katen Doe</a></li>
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                        <h5 class="mt-3 mb-3 post-title"><a href="blog-single.html">Facts About Business
                                                That Will Help You Success</a></h5>
                                        <p class="mb-0 excerpt">A wonderful serenity has taken possession of my entire
                                            soul, like these sweet mornings of spring which I enjoy</p>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square before-seperator">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/trending-sm-1.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">3 Easy Ways To Make Your
                                                    iPhone Faster</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square before-seperator">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/trending-sm-2.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">An Incredibly Easy
                                                    Method That Works For All</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- post large -->
                                    <div class="post">
                                        <div class="rounded thumb">
                                            <a href="category.html"
                                                class="category-badge position-absolute">Inspiration</a>
                                            <span class="post-format">
                                                <i class="icon-earphones"></i>
                                            </span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="{{ asset('assets/katen/image/IMG_20220513_130559.jpg') }}"
                                                        alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="mt-4 mb-0 meta list-inline">
                                            <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png"
                                                        class="author" alt="author" />Katen Doe</a></li>
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                        <h5 class="mt-3 mb-3 post-title"><a href="blog-single.html">5 Easy Ways You Can
                                                Turn Future Into Success</a></h5>
                                        <p class="mb-0 excerpt">A wonderful serenity has taken possession of my entire
                                            soul, like these sweet mornings of spring which I enjoy</p>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square before-seperator">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/trending-sm-3.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">Here Are 8 Ways To
                                                    Success Faster</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square before-seperator">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/trending-sm-4.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">Master The Art Of Nature
                                                    With These 7 Tips</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Inspiration</h3>
                            <img src="images/wave.svg" class="wave" alt="wave" />
                            <div class="slick-arrows-top">
                                <button type="button" data-role="none" class="carousel-topNav-prev slick-custom-buttons"
                                    aria-label="Previous"><i class="icon-arrow-left"></i></button>
                                <button type="button" data-role="none" class="carousel-topNav-next slick-custom-buttons"
                                    aria-label="Next"><i class="icon-arrow-right"></i></button>
                            </div>
                        </div>

                        <div class="row post-carousel-twoCol post-carousel">
                            <!-- post -->
                            <div class="post post-over-content col-md-6">
                                <div class="clearfix details">
                                    <a href="category.html" class="category-badge">Inspiration</a>
                                    <h4 class="post-title"><a href="blog-single.html">Want To Have A More Appealing
                                            Tattoo?</a></h4>
                                    <ul class="mb-0 meta list-inline">
                                        <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                </div>
                                <a href="blog-single.html">
                                    <div class="rounded thumb">
                                        <div class="inner">
                                            <img src="images/posts/inspiration-1.jpg" alt="thumb" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- post -->
                            <div class="post post-over-content col-md-6">
                                <div class="clearfix details">
                                    <a href="category.html" class="category-badge">Inspiration</a>
                                    <h4 class="post-title"><a href="blog-single.html">Feel Like A Pro With The Help Of
                                            These 7 Tips</a></h4>
                                    <ul class="mb-0 meta list-inline">
                                        <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                </div>
                                <a href="blog-single.html">
                                    <div class="rounded thumb">
                                        <div class="inner">
                                            <img src="images/posts/inspiration-2.jpg" alt="thumb" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- post -->
                            <div class="post post-over-content col-md-6">
                                <div class="clearfix details">
                                    <a href="category.html" class="category-badge">Inspiration</a>
                                    <h4 class="post-title"><a href="blog-single.html">Your Light Is About To Stop Being
                                            Relevant</a></h4>
                                    <ul class="mb-0 meta list-inline">
                                        <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                </div>
                                <a href="blog-single.html">
                                    <div class="rounded thumb">
                                        <div class="inner">
                                            <img src="images/posts/inspiration-3.jpg" alt="thumb" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Latest Posts</h3>
                            <img src="images/wave.svg" class="wave" alt="wave" />
                        </div>

                        <div class="rounded padding-30 bordered">

                            <div class="row">

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="clearfix post post-list">
                                        <div class="rounded thumb">
                                            <span class="post-format-sm">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/latest-sm-1.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="mb-3 meta list-inline">
                                                <li class="list-inline-item"><a href="#"><img
                                                            src="images/other/author-sm.png" class="author"
                                                            alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Trending</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="blog-single.html">The Next 60 Things To
                                                    Immediately Do About Building</a></h5>
                                            <p class="mb-0 excerpt">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="clearfix post-bottom d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="mb-0 icons list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="blog-single.html"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="clearfix post post-list">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/latest-sm-2.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="mb-3 meta list-inline">
                                                <li class="list-inline-item"><a href="#"><img
                                                            src="images/other/author-sm.png" class="author"
                                                            alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Lifestyle</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="blog-single.html">Master The Art Of Nature
                                                    With These 7 Tips</a></h5>
                                            <p class="mb-0 excerpt">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="clearfix post-bottom d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="mb-0 icons list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="blog-single.html"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="clearfix post post-list">
                                        <div class="rounded thumb">
                                            <span class="post-format-sm">
                                                <i class="icon-camrecorder"></i>
                                            </span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/latest-sm-3.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="mb-3 meta list-inline">
                                                <li class="list-inline-item"><a href="#"><img
                                                            src="images/other/author-sm.png" class="author"
                                                            alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Fashion</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="blog-single.html">Facts About Business That
                                                    Will Help You Success</a></h5>
                                            <p class="mb-0 excerpt">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="clearfix post-bottom d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="mb-0 icons list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="blog-single.html"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="clearfix post post-list">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/latest-sm-4.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="mb-3 meta list-inline">
                                                <li class="list-inline-item"><a href="#"><img
                                                            src="images/other/author-sm.png" class="author"
                                                            alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Politic</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="blog-single.html">Your Light Is About To
                                                    Stop Being Relevant</a></h5>
                                            <p class="mb-0 excerpt">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="clearfix post-bottom d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="mb-0 icons list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="blog-single.html"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- load more button -->
                            <div class="text-center">
                                <button class="btn btn-simple">Load More</button>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4">

                        <!-- sidebar -->
                        <div class="sidebar">
                            <!-- widget about -->
                            <div class="rounded widget">
                                <div class="text-center widget-about data-bg-image" data-bg-image="images/map-bg.png">
                                    <h1>E-RW 13</h1>
                                    <p class="mb-4">Hello, We’re content writer who is fascinated by content
                                        fashion, celebrity and lifestyle. We helps clients bring the right content to the
                                        right people.</p>
                                    <ul class="mb-0 social-icons list-unstyled list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- widget popular posts -->
                            <div class="rounded widget">
                                <div class="text-center widget-header">
                                    <h3 class="widget-title">Popular Posts</h3>
                                    <img src="images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">1</span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-1.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">3 Easy Ways To Make Your
                                                    iPhone Faster</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">2</span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-2.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">An Incredibly Easy
                                                    Method That Works For All</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">3</span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-3.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="blog-single.html">10 Ways To Immediately
                                                    Start Selling Furniture</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- widget categories -->
                            <div class="rounded widget">
                                <div class="text-center widget-header">
                                    <h3 class="widget-title">Explore Topics</h3>
                                    <img src="images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Lifestyle</a><span>(5)</span></li>
                                        <li><a href="#">Inspiration</a><span>(2)</span></li>
                                        <li><a href="#">Fashion</a><span>(4)</span></li>
                                        <li><a href="#">Politic</a><span>(1)</span></li>
                                        <li><a href="#">Trending</a><span>(7)</span></li>
                                        <li><a href="#">Culture</a><span>(3)</span></li>
                                    </ul>
                                </div>

                            </div>

                            <!-- widget newsletter -->
                            <div class="rounded widget">
                                <div class="text-center widget-header">
                                    <h3 class="widget-title">Newsletter</h3>
                                    <img src="images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <span class="mb-3 text-center newsletter-headline">Join 70,000 subscribers!</span>
                                    <form>
                                        <div class="mb-2">
                                            <input class="text-center form-control w-100" placeholder="Email address…"
                                                type="email">
                                        </div>
                                        <button class="btn btn-default btn-full" type="submit">Sign Up</button>
                                    </form>
                                    <span class="mt-3 text-center newsletter-privacy">By signing up, you agree to our <a
                                            href="#">Privacy Policy</a></span>
                                </div>
                            </div>

                            <!-- widget post carousel -->
                            <div class="rounded widget">
                                <div class="text-center widget-header">
                                    <h3 class="widget-title">Celebration</h3>
                                    <img src="images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <div class="post-carousel-widget">
                                        <!-- post -->
                                        <div class="post post-carousel">
                                            <div class="rounded thumb">
                                                <a href="category.html" class="category-badge position-absolute">How to</a>
                                                <a href="blog-single.html">
                                                    <div class="inner">
                                                        <img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="mt-4 mb-0 post-title"><a href="blog-single.html">5 Easy Ways You Can
                                                    Turn Future Into Success</a></h5>
                                            <ul class="mt-2 mb-0 meta list-inline">
                                                <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                        <!-- post -->
                                        <div class="post post-carousel">
                                            <div class="rounded thumb">
                                                <a href="category.html"
                                                    class="category-badge position-absolute">Trending</a>
                                                <a href="blog-single.html">
                                                    <div class="inner">
                                                        <img src="images/widgets/widget-carousel-2.jpg" alt="post-title" />
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="mt-4 mb-0 post-title"><a href="blog-single.html">Master The Art Of
                                                    Nature With These 7 Tips</a></h5>
                                            <ul class="mt-2 mb-0 meta list-inline">
                                                <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                        <!-- post -->
                                        <div class="post post-carousel">
                                            <div class="rounded thumb">
                                                <a href="category.html" class="category-badge position-absolute">How to</a>
                                                <a href="blog-single.html">
                                                    <div class="inner">
                                                        <img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="mt-4 mb-0 post-title"><a href="blog-single.html">5 Easy Ways You Can
                                                    Turn Future Into Success</a></h5>
                                            <ul class="mt-2 mb-0 meta list-inline">
                                                <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- carousel arrows -->
                                    <div class="slick-arrows-bot">
                                        <button type="button" data-role="none"
                                            class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i
                                                class="icon-arrow-left"></i></button>
                                        <button type="button" data-role="none"
                                            class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i
                                                class="icon-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- widget advertisement -->
                            <div class="rounded widget no-container text-md-center">
                                <span class="ads-title">- Sponsored Ad -</span>
                                <a href="#" class="widget-ads">
                                    <img src="images/ads/ad-360.png" alt="Advertisement" />
                                </a>
                            </div>

                            <!-- widget tags -->
                            <div class="rounded widget">
                                <div class="text-center widget-header">
                                    <h3 class="widget-title">Tag Clouds</h3>
                                    <img src="images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <a href="#" class="tag">#Trending</a>
                                    <a href="#" class="tag">#Video</a>
                                    <a href="#" class="tag">#Featured</a>
                                    <a href="#" class="tag">#Gallery</a>
                                    <a href="#" class="tag">#Celebrities</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <div class="w-full">
            <div class="w-full m-10 mapoutew">
                <div class="w-full gmap_canvas">
                    <iframe class="w-full" width="100%" height="276" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Cibiru%20Indah%201&t=k&z=17&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <style>
                        .mapouter {
                            position: relative;  
                        }
                    </style>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                           
                        }

                    </style>
                </div>
            </div>
        </div>


        <!-- footer -->
        <footer>
            <div class="container-xl">
                <div class="footer-inner">
                    <div class="row d-flex align-items-center gy-4">
                        <!-- copyright text -->
                        <div class="col-md-4">
                            <span class="copyright">© 2021 Katen. Template by ThemeGer.</span>
                        </div>

                        <!-- social icons -->
                        <div class="text-center col-md-4">
                            <ul class="mb-0 social-icons list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>

                        <!-- go to top button -->
                        <div class="col-md-4">
                            <a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to
                                Top</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- end site wrapper -->

    <!-- search popup area -->
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="search-content">
            <div class="text-center">
                <h3 class="mt-0 mb-4">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form">
                <input class="form-control me-2" type="search" placeholder="Search and press enter ..."
                    aria-label="Search">
                <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img src="images/logo.svg" alt="Katen" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class="active">
                    <a href="index.html">Home</a>
                    <ul class="submenu">
                        <li><a href="index.html">Magazine</a></li>
                        <li><a href="personal.html">Personal</a></li>
                        <li><a href="personal-alt.html">Personal Alt</a></li>
                        <li><a href="minimal.html">Minimal</a></li>
                        <li><a href="classic.html">Classic</a></li>
                    </ul>
                </li>
                <li><a href="category.html">Lifestyle</a></li>
                <li><a href="category.html">Inspiration</a></li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="submenu">
                        <li><a href="category.html">Category</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="blog-single-alt.html">Blog Single Alt</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>

        <!-- social icons -->
        <ul class="mt-auto mb-0 social-icons list-unstyled list-inline w-100">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
@endsection
