<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="shortcut icon" href="{{ URL('img\icon.png')}}" type="x icon"> -->
    <link rel="stylesheet" href="{{ asset('css\register.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css\mediaqueries.css') }}"> -->
</head>

<body>
@include('components.navigation')

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class = "name">
            <h1>Sign Up</h1>
            <x-input-label for="name" :value="__('')" />
            <x-text-input id="name" class="name1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" required placeholder="Enter your name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        

        <!-- Email Address -->
        <div class="email">
            <x-input-label for="email" :value="__('')" />
            <x-text-input id="email" class="name1" type="email" name="email" :value="old('email')" required autocomplete="username" required placeholder="Enter your email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="email">
            <x-input-label for="phone_number" :value="__('')" />
            <x-text-input id="phone_number" class="name1" type="phone_number" name="phone_number" :value="old('phone_number')" required autocomplete="username" required placeholder="Enter your phone number" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <div class="email">
            <x-input-label for="address" :value="__('')" />
            <x-text-input id="address" class="name1" type="address" name="address" :value="old('address')" required autocomplete="username" required placeholder="Enter your address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="password">
            <x-input-label for="password" :value="__('')" />

            <x-text-input id="password" class="name1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" required placeholder="Enter your password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="password">
            <x-input-label for="password_confirmation" :value="__('')" />

            <x-text-input id="password_confirmation" class="name1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" required placeholder="Confirm your password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <div class = "ready">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>

            <x-primary-button class="ms-4">
            <div class = "sign">
                {{ __('Sign Up') }}
            </div>
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