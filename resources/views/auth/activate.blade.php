@include('auth.part.header')
<div class="auth-page-wrapper pt-5">
    <!-- Auth page background -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- Auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="index.html" class="d-inline-block auth-logo">
                                <img src="{{ asset('/../assets/images/' . env('APP_LOGO') . '.webp') }}" alt="" height="70">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">{{ env('APP_TAG') }}</p>
                    </div>
                </div>
            </div>
            <!-- End row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Aktivasi Akun</h5>
                                <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl"></lord-icon>
                            </div>
                            @if (session('message'))
                            <div class="alert text-center alert-{{ session('message_type') }} alert-dismissible fade show" role="alert"">
                                {{ session('message') }}
                            </div>
                            @endif
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Belum punya akun? <a href="/register" class="fw-semibold text-primary text-decoration-underline">Daftar sekarang</a></p>
                    </div>

                </div>
            </div>
        </div>
        <!-- End container -->
    </div>
    <!-- End auth page content -->
@include('auth.part.scripts')


@include('auth.part.footer')
