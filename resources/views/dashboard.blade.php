 <!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fur Seasons</title>
    <!-- <link rel="shortcut icon" href="{{ URL('img\icon.png')}}" type="x icon"> -->
    <link rel="stylesheet" href="{{ asset('css\home.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css\mediaqueries.css') }}"> -->
</head>
<body>
    <div class="main-container">    
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

        <nav id="desktop-nav">
            <div class="nav">
                <div class="logo">
                    <a href=""><img src="{{ URL('assets\logo.png')}}" alt="logo" width="130"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="Catalog">Catalog</a></li>
                        <li><a href="Services">Services</a></li>
                        <li><a href="Posts">Posts</a></li>
                        <li><a href="AboutUs">About Us</a></li>
                    </ul>
                </nav>
                <div class="nav-icon">
                    <a href="#"><img src="{{ URL('assets\search.svg')}}" alt="search-icon"></a>
                    <a href="Cart"><img src="{{ URL('assets\shopping-cart.svg')}}" alt="cart-icon"></a>
                    <a href="Profile"><img src="{{ URL('assets\user.svg')}}" alt="user-icon"></a>
                </div>
            </div>
            </div>
        </nav>

        <!-- <nav id="burger-nav">
            <div class="logo">
                <img src="assets/logo.png" alt="logo">
            </div>
            <div class="burger-menu">
                <div class="burger-icon" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="menu-links">
                    <li><a href="#Catalog" onclick="toggleMenu()">Catalog</a></li>
                    <li><a href="#Services" onclick="toggleMenu()">Services</a></li>
                    <li><a href="#Posts" onclick="toggleMenu()">Posts</a></li>
                    <li><a href="#About Us" onclick="toggleMenu()">About Us</a></li>
                </div>
            </div>
        </nav> -->
        

        <section id="pawsit">
            <div class="section-container">
                <div class="pawsit-details-container">
                    <div class="pawsit-container">
                        <div class="desc-container">
                            <p>Pawsitively Perfect<p>
                            <h1>Your One-Stop Destination for Tail-Wagging Pet Care!</h1>
                            <p>Lorem ipsum | dolor sit amet, consectetscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="text-container">
                        <div class="details-container">
                            <div class="spic">
                                <img src="{{ URL('assets\homecatpic.png')}}" alt="AboutPicture" class="illustration" width="500">
                            </div>      
                        </div>
                    </div>
                </div>
            </div>                           
        </section>

        <section id="our">
            <div class="section-container">
                <div class="our-title">
                    <h1>Our Services</h1>
                    <p>We always provide the best services for your pet!</p>
                </div>
                <div class="our-container">
                            <div class="hotelpic">
                                <img src="{{ URL('assets\hotelhome.png')}}" alt="HotelPicture" class="illustration" width="200">
                                <img src="{{ URL('assets\groominghome.png')}}" alt="HotelPicture" class="illustration" width="200">
                            </div>
                <div class="our-details-container">
                    <div class="our-container">
                        <div class="our-container">
                        </div>
                    </div>
        </section>

        <section id="product">
            <div class="section-container">
                <div class="product-details-container">
                    <div class="product-container">
                        <div class="product-desc-container">
                            <h1>Product Catalog</h1>
                            <p>Lorem ipsum | dolor sit amet, consectetscing elit, sed do eiusmod tempor 
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis 
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <img src="{{ URL('assets\product1.png')}}" alt="AboutPicture" class="illustration" width="120">
                            <img src="{{ URL('assets\product1.png')}}" alt="AboutPicture" class="illustration" width="120">
                            <img src="{{ URL('assets\product1.png')}}" alt="AboutPicture" class="illustration" width="120">
                            <div class="desc1-container">
                            <img src="{{ URL('assets\product1.png')}}" alt="AboutPicture" class="illustration" width="120">
                            <img src="{{ URL('assets\product1.png')}}" alt="AboutPicture" class="illustration" width="120">
                            <img src="{{ URL('assets\product1.png')}}" alt="AboutPicture" class="illustration" width="120">
                        </div>
                    </div>
                    <div class="text-container">
                        <div class="details-container">
                            <div class="spic">
                                <img src="{{ URL('assets\kucingcoklat.png')}}" alt="AboutPicture" class="illustration" width="300">
                            </div>      
                        </div>
                    </div>
                </div>
            </div>                           
        </section>

        <section id="about">
            <div class="section-container">
                <div class="about-details-container">
                    <div class="about-container">
                        <div class="desc-container">
                            <h1>About Us</h1>
                            <p>Explore Fur Seasons, your one-stop destination for premium cat care. We specialize in pet hotel accommodations, grooming services, and stylish cat clothing, ensuring your beloved cats receive the utmost care and attention they deserve. 
                                With our dedicated team of professionals, we guarantee a purrfect experience every time.</p>
                                <p><span>Operational hours:</span> <br>Thursday - Tuesday&emsp;&emsp;&emsp;10.00 - 18.00 
                                 <br>Wednesday&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;CLOSED</p>
                        </div>
                    </div>
                    <div class="text-container">
                        <div class="details-container">
                            <div class="apic">
                                <img src="{{ URL('assets\aboutusdihome.png')}}" alt="AboutPicture" class="illustration" width="420">
                            </div>      
                        </div>
                    </div>
                </div>
            </div>  
                    </div>
                </div>
            </div>                          
        </section>
        
        <section id="map">
            <div class="section-container">
                <div class="map-details-container">
                    <div class="map-container">
                        <div class="map-desc-container">
                            <h1>Get In Touch</h1>
                            <p>Lorem ipsum | dolor sit amet, consectetscing elit, sed do eiusmod tempor 
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis 
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="wa-logo">
                                <img src="{{ URL('assets\darkwhastsappicon.svg')}}" alt="AboutPicture" class="illustration" width="30">
                                <p>081-000-000-000</p>
                                <img src="{{ URL('assets\darkigicon.svg')}}" alt="AboutPicture" class="illustration" width="30">
                                <p>furseasons</p>
                                <img src="{{ URL('assets\darkigicon.svg')}}" alt="AboutPicture" class="illustration" width="30">
                                <p>furseasons</p>
                            </div>
                                <h1>Visit Us</h1>
                            <p>Jl. Veteran No.170A, Kratonan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57155</p>
                        </div>
                     </div>
                     <div class="text-container">
                        <div class="details-container">
                            <div class="bpic">
                            <div class="location">
                             <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506232.83087656874!2d110.20802058906251!3d-7.581075999999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17f5462d5af9%3A0x2966cb3df88cbfc9!2sFur%20Seasons%20Cat%20Hotel%20%26%20Grooming!5e0!3m2!1sen!2sid!4v1716614845244!5m2!1sen!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" 
                             referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
                                         
    
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

    <script src="{{ asset('js\script.js') }}"></script>
</body>
</html>