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
                                    <h5 class="text-primary">Lupa Kata Sandi?</h5>
                                    <p class="text-muted">Atur ulang kata sandi anda melalui SIKI dengan aman.</p>

                                    <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl"></lord-icon>

                                </div>
                                <div class="p-2">
                                    <div id="returned-error"></div>
                                    <form id="form-forgot-password">
                                        <div class="mb-4">
                                            <div class="mb-4">
                                                <label class="form-label">Username/Email/Phone</label>
                                                <input type="text" class="form-control" id="credit" name="credit" placeholder="Masukkan email/username/phone">
                                                <div id="credit-error" class="text-danger-emphasis"></div>
                                            </div>
                                        </div>

                                        <div class="my-3">
                                            <div class="d-flex justify-content-center">
                                                 <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                                            </div>
                                            <div class="px-5">
                                                <div id="captcha-error" class="text-danger-emphasis"></div>
                                            </div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button class="btn btn-secondary w-100" type="submit">Ganti Kata Sandi</button>
                                        </div>
                                    </form><!-- end form -->
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Saya ingat kembali kata sandi saya, <a href="/login" class="fw-semibold text-primary text-decoration-underline">tidak perlu reset.</a> </p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

@include('auth.part.scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
    $('#form-forgot-password').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/forgot_password',
            method: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $("[id$='-error']").empty();  // Use $() to select elements by id
            },
            success: function(data){
                if(data.error == true){
                    var hasOtherErrors = false;
                    $.each(data.message, function(field, error){
                        $('#'+field+'-error').html(error);
                        hasOtherErrors = true;
                    });
                    if (grecaptcha.getResponse() == "") {
                    $('#captcha-error').html('Lengkapi Captcha agar Anda dapat melanjutkan.');
                    }
                    if (hasOtherErrors) {
                        grecaptcha.reset();
                    }
                }else{
                    $('#returned-error').html(data.message.returned);
                }
            },
        });
    });
</script>

@include('auth.part.footer')
