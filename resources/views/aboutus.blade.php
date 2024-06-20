<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fur Seasons</title>
    <!-- <link rel="shortcut icon" href="{{ URL('img\icon.png')}}" type="x icon"> -->
    <link rel="stylesheet" href="{{ asset('css\aboutus.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css\mediaqueries.css') }}"> -->
</head>
<body>
    <div class="main-container">    
        @include('components.navigation')

        <section id="about">
            <div class="section-container">
                <div class="about-details-container">
                    <div class="about-container">
                        <div class="details-container">
                        <div class="section__pic-container">
                            <img src="{{ URL('assets\aboutuspic.png')}}" alt="AboutPicture" class="illustration" width="500">
                        </div>
                    </div>
                    <div class="text-container">
                        <div class="desc-container">
                            <h1>Your One-Stop Destination for Tail-Wagging Pet Care!</h1>
                            <p>Explore Fur Seasons, your one-stop destination for premium cat care. We specialize in pet hotel accommodations, grooming services, and stylish cat clothing, ensuring your beloved cats receive the utmost care and attention they deserve. With our dedicated team of professionals, we guarantee a purrfect experience every time.</p>
                            <div class="icon-abt">
                                <a href="{{ URL('https://api.whatsapp.com/send/?phone=6285741148770&text&type=phone_number&app_absent=0') }}"><img src="{{ URL('assets\darkwhastsappicon.svg')}}" alt=""></a>
                                <a href="{{ URL('https://www.instagram.com/furseasons.id/') }}"><img src="{{ URL('assets\darkigicon.svg')}}" alt=""></a>
                                <a href="{{ URL('https://shopee.co.id/furseasons.id') }}"><img src="{{ URL('assets\darkshopeeicon.svg')}}" alt=""></a>
                            </div>
                            <p><span>Operational hours:</span> <br>Thursday - Tuesday&emsp;&emsp;&emsp;10.00 - 18.00 <br>Wednesday&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;CLOSED</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="abt-wave">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>

        <section id="facilities">
            <div class="facilities-container">
                <div class="facilities-title">
                    <h1>Facilities</h1>
                </div>
                <div class="facilities-gallery">
                    <div class="dream">
                        <img src="{{ URL('assets\facilities1.png')}}" alt="Facilities-1" >
                        <img src="{{ URL('assets\facilities2.png')}}" alt="Facilities-2">
                        <img src="{{ URL('assets\facilities3.png')}}" alt="Facilities-3">
                        <img src="{{ URL('assets\facilities4.png')}}" alt="Facilities-4">
                        <img src="{{ URL('assets\facilities5.png')}}" alt="Facilities-5">
                        <img src="{{ URL('assets\facilities6.png')}}" alt="Facilities-6">
                    </div>
                </div>
            </div>
            <div class="custom-shape-divider-top-1716638392">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>
        </section>

        <section id="map">
            <h1 class="map-title">Come Visit Us!</h1>
            <div class="map-container">
                <div class="location">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506232.83087656874!2d110.20802058906251!3d-7.581075999999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17f5462d5af9%3A0x2966cb3df88cbfc9!2sFur%20Seasons%20Cat%20Hotel%20%26%20Grooming!5e0!3m2!1sen!2sid!4v1716614845244!5m2!1sen!2sid" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                </div>
            </div>
        </section>
        
        
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

    <script src="{{ asset('js\script.js') }}"></script>
</body>
</html>