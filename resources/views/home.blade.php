@include('part.header')

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('/../assets/images/' . env('APP_LOGO') . '.webp') }}" class="card-logo card-logo-dark" alt="logo dark" height="70">
                    <img src="{{ asset('/../assets/images/' . env('APP_LOGO') . '.webp') }}" class="card-logo card-logo-light" alt="logo light" height="70">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link active" href="#hero">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#wallet">Digital</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#marketplace">Ekosistem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#categories">Kerjasama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#creators">Konsultasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#creators">Kontak</a>
                        </li>
                    </ul>

                    <div class="">
                        <a href="/login" class="btn btn-primary">Masuk SIKI</a>
                    </div>
                </div>

            </div>
        </nav>
            <div class="bg-overlay bg-overlay-pattern"></div>
        <!-- end navbar -->

        <!-- start hero section -->
        <section class="section nft-hero" id="hero">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center">
                            <h1 class="display-4 fw-medium mb-4 lh-base text-white">Solusi Digital untuk Semua dengan <span class="text-secondary">SIKI</span></h1>
                            <p class="lead text-white-50 lh-base mb-4 pb-2">Satu platform untuk semua kebutuhan Anda.</p>

                            <div class="hstack gap-2 justify-content-center">
                                {{-- <a href="apps-nft-create.html" class="btn btn-primary">Create Own <i class="ri-arrow-right-line align-middle ms-1"></i></a> --}}
                                <a href="/register" class="btn btn-secondary">Dapatkan SIKI <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end hero section -->

        <!-- start features -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="text-muted">
                            {{-- <h5 class="fs-12 text-uppercase text-secondary">Design</h5> --}}
                            <h4 class="mb-3">Tentang Kami</h4>
                            <p class="mb-4 ff-secondary">SIKI adalah ekosistem digital yang memberdayakan individu, koperasi, dan bisnis melalui teknologi blockchain. Bergabunglah dalam gerakan kami untuk membangun ekonomi kolaboratif yang lebih baik. Dari koperasi hingga masyarakat luas, SIKI hadir untuk meningkatkan produktivitas dan menciptakan dampak positif. Jelajahi bagaimana kami mewujudkannya.</p>

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="vstack gap-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Ecommerce</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Analytics</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">CRM</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="vstack gap-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Crypto</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Projects</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="index.html" class="btn btn-primary">Pelajari Lebih Lanjut <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                        <div>
                            <img src="assets/images/landing/features/img-2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end features -->

        <!-- start plan -->
        <section class="section bg-light" id="categories">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Satu Aplikasi Untuk Semua</h2>
                            <p class="text-muted">SIKI, satu aplikasi untuk semua solusi, pertemanan, momen berharga, berbagi, dan produktivitas positif yang efektif dan berdampak luar biasa.</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Swiper -->
                        <div class="swiper mySwiper pb-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="assets/images/nft/money.png" alt="" class="avatar-sm">
                                            <h5 class="mt-4">PPOB (Payment Point Online Bank)</h5>
                                            <p class="text-muted">Bayar tagihan jadi mudah dan cepat, hemat waktu dan tenaga. Nikmati kemudahan membayar berbagai tagihan dan beli pulsa/token listrik dalam satu aplikasi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="assets/images/nft/money.png" alt="" class="avatar-sm">
                                            <h5 class="mt-4">Marketplace</h5>
                                            <p class="text-muted">Belanja online aman, nyaman, dan menyenangkan, temukan semua yang Anda butuhkan. Dapatkan penawaran terbaik dan berbagai metode pembayaran yang praktis. Ayo mulai belanja sekarang!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="assets/images/nft/money.png" alt="" class="avatar-sm">
                                            <h5 class="mt-4">Koperasi</h5>
                                            <p class="text-muted">Wujudkan impian Anda dengan layanan simpan pinjam dan keuangan lainnya. Kelola keuangan Anda dengan mudah dan transparan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="assets/images/nft/money.png" alt="" class="avatar-sm">
                                            <h5 class="mt-4">Proyek</h5>
                                            <p class="text-muted">Kelola proyek secara efisien untuk meningkatkan produktivitas dan mencapai tujuan. Selesaikan lebih banyak pekerjaan dalam waktu singkat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="assets/images/nft/money.png" alt="" class="avatar-sm">
                                            <h5 class="mt-4">Forum</h5>
                                            <p class="text-muted">Bergabunglah sekarang dan temukan komunitas yang sesuai dengan minat Anda. Berbagi informasi, berdiskusi, dan dapatkan inspirasi dari sesama anggota.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="assets/images/nft/money.png" alt="" class="avatar-sm">
                                            <h5 class="mt-4">Edukasi</h5>
                                            <p class="text-muted">Tingkatkan potensi diri dengan akses materi belajar dan kursus online berkualitas. Kembangkan keterampilan dan pengetahuan Anda kapan saja, di mana saja.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="assets/images/nft/money.png" alt="" class="avatar-sm">
                                            <h5 class="mt-4">Teman</h5>
                                            <p class="text-muted">Hubungkan dengan dunia, mulai dari interaksi sosial hingga bisnis. Chat, telepon, berbagi lokasi, dan lakukan lebih banyak lagi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-dark"></div>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </section>
        <!-- end plan -->

        <!-- start Work Process -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Gabung SIKI, Wujudkan Potensimu!</h3>
                            <p class="text-muted mb-4 ff-secondary">Ekosistem digital untuk kolaborasi dan pemberdayaan komunitas.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-quill-pen-line"></i>
                                </div>
                            </div>

                            <h5>Buka Google Play Store</h5>
                            <p class="text-muted ff-secondary">Cari aplikasi "SIKI" atau klik tautan di bawah.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-user-follow-line"></i>
                                </div>
                            </div>

                            <h5>Instal Aplikasi</h5>
                            <p class="text-muted ff-secondary">Tekan tombol "Instal" dan tunggu proses instalasi selesai.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-book-mark-line"></i>
                                </div>
                            </div>

                            <h5>Buka Aplikasi SIKI</h5>
                            <p class="text-muted ff-secondary">Temukan ikon SIKI di menu aplikasi dan buka aplikasinya.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card mt-4">
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-chat-3-line"></i> <!-- Tambahkan ikon baru di sini -->
                                </div>
                            </div>

                            <h5>Pilih Daftar/Buat Akun</h5>
                            <p class="text-muted ff-secondary">Pilih opsi untuk membuat akun baru.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-quill-pen-line"></i>
                                </div>
                            </div>

                            <h5>Lengkapi Formulir</h5>
                            <p class="text-muted ff-secondary">Isi semua data yang diminta dengan lengkap dan benar. Centang kotak persetujuan persyaratan layanan.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-user-follow-line"></i>
                                </div>
                            </div>

                            <h5>Klik Daftar</h5>
                            <p class="text-muted ff-secondary">Lanjutkan ke proses verifikasi.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-book-mark-line"></i>
                                </div>
                            </div>

                            <h5>Verifikasi Akun</h5>
                            <p class="text-muted ff-secondary">Pilih metode verifikasi (nomor HP atau email). Masukkan kode verifikasi yang dikirimkan.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card mt-4">
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-chat-3-line"></i> <!-- Tambahkan ikon baru di sini -->
                                </div>
                            </div>

                            <h5>Mulai Menggunakan SIKI</h5>
                            <p class="text-muted ff-secondary">Setelah berhasil diverifikasi, selamat! Anda siap menjelajahi SIKI.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end Work Process -->

         <!-- start cta -->
         <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Dapatkan SIKI di Play Store</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="apps-nft-create.html" class="btn bg-gradient btn-success">SIKI-in Hidupmu!</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- start wallet -->
        <section class="section" id="wallet">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Gabung SIKI, Wujudkan Potensimu!</h2>
                            <p class="text-muted">Ekosistem digital untuk kolaborasi dan pemberdayaan komunitas.</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="card text-center border shadow-none">
                            <div class="card-body py-5 px-4">
                                <img src="assets/images/nft/wallet/metamask.png" alt="" height="55" class="mb-3 pb-2">
                                <h5>Metamask</h5>
                                <p class="text-muted pb-1">MetaMask is a popular cryptocurrency wallet known for its ease of use, availability on both desktops.</p>
                                <a href="#!" class="btn btn-soft-primary">Connect Wallet</a>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-4">
                        <div class="card text-center border shadow-none">
                            <div class="card-body py-5 px-4">
                                <img src="assets/images/nft/wallet/coinbase.png" alt="" height="55" class="mb-3 pb-2">
                                <h5>Coinbase Wallet</h5>
                                <p class="text-muted pb-1">Coinbase Wallet is a self-custody wallet that gives you complete control of your crypto for your Wallet.</p>
                                <a href="#!" class="btn btn-secondary">Change Wallet</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="card text-center border shadow-none">
                            <div class="card-body py-5 px-4">
                                <img src="assets/images/nft/wallet/binance.png" alt="" height="55" class="mb-3 pb-2">
                                <h5>Binance</h5>
                                <p class="text-muted pb-1">Binance is considered a safe exchange that allows user account protection via the use of Two Authentication.</p>
                                <a href="#!" class="btn btn-soft-primary">Connect Wallet</a>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end wallet -->

        <!-- start marketplace -->
        <section class="section bg-light" id="marketplace">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Explore Products</h2>
                            <p class="text-muted mb-4">Collection widgets specialize in displaying many elements of the same type, such as a collection of pictures from a collection of articles.</p>
                            <ul class="nav nav-pills filter-btns justify-content-center" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium active" type="button" data-filter="all">All Items</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button" data-filter="artwork">Artwork</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button" data-filter="music">Music</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button" data-filter="games">Games</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button" data-filter="crypto-card">Crypto Card</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button" data-filter="3d-style">3d Style</button>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-4 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="assets/images/nft/img-03.jpg" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details.html">Creative Filtered Portrait</a></h5>
                                <p class="text-muted mb-0">Photography</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">75.3ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">67.36 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item music crypto-card games">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="assets/images/nft/img-02.jpg" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 23.63k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details.html">The Chirstoper</a></h5>
                                <p class="text-muted mb-0">Music</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">412.30ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">394.7 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item artwork music games">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="https://img.themesbrand.com/velzon/images/img-4.gif" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 15.93k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details.html">Evolved Reality</a></h5>
                                <p class="text-muted mb-0">Video</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">2.75ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">3.167 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="assets/images/nft/img-01.jpg" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 14.85k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details.html">Abstract Face Painting</a></h5>
                                <p class="text-muted mb-0">Collectibles</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">122.34ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">97.8 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item games music 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="assets/images/nft/img-05.jpg" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 64.10k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details.html">Long-tailed Macaque</a></h5>
                                <p class="text-muted mb-0">Artwork</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">874.01ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">745.14 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item artwork music crypto-card">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="assets/images/nft/img-06.jpg" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
                                <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                                <p class="text-muted mb-0">Artwork</p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">41.658 ETH</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">34.81 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </section>
        <!-- end marketplace -->

        <!-- start features -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Create and Sell Your NFTs</h2>
                            <p class="text-muted">The process of creating an NFT may cost less than a dollar, but the process of selling it can cost up to a thousand dollars. For example, Allen Gannett, a software developer.</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <img src="assets/images/nft/wallet.png" alt="" class="avatar-sm">
                                <h5 class="mt-4">Set up your wallet</h5>
                                <p class="text-muted">You have to choose whether to use a hot wallet a cold wallet.</p>
                                <a href="#!" class="link-secondary">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <img src="assets/images/nft/money.png" alt="" class="avatar-sm">
                                <h5 class="mt-4">Create your collection</h5>
                                <p class="text-muted">Create a collection in Opensea and give it a proper art.</p>
                                <a href="#!" class="link-secondary">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <img src="assets/images/nft/add.png" alt="" class="avatar-sm">
                                <h5 class="mt-4">Add your NFT's</h5>
                                <p class="text-muted">Go to your profile icon and top right corner creation page.</p>
                                <a href="#!" class="link-secondary">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <img src="assets/images/nft/sell.png" alt="" class="avatar-sm">
                                <h5 class="mt-4">Sell Your NFT's</h5>
                                <p class="text-muted">Create a collection in Opensea and give Add items and art.</p>
                                <a href="#!" class="link-secondary">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!-- end container -->
        </section><!-- end features -->

        <!-- start Discover Items-->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center mb-5">
                            <h2 class="mb-0 fw-semibold lh-base flex-grow-1">Discover Items</h2>
                            <a href="apps-nft-explore.html" class="btn btn-primary">View All <i class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card explore-box card-animate border">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle">
                                    <div class="ms-2 flex-grow-1">
                                        <a href="#!"><h6 class="mb-0 fs-15">Nancy Martino</h6></a>
                                        <p class="mb-0 text-muted fs-13">Owners</p>
                                    </div>
                                    <div class="bookmark-icon">
                                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                    </div>
                                </div>
                                <div class="explore-place-bid-img overflow-hidden rounded">
                                    <img src="assets/images/nft/img-05.jpg" alt="" class="explore-img w-100">
                                    <div class="bg-overlay"></div>
                                    <div class="place-bid-btn">
                                        <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                                    <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 97.8 ETH </h5>
                                    <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Patterns arts &amp; culture</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card explore-box card-animate border">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-xs rounded-circle">
                                    <div class="ms-2 flex-grow-1">
                                        <a href="#!"><h6 class="mb-0 fs-15">Henry Baird</h6></a>
                                        <p class="mb-0 text-muted fs-13">Creators</p>
                                    </div>
                                    <div class="bookmark-icon">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                    </div>
                                </div>
                                <div class="explore-place-bid-img overflow-hidden rounded">
                                    <img src="assets/images/nft/img-03.jpg" alt="" class="explore-img w-100">
                                    <div class="bg-overlay"></div>
                                    <div class="place-bid-btn">
                                        <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 31.64k </p>
                                    <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 475.23 ETH </h5>
                                    <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Evolved Reality</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card explore-box card-animate border">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle">
                                    <div class="ms-2 flex-grow-1">
                                        <a href="#!"><h6 class="mb-0 fs-15">Diana Kohler</h6></a>
                                        <p class="mb-0 text-muted fs-13">Owners</p>
                                    </div>
                                    <div class="bookmark-icon">
                                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                    </div>
                                </div>
                                <div class="explore-place-bid-img overflow-hidden rounded">
                                    <img src="https://img.themesbrand.com/velzon/images/img-1.gif" alt="" class="img-fluid explore-img">
                                    <div class="bg-overlay"></div>
                                    <div class="place-bid-btn">
                                        <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 8.34k </p>
                                    <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 701.38 ETH </h5>
                                    <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Long-tailed macaque</a></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!--end Discover Items-->

        <!-- start Work Process -->
        <section class="section bg-light" id="creators">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Top Creator This Week</h2>
                            <p class="text-muted">NFTs are valuable because they verify the authenticity of a non-fungible asset. This makes these assets unique and one of a kind.</p>
                        </div>
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/nft/img-01.jpg" alt="" class="avatar-sm object-fit-cover rounded" />
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="pages-profile.html">
                                            <h5 class="mb-1">Timothy Smith</h5>
                                        </a>
                                        <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 4,754 ETH</p>
                                    </div>
                                    <div>
                                        <div class="dropdown float-end">
                                            <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle fs-16"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-sm object-fit-cover rounded">
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="pages-profile.html">
                                            <h5 class="mb-1">Alexis Clarke</h5>
                                        </a>
                                        <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 81,369 ETH</p>
                                    </div>
                                    <div>
                                        <div class="dropdown float-end">
                                            <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle fs-16"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/nft/img-06.jpg" alt="" class="avatar-sm object-fit-cover rounded">
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="pages-profile.html">
                                            <h5 class="mb-1">Glen Matney</h5>
                                        </a>
                                        <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 13,156 ETH</p>
                                    </div>
                                    <div>
                                        <div class="dropdown float-end">
                                            <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle fs-16"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="https://img.themesbrand.com/velzon/images/img-5.gif" alt="" class="avatar-sm object-fit-cover rounded">
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="pages-profile.html">
                                            <h5 class="mb-1">Herbert Stokes</h5>
                                        </a>
                                        <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 34,754 ETH</p>
                                    </div>
                                    <div>
                                        <div class="dropdown float-end">
                                            <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle fs-16"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-sm object-fit-cover rounded">
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="pages-profile.html">
                                            <h5 class="mb-1">Michael Morris</h5>
                                        </a>
                                        <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 13,841 ETH</p>
                                    </div>
                                    <div>
                                        <div class="dropdown float-end">
                                            <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle fs-16"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/nft/img-02.jpg" alt="" class="avatar-sm object-fit-cover rounded">
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="pages-profile.html">
                                            <h5 class="mb-1">James Morris</h5>
                                        </a>
                                        <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 63,710 ETH</p>
                                    </div>
                                    <div>
                                        <div class="dropdown float-end">
                                            <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle fs-16"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div><!-- end container -->
        </section><!-- end Work Process -->

        <!-- start cta -->
        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Create and Sell Your NFT's</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="apps-nft-create.html" class="btn bg-gradient btn-success">Create NFT</a>
                            <a href="apps-nft-explore.html" class="btn bg-gradient btn-secondary">Discover More</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->
           <!-- Start footer -->
    <footer class="custom-footer bg-dark py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div>
                        <div>
                            <img src="assets/images/logo-light.png" alt="logo light" height="17">
                        </div>
                        <div class="mt-4">
                            <p>Premium Multipurpose Admin & Dashboard Template</p>
                            <p>You can build any type of web application like eCommerce, CRM, CMS, Project management apps, Admin Panels, etc using Velzon.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 ms-lg-auto">
                    <div class="row">
                        <div class="col-sm-4 mt-4">
                            <h5 class="text-white mb-0">Company</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li><a href="pages-profile.html">About Us</a></li>
                                    <li><a href="pages-gallery.html">Gallery</a></li>
                                    <li><a href="apps-projects-overview.html">Projects</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-4">
                            <h5 class="text-white mb-0">Apps Pages</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li><a href="pages-pricing.html">Calendar</a></li>
                                    <li><a href="apps-mailbox.html">Mailbox</a></li>
                                    <li><a href="apps-chat.html">Chat</a></li>
                                    <li><a href="apps-crm-deals.html">Deals</a></li>
                                    <li><a href="apps-tasks-kanban.html">Kanban Board</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-4">
                            <h5 class="text-white mb-0">Support</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li><a href="pages-faqs.html">FAQ</a></li>
                                    <li><a href="pages-faqs.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row text-center text-sm-start align-items-center mt-5">
                <div class="col-sm-6">

                    <div>
                        <p class="mb-0 text-muted">Copyright &copy;
                            <script>document.write(new Date().getFullYear())</script> - PT. SIKI Revolusi Inovasi. All right reserved.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end mt-3 mt-sm-0">
                        <ul class="list-inline mb-0 footer-social-link">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-facebook-fill"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-github-fill"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-linkedin-fill"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-google-fill"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-dribbble-line"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

</div>
<!-- end layout wrapper -->

@include('part.scripts')

@include('part.footer')
