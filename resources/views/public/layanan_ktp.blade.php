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
						<li class="nav-item">
                            <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#">Info</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{ route('info_rw') }}">Agenda RW</a></li>
								<li><a class="dropdown-item" href="{{ route('info_rt') }}">Agenda RT</a></li>
								<li><a class="dropdown-item" href="{{ route('info_brt') }}">Berita</a></li>
							</ul>
						</li>
							<a class="nav-link" href="{{ route('about') }}">Tentang</a>
						</li>
						<li class="nav-item active">
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
                <h1 class="mt-0 mb-2">Layanan Online</h1>
                <nav aria-label="breadcrumb">
                    <ol class="mb-0 breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url("/")}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layanan Online</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

                    <div class="post post-single">
						<!-- post header -->
						<div class="post-header">
							<h1 class="title mt-0 mb-3">Layanan KTP di Kelurahan</h1>
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#"><img src="{{ asset('assets/katen/images/other/author-sm.png') }}" class="author" alt="author"/>Katen Doe</a></li>
								<li class="list-inline-item"><a href="#">Trending</a></li>
								<li class="list-inline-item">5 Juni 2022</li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<img src="{{ asset('assets/katen/images/posts/ktp.jpg') }}" alt="post-title" />
						</div>
						<!-- post content -->
						<div class="post-content clearfix">
							<h5>Syarat penerbitan KTP lama atau e-KTP baru</h5>
							<ul>
								<li>Telah berusia 17 tahun.</li>
								<li>Surat pengantar dari Rukun Tetangga (RT) dan Rukun Warga </li>
								<li>Fotokopi Kartu Keluarga</li>
								<li>Surat keterangan pindah dari kota asal (jika bukan warga asli setempat)</li>
								<li>Surat keterangan pindah dari luar negeri bagi Anda yang datang dari luar negeri karena pindah. 
                                    Surat tersebut harus dikeluarkan oleh Instansi Pelaksana bagi WNI.</li>
                                <li>Datang sendiri ke kantor Kecamatan untuk foto dan perekaman sidik jari.</li>
							</ul>
                            <h5>Syarat Perpanjang e-KTP</h5>
							<ul>
								<li>KTP yang telah habis masa berlakunya.</li>
								<li>Surat pengantar RT/ RW.</li>
								<li>Fotokopi KK.</li>
								<li>Formulir permohonan perpanjang KTP</li>
							</ul>
                            <h5>Prosedur Pembuatan/Perpanjang E-KTP</h5>
							<ol type="1">
								<li>Datanglah ke kecamatan / kelurahan pada pagi hari untuk menghindari antrian saat membuat atau memperpanjang KTP 
                                    Anda dapat datang lebih pagi ke kelurahan. </li>
								<li>Lalu berikan berkas dokumen ke petugas di loket dan Anda akan mendapatkan nomor antrian.</li>
								<li>Pengambilan data : Setelah nomor antrian dipanggil maka inilah saatnya pengambilan data Anda, awal biasanya Anda akan difoto, pengambilan tanda tangan digital, perekam data sidik jari, scan retina mata.</li>
								<li>Proses pelengkapan data akan berlangsung selama 15 menit dan proses pembuatan akan berlangsung paling lama 14 hari atau 2 minggu setelah Anda mengikuti semua persyaratan di atas.</li>
							</ol>
						</div>
                        <div class="spacer" data-height="50"></div>

                    </div>

                </div>
				<div class="col-lg-4">

					<!-- sidebar -->
					<div class="sidebar">

						<!-- widget popular posts -->
						<div class="rounded widget">
							<div class="text-center widget-header">
								<h3 class="widget-title">Layanan Lainnya</h3>
								<img src="{{ asset('assets/katen/images/wave.svg') }}" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								 <!-- post -->
                                 <div class="post post-list-sm square">
                                    <div class="thumb rounded">
                                        <a href="{{ route('layanan_kk') }}">
                                            <div class="inner">
                                                <img src="{{ asset('assets/katen/images/posts/kk.jpg') }}" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="{{ route('layanan_kk') }}">Kartu Keluarga</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm square">
                                    <div class="thumb rounded">
                                        <a href="{{ route('layanan_ak') }}">
                                            <div class="inner">
                                                <img src="{{ asset('assets/katen/images/posts/ak.jpg') }}" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="{{ route('layanan_ak') }}">Akte Kelahiran</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
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
							<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
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