<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
</head>

<body>
    @include('components.navigation')
    
    <div class="header">
        <p>Our Services</p>
        <h2>Hotel Services</h2>
    </div>

    <div class="container">
        <div class="column left-column">
            <img src="{{ URL('assets/services.png')}}" alt="Cat" class="services-pic">
        </div>
        <div class="column right-column">                
            <div class="desc">
                <h3>FUKU SUITE</h3>
                <p class="price">Rp00.000/night</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul>
                    <li>Lorem ipsum dolor sit ametconsectetur adipiscing elit,</li>
                    <li>Lorem ipsum dolor sit ametconsectetur adipiscing elit,</li>
                </ul>
                <div class="book-btn">
                    <a href="{{ URL('https://api.whatsapp.com/send/?phone=6285741148770&text&type=phone_number&app_absent=0') }}" class="btn">Book Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-flip">
        <div class="column left-column-flip">
            <div class="desc-flip">
                <h3>FUKU SUITE</h3>
                <p class="price">Rp00.000/night</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <ul>
                    <li>Lorem ipsum dolor sit ametconsectetur adipiscing elit,</li>
                    <li>Lorem ipsum dolor sit ametconsectetur adipiscing elit,</li>
                </ul>
                <div class="book-btn">
                    <a href="{{ URL('https://api.whatsapp.com/send/?phone=6285741148770&text&type=phone_number&app_absent=0') }}" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="column right-column-flip">                
            <img src="{{ URL('assets/services.png')}}" alt="Cat" class="services-pic">
        </div>
    </div>

    <div class="additional">
        <h1>Facilities</h1>
        <p>Full AC | Air Purifier | Feeding Supplies | Cat Litter | Mineral Water | Playtime under <br>supervisor | Daily Report for Pawrents </p>
    </div>

    <div class="header-grooming">
        <p>Our Services</p>
        <h2>Grooming Services</h2>
    </div>

    <div class="container">
        <div class="column left-column">
            <img src="{{ URL('assets/services.png')}}" alt="Cat" class="services-pic">
        </div>
        <div class="column right-column">                
            <div class="desc">
                <h3>FUKU SUITE</h3>
                <p class="price">Rp00.000/night</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <ul>
                    <li>Lorem ipsum dolor sit ametconsectetur adipiscing elit,</li>
                    <li>Lorem ipsum dolor sit ametconsectetur adipiscing elit,</li>
                </ul>
                <div class="book-btn">
                    <a href="{{ URL('https://api.whatsapp.com/send/?phone=6285741148770&text&type=phone_number&app_absent=0') }}" class="btn">Book Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-flip">
        <div class="column left-column-flip">
            <div class="desc-flip">
                <h3>FUKU SUITE</h3>
                <p class="price">Rp00.000/night</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <ul>
                    <li>Lorem ipsum dolor sit ametconsectetur adipiscing elit,</li>
                    <li>Lorem ipsum dolor sit ametconsectetur adipiscing elit,</li>
                </ul>
                <div class="book-btn">
                    <a href="{{ URL('https://api.whatsapp.com/send/?phone=6285741148770&text&type=phone_number&app_absent=0') }}" class="btn">Book Now</a>
                </div>
                
            </div>
        </div>
        <div class="column right-column-flip">                
            <img src="{{ URL('assets/services.png')}}" alt="Cat" class="services-pic">
        </div>
    </div>

    @include('components.footer')
</body>
</html>
