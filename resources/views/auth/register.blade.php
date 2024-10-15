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
                                <h5 class="text-primary">Buat Akun Baru</h5>
                                <p class="text-muted">Dapatkan akun SIKI anda sekarang gratis!</p>
                            </div>
                            <div class="p-2 mt-4">
                                <div id="returned-error"></div>
                                <form id="registerForm">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan alamat email">
                                        <div id="email-error" class="text-danger-emphasis"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                        <input name="username" type="text" class="form-control" id="username" placeholder="Masukkan username">
                                        <div id="username-error" class="text-danger-emphasis"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Telepon <span class="text-danger">*</span></label>
                                        <div class="input-group" data-input-flag>
                                            <button class="btn btn-light border" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/images/flags/id.svg" alt="flag img" height="20" class="country-flagimg rounded">
                                                <span id="button-country" class="ms-2 country-codeno">+ 62</span></button>
                                            <input name="phone" class="form-control rounded-end flag-input" value="" placeholder="Masukkan nomor" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                            <div class="dropdown-menu w-100">
                                                <div class="p-2 px-3 pt-1 searchlist-input">
                                                    <input type="text" class="form-control form-control-sm border search-countryList" placeholder="Cari nama negara atau kode negara..." />
                                                </div>
                                                <ul class="list-unstyled dropdown-menu-list mb-0"></ul>
                                            </div>
                                        </div>
                                        <div id="phone-error" class="text-danger-emphasis"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Kata Sandi</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Masukkan kata sandi" id="password-input" aria-describedby="passwordInput">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" onclick="togglePasswordVisibility('password-input', this)">
                                                    <i class="ri-eye-fill align-middle"></i>
                                                </button>
                                                <div id="password-error" class="text-danger-emphasis"></div>
                                            </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="formCheck1" name="termCon" value="1">
                                            <label class="form-check-label mt-1 fs-12 text-muted" for="formCheck1">
                                                Dengan mendaftar, Anda menyetujui <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Ketentuan Layanan SIKI.</a>
                                            </label>
                                        </div>
                                        <div id="termCon-error" class="text-danger-emphasis"></div>
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
                                        <button class="btn btn-secondary w-100" type="submit">Daftar</button>
                                    </div>

                                    {{-- <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                            <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                            <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                        </div>
                                    </div> --}}
                                </form>

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Sudah memiliki akun? <a href="/login" class="fw-semibold text-primary text-decoration-underline"> Masuk sekarang </a> </p>
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

    // Fungsi untuk toggle visibilitas password
    function togglePasswordVisibility(inputId, button) {
        const input = document.getElementById(inputId);
        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';

        const icon = button.querySelector('i');
        icon.classList.toggle('ri-eye-fill', !isPassword);
        icon.classList.toggle('ri-eye-off-fill', isPassword);
    }

    // // Validasi password secara real-time
    // const passwordInput = document.getElementById('password-input');
    // const passwordAlerts = {
    //     length: document.getElementById('alert-length'),
    //     lower: document.getElementById('alert-lower'),
    //     upper: document.getElementById('alert-upper'),
    //     number: document.getElementById('alert-number'),
    //     special: document.getElementById('alert-special')
    // };

    // passwordInput.addEventListener('input', function() {
    //     const value = passwordInput.value;

    //     // Reset alerts
    //     for (let alert in passwordAlerts) {
    //         passwordAlerts[alert].classList.add('d-none');
    //     }

    //     // Tampilkan alerts berdasarkan validasi
    //     if (value.length < 8) passwordAlerts.length.classList.remove('d-none');
    //     if (!/[a-z]/.test(value)) passwordAlerts.lower.classList.remove('d-none');
    //     if (!/[A-Z]/.test(value)) passwordAlerts.upper.classList.remove('d-none');
    //     if (!/\d/.test(value)) passwordAlerts.number.classList.remove('d-none');
    //     if (!/[!@#$%^&*]/.test(value)) passwordAlerts.special.classList.remove('d-none');
    // });

    // Menangani submit form dengan AJAX
    $('#registerForm').on('submit', function(e) {
        e.preventDefault();
        var country_id  = $('#button-country').text();
        const formData = $(this).serialize()+"&country_id=" + country_id;

        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: '/register',
            method: 'POST',
            data: formData,
            dataType: 'json',
            beforeSend: function() {
                $("[id$='-error']").empty();
            },
            success: function(response) {
                if (response.error) {
                    var hasOtherErrors = false;
                    $.each(response.message, function(field, messages) {
                        $('#' + field + '-error').html(messages.join('<br>'));
                        hasOtherErrors = true;
                    });
                    if (grecaptcha.getResponse() == "") {
                    $('#captcha-error').html('Lengkapi Captcha agar Anda dapat melanjutkan.');
                    }
                    // Reset captcha jika ada error di input lain
                    if (hasOtherErrors) {
                        grecaptcha.reset();
                    }
                } else {
                    $('#returned-error').html(response.message.returned);
                    // Optional: Reset form setelah sukses
                    setTimeout(function(){
                        window.location.href="{{ route('auth.login') }}";
                      }, 3000);
                    // $('#registerForm')[0].reset();
                }
            },
            error: function(xhr) {
                $('#returned-error').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Terjadi kesalahan saat mengirim permintaan. Silakan coba lagi.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            }
        });
    });
</script>
<!-- input flag init -->
<script src="{{ asset('assets/js/pages/flag-input.init.js') }}"></script>

@include('auth.part.footer')
