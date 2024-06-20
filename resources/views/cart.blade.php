<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fur Seasons</title>
    <!-- <link rel="shortcut icon" href="{{ URL('img\icon.png')}}" type="x icon"> -->
    <link rel="stylesheet" href="{{ asset('css\cart.css') }}">
</head>
<body>
    <div class="main-container">   
        @include('components.navigation')
        <h1 class="cart-title">My Cart</h1>
        
        <div class="cart-table">
        @if($cart->isEmpty())
                    <p>Your cart is empty</p>
                @else
            <table>
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $totalprice = 0; @endphp
                    @foreach($cart as $cart)
                    <tr>
                        <td><img src="{{ asset('product/' . $cart->product_pic) }}" alt="Product1" class="product-img"></td>
                        <td>{{ $cart->product_name}}</td>
                        <td>{{ $cart->product_quantity}}</td>
                        <td>Rp {{ number_format($cart->product_price, 0, ',', '.') }}</td>
                        <td><a href="{{URL('remove_cart', $cart->id)}}"><img src="{{ URL('assets/trashicon.svg')}}" alt="LogoImg" class="delete-icon" onclick="return confirm ('Are you sure to remove this product?')"></a></td> 
                    </tr>
                    @php 
                    $cart->product_price = $cart->product_price*$cart->product_quantity;
                    $totalprice += $cart->product_price; 
                    @endphp
                    @endforeach
                </tbody>
            </table>  
            @endif
        </div>

        <div class="total-price">
            <h1>Total price: Rp {{ number_format($totalprice, 0, ',', '.') }}</h1>
        </div>

        <div class="proceed-btn">
            <a class="checkout-btn" href="Checkout">Proceed to Checkout</a>
            <a class="continue-btn" href="Catalog">Continue shopping</a>
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

    <script src="{{ asset('js\script.js') }}"></script>
</body>
</html>