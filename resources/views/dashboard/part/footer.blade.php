
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <p class="mb-0 text-muted">Copyright &copy;
                        <script>document.write(new Date().getFullYear())</script> - PT. SIKI Revolusi Inovasi. All right reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->
</div>
<!-- END layout-wrapper -->



<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
<i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!--preloader-->
<div id="preloader">
<div id="status">
<div class="spinner-border text-primary avatar-sm" role="status">
    <span class="visually-hidden">Loading...</span>
</div>
</div>
</div>

<script>
    document.getElementById('logout-button').addEventListener('click', function() {
        fetch('/logout', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Sertakan token CSRF jika menggunakan AJAX
            }
        })
        .then(response => response.json())
        .then(data => {
            // Tampilkan pesan hasil logout
            if (!data.error) {
                alert(data.message.returned);
                // Redirect atau lakukan aksi lain setelah logout
                window.location.href = '/login'; // Ganti dengan URL login Anda
            } else {
                alert(data.message.returned);
            }
        });
    });
    </script>

