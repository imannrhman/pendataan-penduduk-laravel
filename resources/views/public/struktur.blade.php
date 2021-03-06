
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
						<li class="nav-item">
							<a class="nav-link" href="{{url("/")}}">Home</a>
						</li>
						<li class="nav-item dropdown active">
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

    <!-- page header -->
    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Struktur Organisasi</h1>
                <nav aria-label="breadcrumb">
                    <ol class="mb-0 breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url("/")}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-12">

                    <div class="rounded page-content bordered padding-30">
						<div class="d-flex justify-content-center">
							<img src="{{ asset('assets/katen/images/profile/struktur.jpg') }}" alt="Katen Doe" class="mb-4 rounded" />
						</div>

                        <p>Hello, I???m a content writer who is fascinated by content fashion, celebrity and lifestyle. She helps clients bring the right content to the right people.</p>

                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        
                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn???t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>

                        <hr class="my-4" />
                    </div>

                </div>
			</div>

		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container-xl">
			<div class="footer-inner">
				<div class="row d-flex align-items-center gy-4">
					<!-- copyright text -->
					<div class="col-md-4">
						<span class="copyright">?? 2021 Katen. Template by ThemeGer.</span>
					</div>

					<!-- social icons -->
					<div class="text-center col-md-4">
						<ul class="mb-0 social-icons list-unstyled list-inline">
							<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>

					<!-- go to top button -->
					<div class="col-md-4">
						<a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
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
			<input class="form-control me-2" type="search" placeholder="Search and press enter ..." aria-label="Search">
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

