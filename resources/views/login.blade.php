<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>DLH Kota Surakarta-Login</title>
    <link rel="icon" href="{{ asset('template/assets/img/pemkot.png') }}">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/stylelogin.css" />
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                {{-- <form action="#" class="sign-in-form"> --}}
                    <form method="POST" action="{{ url('/login') }}" class="needs-validation" novalidate="">
                        @csrf
                    <img src="template/assets/img/pemkot.png" class="mr-auto my-1 mb-1"
                        style="width: 60px;height:70px;">

                    <h2 class="title">LOGIN</h2>

                   
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input name="email" type="email" placeholder="Email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input name="password" type="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                    id="remember-me">
                                <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                            </div>
                        </div>


                        <input type="submit" value="Login" class="btn solid" />


                    </form>
                    {{-- <form action="#" class="sign-up-form">
                        <h2 class="title">Sign up</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" />
                        </div>
                        <input type="submit" class="btn" value="Sign up" /> --}}
                    </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum Memiliki Akun?</h3>
                    <p>
                        Daftar terlebih dahulu
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        <a class="nav-link scrollto" href="/register">Buat Akun</a>

                    </button>
                </div>
                <img src="assets/img/logologin.png" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                {{-- <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div> --}}
                <img src="assets/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <!-- General JS Scripts -->
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"
 integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
 integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
 integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset('template/assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="{{ asset('template/assets/js/scripts.js') }}"></script>
<script src="{{ asset('template/assets/js/custom.js') }}"></script>

<!-- Page Specific JS File -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
 @if (session('message'))
     Swal.fire('Perhatian', '{{ session('message') }}', 'warning');
 @endif
</script>

    <script src="app.js"></script>

</body>

</html>
