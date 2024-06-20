<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            font-family: Poppins, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .nav a{
            text-decoration: none;
            color: rgb(87,65,40);
        }

        .logo a:hover{
            color: rgb(87,65,40);
            text-decoration: none;
        }

        .nav a:hover{
            color: rgb(87,65,40);
            text-decoration: underline;
            text-underline-offset: 1rem;
        }

        .main-container{
            /* width:1200px; */
            margin:auto;
        }

        .nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
            margin-left: 10rem;
            margin-right: 10rem;
        }

        .navbar{
            list-style: none;
            display: flex;
            gap:4rem;
            /* align-items: start; */
        }

        .navbar li{
            list-style: none;
            display: flex;
            align-items: start;
        }

        .nav-icon{
            display: flex;
            gap: 1.5rem;
        }

        #profile-dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none; /* Hide dropdown by default */
            position: absolute;
            background-color: white;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .dropdown-menu li {
            /* display: none; */
            padding: 8px 16px;
        }

        .dropdown-menu li a {
            text-decoration: none;
            color: black;
        }

        .dropdown-menu li a:hover {
            background-color: #ddd;
        }

        /* Show dropdown menu on hover */
        #profile-dropdown:hover .dropdown-menu {
            display: block;
        }

        .container{
            max-width: 500px;
            margin:auto;
            background-color: #FFF8ED;
            height: 400px;
            margin-top: 3rem;
            margin-bottom: 5rem;
            border-radius: 20px;
            padding: 20px;
            /* margin: 20px; */
        }

        .panel-title{
            margin-top: 0;
            color:rgb(135, 100, 69);
        }

        .col-xs-12{
            margin: 10px;
        }

        .dates-row{
            display: flex;
            width: 70%;
        }

        .form-control{
            padding:10px;
            width: 95%;
            border-radius: 20px;
            /* border-color:#c8a97e; */
            border: 2px solid #c8a97e;
        }

        .pay-btn{
            display: flex;
            place-content: center;
            margin: 12px;
        }

        .btn-pay{
            font-family: Poppins, sans-serif;
            padding: 10px 15px;
            border-radius: 20px;
            border: none;
            background-color: #c8a97e;
            color: #fff;
        }

        .control-label{
            color:rgb(135, 100, 69);
        }
    </style>
</head>
<body>   
    <nav id="desktop-nav">
            <div class="nav">
                <div class="logo">
                    <a href="/"><img src="{{ URL('assets\logo.png')}}" alt="logo" width="130"></a>
                </div>
                <nav>
                    <ul class="navbar">
                        <li><a href="Catalog">Catalog</a></li>
                        <li><a href="Services">Services</a></li>
                        <li><a href="/postgallery">Posts</a></li>
                        <li><a href="AboutUs">About Us</a></li>
                    </ul>
                </nav>
                <div class="nav-icon">
                    <div id="profile-dropdown">
                        <!-- <a href="profile" id="profile-icon"> -->
                        <img src="http://127.0.0.1:8000/assets/user.svg" alt="user-icon">
                        <span class="arrow">&blacktriangledown;</span>
                        <!-- </a> -->
                        <ul class="dropdown-menu">
                            @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                <a href="profile">Profile</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form> 
                            @else
                                <li>
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>
                                </li>
                            @if (Route::has('register'))
                                <li>
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Register
                                    </a>
                                </li>
                            @endif
                            @endauth
                            </nav>
                            @endif
                        </ul>
                    </div> 
                </div>
            </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table" >
                            <h3 class="panel-title" >Payment Details</h3>
                    </div>
                    <div class="panel-body">
        
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
        
                        <form 
                                role="form" 
                                action="{{ route('stripe.post') }}" 
                                method="post" 
                                class="require-validation"
                                data-cc-on-file="false"
                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                id="payment-form">
                            @csrf
        
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <br>
                                    <input class='form-control' size='20px' type='text'>
                                </div>
                            </div>
        
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group card required'>
                                    <label class='control-label'>Card Number</label><br> <input
                                        autocomplete='off' class='form-control card-number' size='20'
                                        type='text'>
                                </div>
                            </div>
        
                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                        class='form-control card-cvc' placeholder='ex. 311' size='4'
                                        type='text'>
                                </div>
                                
                            </div>

                            <div class="dates-row">
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                        type='text'>
                                </div>
                            </div>
        
                            <!-- <div class='form-row row'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try
                                        again.</div>
                                </div>
                            </div> -->
        
                            <div class="row">
                                <div class="pay-btn">
                                    <button class="btn-pay" type="submit">Pay Now</button>
                                </div>
                            </div>
                                
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    @include('components.footer')
</body>
    
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
</html>