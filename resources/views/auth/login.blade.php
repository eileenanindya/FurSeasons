<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="shortcut icon" href="{{ URL('img\icon.png')}}" type="x icon"> -->
    <link rel="stylesheet" href="{{ asset('css\login.css') }}">
</head>

<body>
    @include('components.navigation')
    
    <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4
        " :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class= "email">
            <h1>Login</h1>
            <x-input-label for="email" :value="__('')" />
            <x-text-input id="email" class="email1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" required placeholder="Enter your email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        
                    <!-- Password -->
            <div class= "password"> 
            <x-input-label for="password" :value="__('')"  />
            <x-text-input id="password" class="email1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" required placeholder="Enter your password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
         </div>

         <!-- Remember Me -->
         <div class="remember-password">
            <div class= "remember">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            </div>

            <div class="flex items-center justify-end mt-4">
            
            @if (Route::has('password.request'))
            <div class= "forgot">
                <a class="forgot-link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>
            @endif
            
            <x-primary-button class="ms-3">
                    {{ __('Sign In') }}
            </x-primary-button>
            </div>
        </div>

                
    </form>
    </x-guest-layout>

    <footer>
            <nav>
            <div class="content">
                <div class="logo-footer">
                    <div class="logo-img">
                        <img src="{{ URL('assets\logoimg.png')}}" alt="LogoImg" width="45">
                        <img src="{{ URL('assets\logolight.png')}}" alt="Logo-light" width="125"><br>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum nobis obcaecati perferendis mollitia ullam fugiat sit! Unde eligendi aliquid suscipit sapiente</p>
                    <div class="icon-footer">
                        <a href="{{ URL('https://api.whatsapp.com/send/?phone=6285741148770&text&type=phone_number&app_absent=0') }}"><img src="{{ URL('assets\whatsappicon.svg')}}" alt=""></a>
                        <a href="{{ URL('https://www.instagram.com/furseasons.id/') }}"><img src="{{ URL('assets\igicon.svg')}}" alt=""></a>
                        <a href="{{ URL('https://shopee.co.id/furseasons.id') }}"><img src="{{ URL('assets\shopeeicon.svg')}}" alt=""></a>
                    </div>
                </div>
                
                <nav>
                    <div class="nav-footer">
                        <ul class="nav-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Catalog</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Posts</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>
                </nav>  
                
            </div>
            <div id="horizontal-line"></div>
            <div class="copyright">
                <p>Copyright &#169; 2024 Fur Seasons. All Rights Reserved.</p>
            </div>
     </footer>
     <script src="{{ asset('js\script.js') }}"></script>
    </body>
</html>
