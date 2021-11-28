<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/css/auth/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/css/auth/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Register form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form method="POST"  action="auth/register" class="register-form" id="register-form">
                            @csrf
                            {{-- USERNAME --}}
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Tulis usernamemu"/>
                            
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            {{-- NAMA PELANGGAN --}}
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Tulis Namamu"/>
                            
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- EMAIL --}}
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="Email" value="{{ old('email') }}" placeholder="Tulis emailmu"/>
                            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- NO HP --}}
                            <div class="form-group">
                                <label for="no_hp"><i class="zmdi zmdi-phone"></i></label>
                                <input id="no_hp" type="number" name="no_hp" class="form-control @error('name') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" placeholder="Tulis No Hpmu"/>
                            
                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- ALAMAT --}}
                            <div class="form-group">
                                <label for="alamat"><i class="zmdi zmdi-nature"></i></label>
                                <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Tulis alamatmu"/>
                            
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- JENIS KELAMIN --}}
                            <div class="form-group">
                                <label for="jk"><i class="zmdi zmdi-male-female"></i></label>
                                <input type="text" name="jk" id="jk" class="form-control @error('jk') is-invalid @enderror" name="jk" value="{{ old('jk') }}" placeholder="Tulis Jenis Kelaminmu"/>
                            
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- PASSWORD --}}
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" r id="password" placeholder="Tulis Password"/>
                            
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            {{-- RE PASSWORD --}}
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Repeat your password"/>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="/css/auth/images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="/css/auth/vendor/jquery/jquery.min.js"></script>
    <script src="/css/auth/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>