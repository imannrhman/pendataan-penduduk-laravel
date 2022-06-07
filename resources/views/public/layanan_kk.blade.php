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
							<a class="nav-link " href="{{ route('layanan_ktp') }}">Layanan</a>
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
							<h1 class="title mt-0 mb-3">Layanan Kartu Keluarga di Kelurahan</h1>
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#"><img src="{{ asset('assets/katen/images/other/author-sm.png') }}" class="author" alt="author"/>Katen Doe</a></li>
								<li class="list-inline-item"><a href="#">Trending</a></li>
								<li class="list-inline-item">5 Juni 2022</li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<img src="{{ asset('assets/katen/images/posts/kk.jpg') }}" alt="post-title" />
						</div>
						<!-- post content -->
						<div class="post-content clearfix">
							<h5>Cara membuat Kartu Keluarga</h5>
                            <p class="mb-0">Berikut cara membuat kartu keluarga yang harus dilakukan:</p>
							<ol type="1">
								<li>Meminta surat pengantar pembuatan kartu keluarga baru di Ketua RT setempat</li>
								<li>Membawa surat pengantar tersebut ke Ketua RW dan meminta stempel RW
                                </li>
								<li>Membawa surat pengantar tersebut dan persyaratan lainnya ke kantor kelurahan, 
                                    lalu mengisi formulir permohonan pembuatan KK baru yang tersedia di kantor kelurahan</li>
								<li>Petugas kelurahan akan mengecek kelengkapan berkas-berkas yang menjadi syarat pembuatan KK baru</li>
								<li>Jika sudah lengkap, Lurah akan menandatangani formulir permohonan pembuatan KK baru tersebut</li>
                                <li>Berkas yang sudah ditandatangan Lurah kemudian kamu teruskan ke Kecamatan</li>
							</ol>
                            {{-- Syarat Membuat KK --}}
                            <h5>Syarat Membuat Kartu Keluarga</h5>
                            <p class="mb-0" style="text-align: justify">Jika kamu sudah mengetahui cara membuat Kartu Keluarga, pastikan kamu juga mengetahui persyaratan yang diperlukan. 
                                Pastikan persyaratan yang kamu bawa sesuai dengan kebutuhan Kartu Keluarga yang ingin kamu buat ya!</p>
                            {{-- Syarat Membuat KK-1 --}}
							<h6>1. Pasangan yang Baru Menikah</h6>
                            <p class="mb-0" style="text-align: justify">
                                Untuk pasangan yang baru menikah, Kartu Keluarga dapat dibuat setelah pernikahan selesai dilakukan. 
                                Dengan memiliki KK, kamu jadi bisa mengurus berbagai keperluan lebih mudah.
                                Misalnya saat kamu ingin membeli rumah dengan  Kredit Pepemilikan Rumah (KPR), membuat tabungan, paspor dan lainnya. 
                                Berikut syarat yang harus dipenuhi untuk membuat Kartu Keluarga:
                            </p>
                            <ul>
								<li>Surat pengantar dari RT yang sudah distempel RW</li>
								<li>Fotocopy buku nikah atau akta perkawinan</li>
								<li>Surat keterangan pindah (khusus untuk anggota keluarga pendatang)</li>
							</ul>
                            {{-- Syarat Membuat KK-2 --}}
                            <h6>2. Penambahan Anggota Keluarga (Kelahiran)</h6>
                            <p class="mb-0" style="text-align: justify">
                                Jika terdapat anggota keluarga yang baru lahir, maka kamu wajib menambahkannya ke dalam Kartu Keluarga. 
                                Berikut beberapa syarat yang harus kamu lengkapi untuk menambahkan anggota pada KK:
                            </p>
                            <ul>
								<li>Surat pengantar dari RT atau RW</li>
								<li>Kartu keluarga (KK) yang lama</li>
								<li>Surat keterangan kelahiran anggota keluarga baru yang akan ditambahkan ke dalam kartu keluarga nanti</li>
							</ul>
                            {{-- Syarat Membuat KK-3 --}}
                            <h6>3. Penambahan Anggota Keluarga yang Menumpang</h6>
                            <p class="mb-0" style="text-align: justify">
                                Tak hanya yang lahir,, kamu juga bisa menambahkan anggota keluarga yang menumpang di Kartu Keluarga. 
                                Berikut syarat-syarat yang harus disiapkan:
                            </p>
                            <ul>
								<li>Surat pengantar RT atau RW daerah setempat</li>
								<li>Kartu keluarga yang lama atau kartu keluarga yang akan ditumpangi</li>
								<li>Surat keterangan pindah datang (jika tidak satu daerah)</li>
                                <li>Surat keterangan datang dari luar negeri (untuk WNI yang datang dari luar negeri)</li>
                                <li>Paspor, izin tinggal tetap, dan surat keterangan catatan kepolisian (SKCK) atau surat tanda lapor diri (untuk WNA)Surat keterangan pindah datang (jika tidak satu daerah)</li>
							</ul>
                            {{-- Syarat Membuat KK-4 --}}
                            <h6>4. Pengurangan Anggota Keluarga (Kematian)</h6>
                            <p class="mb-0" style="text-align: justify">
                                Jika ada ada pengurangan anggota keluarga karena kematian, maka kamu wajib mengubah data di Kartu Keluargamu. 
                                Beberapa persyaratan tersebut diantaranya, yaitu :
                            </p>
                            <ul>
								<li>Surat pengantar dari RT atau RW daerah setempat</li>
								<li>Kartu keluarga (KK) yang lama</li>
								<li>Surat keterangan kematian (untuk yang meninggal dunia)</li>
                                <li>Jika pengurangan terjadi karena adanya anggota keluarga yang pindah, maka surat keterangan kematian diganti dengan surat keterangan pindah (untuk anggota keluarga yang pindah).</li>
							</ul>
                            {{-- Syarat Membuat KK-5 --}}
                            <h6>5. Penggantian Karena Hilang atau Rusak</h6>
                            <p class="mb-0" style="text-align: justify">
                                Adakala Kartu Keluarga hilang atau rusak karena suatu hal sehingga kamu terpaksa untuk menggantinya dengan yang baru. 
                                Kamu bisa mengurusnya dengan menyiapkan beberapa syarat di bawah ini:
                            </p>
                            <ul>
								<li>Surat pengantar dari RT atau RW daerah setempat</li>
								<li>Surat keterangan kehilangan dari pihak kepolisian (hanya untuk KK yang hilang)</li>
								<li>Kartu keluarga (KK) yang rusak (hanya untuk KK yang rusak)</li>
                                <li>Fotocopy dokumen kependudukan (KTP) dari salah satu anggota keluarga</li>
                                <li>Dokumen keimigrasian bagi orang asing (WNA)</li>
							</ul>
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
                                        <a href="{{ route('layanan_ktp') }}">
                                            <div class="inner">
                                                <img src="{{ asset('assets/katen/images/posts/ktp.jpg') }}" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="{{ route('layanan_ktp') }}">KTP</a></h6>
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