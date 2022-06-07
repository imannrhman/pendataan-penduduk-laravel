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


                    <a class="navbar-brand" href="{{url("/")}}">
                        <h3>E-RW 13</h3>
                    </a>

                    <div class="collapse navbar-collapse">
                        <!-- menus -->
                        <ul class="mr-1 navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url("/")}}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle">Profil</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('struktur') }}">Struktur Organisasi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('visi') }}">Visi dan Misi</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#">Data Penduduk</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('data_kk') }}">Kepala Keluarga</a></li>
                                    <li><a class="dropdown-item" href="{{ route('data_wrg') }}">Data Warga</a></li>
                                    <li><a class="dropdown-item" href="{{ route('data_usia') }}">Kelompok Usia</a></li>
                                    <li><a class="dropdown-item" href="{{ route('data_agama') }}">Agama</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#">Info</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('info_rw') }}">Agenda RW</a></li>
                                    <li><a class="dropdown-item" href="{{ route('info_rt') }}">Agenda RT</a></li>
                                    <li><a class="dropdown-item" href="{{ route('info_brt') }}">Berita</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('layanan_ktp') }}">Layanan</a>
                            </li>
                        </ul>
                    </div>

                    <!-- header right section -->
                    <div class="header-right">
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
            <div class="text-center">
                <h3 class="m-0">Layanan Online RW 13 </h3> 
                <p>Desa Cibiru Wetan Kecataman Cileunyi Kabupaten Bandung</p>
            </div>
            <div class="container-xl">
                <div class="row gy-4">

                    <div class="col-lg-12">

                        <!-- featured post large -->
                        <div class="post featured-post-lg">
                            <div class="clearfix details">
                                <a href="#" class="category-badge">Pendidikan</a>
                                <h2 class="post-title"><a href="{{ route('info_brt') }}">Prodi Rekayasa Perangkat Lunak UPI Kampus Cibiru Bekerja Sama dengan RW 13</a></h2>
                                <ul class="mb-0 meta list-inline">
                                    <li class="list-inline-item"><a href="#">Admin</a></li>
                                    <li class="list-inline-item">5 Juni 2022</li>
                                </ul>
                            </div>
                            <a href="{{ route('info_brt') }}">
                                <div class="rounded thumb">
                                    <div class="inner data-bg-image"
                                        data-bg-image="https://scontent.fcgk8-1.fna.fbcdn.net/v/t39.30808-6/277586343_645331553560004_8058699531532527896_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=e3f864&_nc_ohc=IMpW78QnTJQAX-MvwYk&_nc_zt=23&_nc_ht=scontent.fcgk8-1.fna&oh=00_AT8lauc5xu7Xm6GcBn2SyFiLvdahUXjQoQwsbaBGPmC-FQ&oe=62A0155E">
                                    </div>
                                </div>
                            </a>
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
                            <h3 class="section-title">Berita</h3>
                        <div >
                            <img src="{{ asset('assets/katen/images/wave.svg') }}" class="wave" alt="wave" />
                        </div>
                          
                        </div>

                        <div class="rounded padding-30 bordered">
                            <div class="row gy-5">
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post">
                                        <div class="rounded thumb">
                                            <a href="category.html" class="category-badge position-absolute">Nasional</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="{{ route('info_brt') }}">
                                                <div class="inner">
                                                    <img src="{{ asset('assets/katen/images/posts/pancasila-1.jpeg') }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="mt-4 mb-0 meta list-inline">
                                            <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/katen/images/posts/tabs-1.jpg') }}"
                                                        class="author" alt="author" />Admin</a></li>
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                        <h5 class="mt-3 mb-3 post-title"><a href="{{ route('info_brt') }}">15 Unheard Ways To
                                                Achieve Greater Walker</a></h5>
                                        <p class="mb-0 excerpt">A wonderful serenity has taken possession of my entire
                                            soul, like these sweet mornings of spring which I enjoy</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="rounded thumb">
                                            <a href="{{ route('info_brt') }}">
                                                <div class="inner">
                                                    <img src="{{ asset('assets/katen/images/posts/tabs-1.jpg') }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="{{ route('info_brt') }}">3 Easy Ways To Make Your
                                                    iPhone Faster</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="rounded thumb">
                                            <a href="{{ route('info_brt') }}">
                                                <div class="inner">
                                                    <img src="{{ asset('assets/katen/images/posts/tabs-1.jpg') }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="{{ route('info_brt') }}">An Incredibly Easy
                                                    Method That Works For All</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="rounded thumb">
                                            <a href="{{ route('info_brt') }}">
                                                <div class="inner">
                                                    <img src="{{ asset('assets/katen/images/posts/tabs-1.jpg') }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="{{ route('info_brt') }}">10 Ways To Immediately
                                                    Start Selling Furniture</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="rounded thumb">
                                            <a href="{{ route('info_brt') }}">
                                                <div class="inner">
                                                    <img src="{{ asset('assets/katen/images/posts/tabs-1.jpg') }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="clearfix details">
                                            <h6 class="my-0 post-title"><a href="{{ route('info_brt') }}">15 Unheard Ways To
                                                    Achieve Greater Walker</a></h6>
                                            <ul class="mt-1 mb-0 meta list-inline">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- horizontal ads -->
                        <div class="ads-horizontal text-md-center">
                            <span class="ads-title">- Sponsored Ad -</span>
                            <a href="#">
                                <img src="{{ asset('assets/katen/images/posts/tabs-1.jpg') }} alt="Advertisement" />
                            </a>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Visi dan Misi</h3>
                            <img src="{{ asset('assets/katen/images/wave.svg') }}" class="wave" alt="wave" />
                        </div>

                        <div class="rounded padding-30 bordered">
                            <div class="row gy-5">
                                <div class="col-sm-12">
                                    <!-- post large -->
                                    <div class="post">
                                        <h5 class="mt-3 mb-3 post-title">VISI</h5>
                                        <p class="mb-0 excerpt">“Terwujudnya RW 03 sebagai wilayah yang Religius, Aman, Kreatif , Sehat dan Indah yang dilakukan secara bersama”</p>
                                    </div>
                                    <!-- post large -->
                                    <div class="post">
                                        <h5 class="mt-3 mb-3 post-title">MISI</h5>
                                        <div class="mb-0 excerpt">
                                            <ol class="list" type="1">
                                                <li>Meningkatkan peran serta warga RW 03 dalam menciptakan kebersihan, keindahan lingkungan, dan wilayah bebas banjir</li>
                                                <li>Meningkatkan kesadaran warga RW 03 tentang pentingnya kesehatan keluarga</li>
                                                <li>Meningkatkan peran aktif warga RW 01 dalam menciptakan keamanan dan ketertiban lingkungan</li>
                                                <li>Mendorong semangat kreatifitas warga untuk memajukan wilayahnya dari segala aspek sehingga menjadi RW yang maju dan terdepan</li>
                                              </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        {{-- <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Galeri Kegiatan</h3>
                            <img src="{{ asset('assets/katen/images/wave.svg') }}" class="wave" alt="wave" />
                            <div class="slick-arrows-top">
                                <button type="button" data-role="none" class="carousel-topNav-prev slick-custom-buttons"
                                    aria-label="Previous"><i class="icon-arrow-left"></i></button>
                                <button type="button" data-role="none" class="carousel-topNav-next slick-custom-buttons"
                                    aria-label="Next"><i class="icon-arrow-right"></i></button>
                            </div>
                        </div> --}}

                        {{-- <div class="row post-carousel-twoCol post-carousel">
                            <!-- post -->
                            <div class="post post-over-content col-md-6">
                                <div class="clearfix details">
                                    <a href="category.html" class="category-badge">Agenda RW</a>
                                </div>
                                <a href="{{ route('info_brt') }}">
                                    <div class="rounded thumb ">
                                        <div class="inner data-bg-image">
                                            <img class="fix-image" src="{{ asset('assets/katen/images/posts/mou-1.jpg') }} " alt="thumb" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- post -->
                            <div class="post post-over-content col-md-6">
                                <div class="clearfix details">
                                    <a href="category.html" class="category-badge">Agenda RT</a> 
                                </div>
                                <a href="{{ route('info_brt') }}">
                                    <div class="rounded thumb">
                                        <div class="inner data-bg-image">
                                            <img class="fix-image" src="https://narmadi.com/id/wp-content/uploads/2020/06/gambar-mewarnai-pemandangan.webp" alt="thumb" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- post -->
                            <div class="post post-over-content col-md-6">
                                <div class="clearfix details">
                                    <a href="category.html" class="category-badge">Agenda RW</a>
                                </div>
                                <a href="blog-single.html">
                                    <div class="rounded thumb">
                                        <div class="inner data-bg-image">
                                            <img class="fix-image" src="{{ asset('assets/katen/images/posts/mou-2.jpeg') }}" alt="thumb" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> --}}

                        {{-- <div class="spacer" data-height="50"></div> --}}

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Data Penduduk</h3>
                            <img src="{{ asset('assets/katen/images/wave.svg') }}" class="wave" alt="wave" />
                        </div>

                        <div class="rounded padding-30 bordered">
                            <div class="row">
                                <div class="col-sm-6 mb-5">
                                    <!-- post -->
                                    <div class="card border-warning">
                                        <div class="card-body">
                                          <h5 class="card-title">Kepala Keluarga</h5>
                                          <p class="card-text">Data statistik jumlah warga berdasarkan Kepala keluarga di RW 13</p>
                                          <a href="{{ route('data_kk') }}" class="btn btn-warning">Klik Di Sini</a>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-sm-6 mb-5">
                                    <!-- post -->
                                    <div class="card border-warning">
                                        <div class="card-body">
                                          <h5 class="card-title">Data Warga</h5>
                                          <p class="card-text">Data statistik jumlah Warga berdasarkan di RW 13</p>
                                          <a href="{{ route('data_wrg') }}" class="btn btn-warning">Klik Di Sini</a>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-sm-6 mb-5">
                                    <!-- post -->
                                    <div class="card border-warning">
                                        <div class="card-body">
                                          <h5 class="card-title">Kelompok Usia</h5>
                                          <p class="card-text">Data statistik jumlah warga berdasarkan kelompok usia di RW 13</p>
                                          <a href="{{ route('data_usia') }}" class="btn btn-warning">Klik Di Sini</a>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-sm-6 mb-5">
                                    <!-- post -->
                                    <div class="card border-warning">
                                        <div class="card-body">
                                          <h5 class="card-title">Agama</h5>
                                          <p class="card-text">Data statistik jumlah warga berdasarkan Kelompok agama di RW 13</p>
                                          <a href="{{ route('data_agama') }}" class="btn btn-warning">Klik Di Sini</a>
                                        </div>
                                      </div>
                                </div>
                            </div>

                            <!-- load more button -->
                            {{-- <div class="text-center">
                                <button class="btn btn-simple">Load More</button>
                            </div> --}}
                        </div>
                        <div class="spacer" data-height="50"></div>

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Form Keluhan</h3>
                            <img src="{{ asset('assets/katen/images/wave.svg') }}" class="wave" alt="wave" />
                        </div>

                        <div class="rounded padding-30 bordered">
                            <div class="row gy-5">
                                <div class="col-sm-12">
                                    <!-- post large -->
                                    <div class="post">
                                        <form id="comment-form" class="comment-form" method="post">
                                            <div class="messages"></div>
                                            <div class="row">
                                                <div class="column col-md-12">
                                                    <!-- Comment textarea -->
                                                    <div class="form-group">
                                                        <textarea name="InputComment" id="InputComment" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
                                                    </div>
                                                </div>
                                        
                                            </div>
                    
                                            <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button><!-- Submit Button -->
                    
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- sidebar -->
                        <div class="sidebar">
                            <!-- widget about -->
                            <div class="rounded widget">
                                <div class="text-center widget-about data-bg-image" data-bg-image="images/map-bg.png">
                                    <h1 class="mb-0">E-RW 13</h1>
                                    <img src="{{ asset('assets/katen/images/wave.svg') }}" class="wave" alt="wave" />
                                    <p class="mb-4">Merupakan layanan online yang dibuat untuk membantu perangkat sekretariat RW dalam pengelolaan data penduduk RW 13 Desa Cibiru Wetan serta warga untuk mendapatkan informasi yang dapat digunakan kapan dan di mana saja melalui suatu perangkat.</p>
                                </div>
                            </div>

                            <!-- widget popular posts -->
                            {{-- <div class="rounded widget">
                                <div class="text-center widget-header">
                                    <h3 class="widget-title">Layanan Publik</h3>
                                    <img src="{{ asset('assets/katen/images/wave.svg') }}" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">1</span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="{{ asset('assets/katen/images/posts/tabs-1.jpg') }}" alt="post-title" />
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
                                                    <img src="{{ asset('assets/katen/images/posts/tabs-1.jpg') }}" alt="post-title" />
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
                                                    <img src="{{ asset('assets/katen/images/posts/tabs-1.jpg') }}" alt="post-title" />
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
                            </div> --}}

                            <!-- widget categories -->
						    <div class="widget rounded">
							    <div class="widget-header text-center">
								    <h3 class="widget-title">Layanan</h3>
								    <img src="{{ asset('assets/katen/images/wave.svg') }}" class="wave" alt="wave" />
							    </div>
							    <div class="widget-content">
								    <ul class="list">
									    <li><a href="{{ route('layanan_ktp') }}">E-KTP</a></li>
									    <li><a href="{{ route('layanan_kk') }}">Kartu Keluarga</a></li>
									    <li><a href="{{ route('layanan_ak') }}">Akta Kelahiran</a></li>
								    </ul>
							    </div>
						    </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Galer --}}
            <!-- instagram feed -->
	<div class="instagram">
		<div class="container-xl">
            <div class="section-header">
                <h3 class="text-center">Galeri Kegiatan</h3>
            </div>
			<!-- images -->
			<div class="instagram-feed d-flex flex-wrap">
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('assets/katen/images/posts/mou-1.jpg') }}" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('assets/katen/images/posts/mou-2.jpeg') }}" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('assets/katen/images/posts/mou-1.jpg') }}" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('assets/katen/images/posts/mou-2.jpeg') }}" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('assets/katen/images/posts/mou-1.jpg') }}" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('assets/katen/images/posts/mou-2.jpeg') }}" alt="insta-title" />
					</a>
				</div>
			</div>
		</div>
	</div>

        </section>
        <div class="w-full">
            <div class="text-center">
                <h3>Lokasi Kami</h3>
            </div>
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
            <h1>E-RW 13</h1>
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class="active"><a href="{{url("/")}}l">Home</a></li>
                <li >
                    <a href="#">Profil</a>
                    <ul class="submenu">
                        <li><a href="{{ route('struktur') }}">Struktur Organisasi</a></li>
                        <li><a href="{{ route('visi') }}">Visi dan Misi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Data Penduduk</a>
                    <ul class="submenu">
                        <li><a href="{{ route('data_kk') }}">Kepala Keluarga</a></li>
                        <li><a href="{{ route('data_wrg') }}">Data Warga</a></li>
                        <li><a href="{{ route('data_usia') }}">Kelompok Usia</a></li>
                        <li><a href="{{ route('data_agama') }}">Agama</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Info</a>
                    <ul class="submenu">
                        <li><a href="{{ route('info_rw') }}">Agenda RW</a></li>
                        <li><a href="{{ route('info_rt') }}">Agenda RT</a></li>
                        <li><a href="{{ route('info_brt') }}">Berita</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('about') }}">Tentang</a>
                </li>
                <li>
                    <a href="contact.html"href="{{ route('layanan_ktp') }}">Layanan</a>
                </li>
            </ul>
        </nav>
       
        <!-- social icons -->
        <ul class="mt-auto mb-0 social-icons list-unstyled list-inline w-100">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
@endsection
