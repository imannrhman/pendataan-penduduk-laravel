
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
							<a class="nav-link dropdown-toggle active" href="#">Data Penduduk</a>
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
                <h1 class="mt-0 mb-2">Kelompok Agama</h1>
                <nav aria-label="breadcrumb">
                    <ol class="mb-0 breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url("/")}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kelompok Agama</li>
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
                        <div class="post text-center">
                            <h5 class="mb-0">STATISTIK KELOMPOK AGAMA</h5>
                            <p>RW 13 Desa Cibiru Wetan Kecataman Cileunyi Kabupaten Bandung</p>
                        </div>
                        
						<table class="table table-bordered">
                            <thead class="thead-dark" style="background: #2155CD; color: #FFFF">
                              <tr class="text-center">
                                <th scope="col">RT</th>
                                <th scope="col">Jumlah Warga</th>
                                <th colspan="2">Islam</th>
                                <th colspan="2">Kristen (Protestan)</th>\
								<th colspan="2">Kristen (Katholik)</th>
                                <th colspan="2">Hindu</th>
                                <th colspan="2">Budha</th> 
                                <th colspan="2">Kong Hu Chu</th>
                                <th colspan="2">Lainnya</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="text-center">
                                <th scope="row">1</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
								<td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                              </tr>
                              <tr class="text-center">
                                <th scope="row">2</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
								<td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                              </tr>
                              <tr class="text-center">
                                <th scope="row">3</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
								<td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                                <td>0</td>
                                <td>0%</td>
                              </tr>
                            </tbody>
                          </table>

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
						<span class="copyright">© 2021 Katen. Template by ThemeGer.</span>
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

@push('page-scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush