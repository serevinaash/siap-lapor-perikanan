
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('/frontend/login/style2.css') }}">
         
    <title>Registration Form</title> 
</head>
<body>
    
    <div class="container">
        <div class="form login">
            <span class="title">Registration</span>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-field">
                    <label for="name" value="{{ __('Name') }}"></label>
                    <input id="name" type="text" name="name" :value="old('name')" placeholder="Enter your name" required>
                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <label for="name" value="{{ __('Username') }}"></label>
                    <input id="username" type="text" name="username" :value="old('username')" placeholder="Enter your username" required>
                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <label for="email" value="{{ __('Email') }}"></label>
                    <input id="email" type="email" name="email" :value="old('email')" placeholder="Enter your email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <label for="password" value="{{ __('Password') }}"></label>
                    <input id="password" type="password" name="password" class="password" placeholder="Create a password" required>
                    <i class="uil uil-lock icon"></i>
                </div>
                <div class="input-field">
                    <label for="password_confirmation" value="{{ __('Confirm Password') }}"></label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="password" placeholder="Confirm a password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="input-field button">
                    <input type="submit" value="Signup">
                </div>
            </form>

            <div class="login-signup">
                <span class="text">{{ __('Already registered?') }}
                    <a href="{{ route('login') }}" class="text login-link">Login Now</a>
                </span>
            </div>
        </div>
    </div>
    <script src="{{ asset('/frontend/login/script1.js') }}"></script> 

</body>
</html>
