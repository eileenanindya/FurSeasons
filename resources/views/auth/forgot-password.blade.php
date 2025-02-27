<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css\forgot-password.css') }}">
</head>

<body>
    <div class="main">
        @include('components.navigation')
        
        <div class="form">
            <h2>Forgot Your Password?</h2>
            <p>Please enter your email to request a password reset</p>
            <form action="{{route('password.email')}}" method="post">
                @csrf
                <label for="email" class="form-label"></label>
                <input type="email" class="form-control" name="email" id="email" required placeholder="Enter your email">
                
                <div class="submit-btn">
                    <input type="submit" class="submit" value="Send email" class="btn btn-primary w-100 mt-3">
                </div>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                </div>
            @endif
            @if(session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
            @endif
            <div class="inner-box"></div>
        </div>
        
        <footer>
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
    </div>
</body>
</html>