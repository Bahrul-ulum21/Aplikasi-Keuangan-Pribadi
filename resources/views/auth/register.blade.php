<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Daftar Akun &mdash; E-money</title>
    <link rel="shortcut icon" href="{{ asset('costome/assets/img/logo.png') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('costome/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('costome/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('costome/assets/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('costome/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('costome/assets/css/components.css') }}">
</head>

<body style="background: #f3f3f3">
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="{{ asset('costome/assets/img/jewelry.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>DAFTAR AKUN</h4></div>

                        <div class="card-body">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="frist_name">Nama Lengkap</label>
                                        <input id="frist_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" autofocus>
                                        @error('full_name')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="last_name">Username</label>
                                        <input id="last_name" type="text" class="form-control" name="username" value="{{ old('username') }}">
                                        @error('username')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                <div class="row" style="margin-top: 30px">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                        @error('password')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Konfirmasi Password</label>
                                        <input id="password2" type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree" @if(old('agree')) checked @endif>
                                        <label class="custom-control-label" for="agree">Saya setuju dengan syarat dan ketentuan</label>
                                        @error('agree')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        DAFTAR
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        © <strong>E-Money</strong> 2023. Hak Cipta Dilindungi.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('costome/assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('costome/assets/modules/popper.js') }}"></script>
<script src="{{ asset('costome/assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('costome/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('costome/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('costome/assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('costome/assets/js/stisla.js') }}"></script>
<script src="{{ asset('costome/assets/js/sweetalert.min.js') }}"></script>

<!-- JS Libraies -->
<script>
    // Display Sweet Alert if success message exists
    $(document).ready(function(){
        @if(session('success'))
            Swal.fire({
                title: 'Sukses!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif
    });
</script>

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ asset('costome/assets/js/scripts.js') }}"></script>
<script src="{{ asset('costome/assets/js/custom.js') }}"></script>
</body>
</html>
