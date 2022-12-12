<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>DLH Kota Surakarta-Register</title>
    <link rel="icon" href="{{ asset('template/assets/img/pemkot.png') }}">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/stylelogin2.css" />
</head>

<body>
    <div class="container">
        <div class="forms-container">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="signin-signup">
                {{-- <form action="#" class="sign-in-form"> --}}
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <img src="template/assets/img/pemkot.png" class="mr-auto my-1 mb-1"
                        style="width: 60px;height:70px;">

                    <h2 class="title">REGISTRASI</h2>

                    <div class="input-field @error('email') is-invalid @enderror">
                        <i class="fa fa-industry"></i>
                        <input type="text" input id="first_name" name="nama_perusahaan" placeholder="Nama Perusahaan"
                            required>
                        @error('name')
                            <div for="Password" class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-field  @error('email') is-invalid @enderror">
                        <i class="fa fa-list-ol"></i>
                        <input type="text" input id="first_name" name="no_izin" placeholder="Nomor Izin (NIB)"
                            required>
                        @error('name')
                            <div for="Password" class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-field  @error('email') is-invalid @enderror">
                        <i class="fas fa-user"></i>
                        <input type="text" input id="first_name" name="name" placeholder="Nama Pengguna" required>
                        @error('name')
                            <div for="Password" class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-field @error('email') is-invalid @enderror">
                        <i class="fas fa-envelope"></i>
                        <input type="email" input id="email" name="email" placeholder="Email" required>
                        @error('email')
                            <div for="Password" class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-field @error('no_hp') is-invalid @enderror">
                        <i class="fas fa-phone"></i>
                        <input type="no_hp" input id="no_hp" name="no_hp" placeholder="No. Hp" required>
                        @error('no_hp')
                            <div for="Password" class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-field @error('password') is-invalid @enderror">
                        <i class="fas fa-lock"></i>
                        <input type="password" input id="password" name="password" placeholder="Password" required>
                        @error('password')
                            <div for="Password" class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-field @error('password konfirmasi') is-invalid @enderror">
                        <i class="fa fa-key"></i>
                        <input type="password" input id="password_confirmasi" name="password_confirmasi"
                            placeholder="Konfirmasi Password" required>
                        @error('password')
                            <div for="Password" class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                id="remember-me" required>
                            <label class="custom-control-label" for="remember-me">Saya Setuju Dengan Syarat dan
                                Ketentuan</label>
                        </div>
                    </div>
                    <input type="submit" class="btn" value="Registrasi" />

                </form>
            </div>
        </div>

        </form>
    </div>
    </div>

    <div class="panels-container">
        <div class="panel right-panel">
            <div class="content">
                <h3>Daftarkan Perusahaan Anda</h3>
                <p>
                    Sudah Memiliki Akun?
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    <a class="nav-link scrollto" href="/login">Masuk</a>

                </button>
                {{-- <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button> --}}
            </div>
            <img src="assets/img/logoregister.png" class="image" alt="" />
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
    <script src="{{ asset('template/node_modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
    <script src="{{ asset('template/node_modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
    <script src="{{ asset('template/node_modules/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('template/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('template/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="app.js"></script>
    <script src="{{ asset('template/assets/js/page/auth-register.js') }}"></script>

</body>

</html>
