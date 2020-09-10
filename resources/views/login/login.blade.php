<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="{{asset('css/app.css')}}" rel="stylesheet">




<body style="background-image: url('img/background/b1.jpg')">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center ">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form method="post" action="{{ route('login') }}" id="login-form" class="form">
                            {{csrf_field() }}
                            <h3 class="text-center text-primary ">เข้าสู่ระบบเว็บไซต์การประชุม</h3><br>
                            <div class="form-group">
                                <label for="email" class="col-form-label text-dark ">
                                    <h4>E-Mail :</h4>
                                </label><br>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class=" col-form-label text-dark">
                                    <h4>Password :</h4>
                                </label><br>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="remember me" class="text-dark"><h4>จดจำรหัสผ่าน</h4></label>
                                 <input type="checkbox" {{ old('remember') ? 'checked' : '' }} >
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link col-md-8" href="{{ route('password.request') }}">
                                    <h4> Forgot Your Password?</h4>
                                </a>
                                @endif
                                
                                <br>
                                <button class="btn btn-primary col-md-12 " type="submit"><i class="fas fa-user-plus"></i>เข้าสู่ระบบ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>