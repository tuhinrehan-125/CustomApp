<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Custom Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/css/styles.css') }}">
	
	<!--  BOX ICONS  -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

	<div class="login">
        <div class="login-content">
            <div class="login-img">
                <img src="{{ asset('auth/img/img-login.svg') }}" alt="">
            </div>

            <div class="login-forms">
                <form action="{{route('auth.login.check')}}" method="POST" class="login-registre" id="login-in">
                    @csrf
                    <h1 class="login-title">Sign In</h1>

                    <div class="login-box">
                        <i class='bx bx-user login-icon'></i>
                        <input type="email" placeholder="Email" class="login-input" name="email">
                    </div>

                    <div class="login-box">
                        <i class='bx bx-lock-alt login-icon'></i>
                        <input type="password" placeholder="Password" class="login-input" name="password">
                    </div>

                    <a href="#" class="login-forgot">Forgot password?</a>

                    <!-- <a href="#" class="login-button">Sign In</a> -->
                    <button type="submit" class="login-button">Sign In</button>

                    <div>
                        <span class="login-account">Don't have an Account ?</span>
                        <span class="login-signin" id="sign-up">Sign Up</span>
                    </div>
                </form>

                <form action="{{route('auth.register.store')}}" method="POST" class="login-create none" id="login-up">
                    @csrf
                    <h1 class="login-title">Create Account</h1>

                    <div class="login-box">
                        <i class='bx bx-user login-icon'></i>
                        <input type="text" placeholder="Username" class="login-input" name="username">
                    </div>
                    <span class="text-danger">@error('username'){{ $message }} @enderror</span>

                    <div class="login-box">
                        <i class='bx bx-at login-icon'></i>
                        <input type="text" placeholder="Email" class="login-input" name="email">
                    </div>
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>

                    <div class="login-box">
                        <i class='bx bx-lock-alt login-icon'></i>
                        <input type="password" placeholder="Password" class="login-input" name="password">
                    </div>
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>

                    <!-- <a href="#" type="submit" class="login-button">Sign Up</a> -->
                    <button type="submit" class="login-button">Sign Up</button>

                    <div>
                        <span class="login-account">Already have an Account ?</span>
                        <span class="login-signup" id="sign-in">Sign In</span>
                    </div>

                    <div class="login-social">
                        <a href="#" class="login-social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="login-social-icon"><i class='bx bxl-twitter' ></i></a>
                        <a href="#" class="login-social-icon"><i class='bx bxl-google' ></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="{{asset('auth/js/main.js')}}"></script>

</body>
</html>