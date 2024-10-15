{!! NoCaptcha::renderJs() !!}
@include('auth.part.header')
<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
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
            <!-- end row -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Selamat Datang di SIKI!</h5>
                                <p class="text-muted">Masuk untuk melanjutkan ke SIKI.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <div id="returned-error"></div>
                                <form id="loginForm">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username/Email/Phone</label>
                                        <input name="username" type="text" class="form-control" id="username" placeholder="Masukkan username/email/phone">
                                        <div id="username-error" class="text-danger-emphasis"></div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="/forgot_password" class="text-muted">Lupa Kata Sandi?</a>
                                        </div>
                                        <label class="form-label" for="password-input">Kata Sandi</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Masukkan kata sandi" id="password-input" aria-describedby="passwordInput">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" onclick="togglePasswordVisibility('password-input', this)">
                                                    <i class="ri-eye-fill align-middle"></i>
                                                </button>
                                                <div id="password-error" class="text-danger-emphasis"></div>
                                            </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" name="rememberme" id="rememberme" type="checkbox" value="" id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Ingat saya</label>
                                    </div>

                                    <div class="my-3">
                                        <div class="d-flex justify-content-center">
                                             <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                                        </div>
                                        <div class="px-5">
                                            <div id="captcha-error" class="text-danger-emphasis"></div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-secondary w-100" type="submit">Masuk</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Belum punya akun? <a href="/register" class="fw-semibold text-primary text-decoration-underline">Daftar sekarang</a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

@include('auth.part.scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    function togglePasswordVisibility(inputId, button) {
        const input = document.getElementById(inputId);
        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';

        const icon = button.querySelector('i');
        icon.classList.toggle('ri-eye-fill', !isPassword);
        icon.classList.toggle('ri-eye-off-fill', isPassword);
    }
    $('#loginForm').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/login',
            method: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $("[id$='-error']").empty();
            },
            success: function(data){
                if(data.error == true){
                    var hasOtherErrors = false; // Untuk cek apakah ada error lain
                    // Validasi error input lainnya
                    $.each(data.message, function(field, error){
                        $('#'+field+'-error').html(error);
                        hasOtherErrors = true; // Tanda bahwa ada error di input lain
                    });

                    // Pengecekan captcha setelah validasi input lainnya
                    if (grecaptcha.getResponse() == "") {
                        $('#captcha-error').html('Lengkapi Captcha agar Anda dapat melanjutkan.');
                    }
                    if (hasOtherErrors) {
                        // Reset captcha jika ada error di input lain
                        grecaptcha.reset();
                    }

                }else{
                    $('#returned-error').html(data.message.returned);
                    setTimeout(function(){
                        window.location.href="{{ route('dashboard') }}";
                      }, 1000);
                }
            },
        });
    });
</script>

@include('auth.part.footer')
