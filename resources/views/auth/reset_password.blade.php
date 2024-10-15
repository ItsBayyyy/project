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
                                <h5 class="text-primary">Atur Ulang Kata Sandi</h5>
                                <p class="text-muted">Kata sandi baru anda harus berbeda dengan kata sandi yang digunakan sebelumnya.</p>
                            </div>
                            <div class="p-2">
                                <div id="returned-error"></div>
                                <form id="resetPasswordForm">
                                    <input type="hidden" name="param_id" value="{{ $param_id }}">
                                    <input type="hidden" name="activation_key" value="{{ $activation_key }}">

                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Kata Sandi</label>
                                        <div class="position-relative auth-pass-inputgroup">
                                            <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Masukkan kata sandi" id="password-input" aria-describedby="passwordInput">
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" onclick="togglePasswordVisibility('password-input', this)">
                                                <i class="ri-eye-fill align-middle"></i>
                                            </button>
                                            <div id="password-error" class="text-danger-emphasis"></div>

                                            <!-- Password validation alerts -->
                                            {{-- <div id="password-alerts">
                                                <div id="alert-length" class="text-danger-emphasis d-none" role="alert">Minimum 8 characters</div>
                                                <div id="alert-lower" class="text-danger-emphasis d-none" role="alert">At least one lowercase letter (a-z)</div>
                                                <div id="alert-upper" class="text-danger-emphasis d-none" role="alert">At least one uppercase letter (A-Z)</div>
                                                <div id="alert-number" class="text-danger-emphasis d-none" role="alert">At least one number (0-9)</div>
                                                <div id="alert-special" class="text-danger-emphasis d-none" role="alert">At least one special character (e.g. !@#$%^&*)</div>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="confirm-password-input">Konfirmasi Kata Sandi</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" name="confirm_password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Masukkan konfirmasi kata sandi" id="confirm-password-input">
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" onclick="togglePasswordVisibility('confirm-password-input', this)">
                                                <i class="ri-eye-fill align-middle"></i>
                                            </button>
                                            <div id="confirm_password-error" class="text-danger-emphasis"></div>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="d-flex justify-content-center">
                                             <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                                        </div>
                                        <div class="px-5">
                                            <div id="captcha-error" class="text-danger-emphasis"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-secondary w-100" type="submit">Ganti Kata Sandi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End card body -->
                    </div>
                    <!-- End card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Saya ingat kembali kata sandi saya, <a href="/login" class="fw-semibold text-primary text-decoration-underline">tidak perlu reset.</a> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End container -->
    </div>
    <!-- End auth page content -->
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

    $('#resetPasswordForm').on('submit', function(e) {
    e.preventDefault();
    const formData = $(this).serialize();

    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: '/reset_password',
        method: 'POST',
        data: formData,
        dataType: 'json',
        beforeSend: function() {
            $("#password-error, #confirm_password-error").empty();
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
                setTimeout(function(){
                        window.location.href="{{ route('auth.login') }}";
                      }, 3000);
            }
        },
    });
});

</script>
@include('auth.part.footer')
