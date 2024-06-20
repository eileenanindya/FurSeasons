<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css\catalog.css') }}">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
</head>

<body>
    <div class="container">
        @include('components.navigation')
    
        <section id="about">
            <div class="section-container">
                <div class="about-details-container">
                    <div class="about-container">
                        <div class="details-container">
                        <div class="section__pic-container">
                            <img src="{{ URL('assets\greycat.png')}}" alt="AboutPicture" class="illustration" width="500">
                        </div>
                    </div>
                    <div class="text-container">
                        <div class="desc-container">
                            <h1>Your One-Stop Destination for Tail-Wagging Pet Care!</h1>
                            <p>Explore Fur Seasons, your one-stop destination for premium cat care. We specialize in pet hotel accommodations, grooming services, and stylish cat clothing, ensuring your beloved cats receive the utmost care and attention they deserve. With our dedicated team of professionals, we guarantee a purrfect experience every time.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-shape-divider-bottom-1717298742">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>
        
        <section id="product">
            <div class="product-container">
                <div class="product-title">
                    <h2>Our Products</h2>
                </div>
                @if(session('success'))
                    <div id="success-alert" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="product-list">
                    @yield('content')
                </div>
            </div>
            <div class="custom-shape-divider-top-1717301784">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
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
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var alert = document.getElementById('success-alert');
        if (alert) {
            // Auto close the alert after 3 seconds
            setTimeout(function() {
                alert.style.opacity = "0";
                setTimeout(function(){ alert.style.display = "none"; }, 600);
            }, 3000);
        }
    });
    </script>
</body>
</html>
    