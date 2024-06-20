<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <!-- Bootstrap CSS (example, adjust according to your setup) -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>
        /* Additional CSS styles can be added here if needed */
    </style>
</head>
<body>

@include('components.navigation')

<main>
    <section class="checkout">
        <h2>Checkout</h2>

        <div class="delivery-address">
            <h3>Delivery Address</h3>
            <div class="delivery-address-details">
                <p>{{$user->name}} <br>({{$user->phone_number}})</p>
                <p>{{$user->address}}</p>
                <a href="/profile" class="change-btn">Change</a>
            </div>
        </div>

        <div class="products-ordered">
            <div class="product-item">
                <table class="center">
                    <thead>
                    <tr>
                        <th><h3>Products Ordered</h3></th>
                        <th></th>
                        <th></th>
                        <th><span>Unit Price</span></th>
                        <th><span>Quantity</span></th>
                        <th><span>Item Subtotal</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $totalprice = 0; @endphp
                    @foreach($cart as $cart)
                    <tr>
                        <td><img src="{{ asset('product/' . $cart->product_pic) }}" alt="Product" class="product-img"></td>
                        <td>{{ $cart->product_name}}</td>
                        <td></td>
                        <td>Rp {{ number_format($cart->product_price, 0, ',', '.') }}</td>
                        <td>{{ $cart->product_quantity}}</td>
                        <td>Rp {{ number_format($itemsubtotal = $cart->product_price*$cart->product_quantity, 0, ',', '.') }}</td>
                    </tr>
                    @php 
                    $totalprice += $itemsubtotal; 
                    @endphp
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="order-total">
                <p>Order Total ({{$totalquantity}} item): <strong>Rp {{ number_format($totalprice, 0, ',', '.') }}</strong></p>
            </div>
        </div>

        <div class="payment-method">
            <h3>Payment Method</h3>
            <button id="codButton" class="btn btn-primary payment-btn" data-method="cod">COD</button>
            <button id="bankTransferButton" class="btn btn-primary payment-btn" data-method="bank-transfer">Bank Transfer</button>
        </div>

        <div class="payment-details" id="paymentDetails">
            <p>Product Subtotal: Rp {{ number_format($totalprice, 0, ',', '.') }}</p>
            <p>Buyer Service Fee: Rp 1.000</p>
            <p>Handling Fee: Rp 2.000</p>
            <p>Total Payment: <strong>Rp {{ number_format($totalprice+1000+2000, 0, ',', '.') }}</strong></p>
        </div>

        <!-- Place Order Button -->
        <button id="placeOrderButton" class="place-btn">Place Order</button>

    </section>
</main>

@include('components.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentButtons = document.querySelectorAll('.payment-btn');
        const placeOrderButton = document.getElementById('placeOrderButton');

        paymentButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                paymentButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to the clicked button
                this.classList.add('active');
            });
        });

        // Handle "Place Order" button click
        placeOrderButton.addEventListener('click', function() {
            const activeButton = document.querySelector('.payment-btn.active');
            if (!activeButton) {
                alert('Please select a payment method.');
                return;
            }

            const method = activeButton.getAttribute('data-method');
            if (method === 'cod') {
                // Redirect to COD order page
                window.location.href = '/cod_order'; // Adjust the URL according to your route
            } else if (method === 'bank-transfer') {
                // Handle bank transfer redirection or further processing
                alert('Redirect to bank transfer page.');
                // Replace alert with actual redirection logic
                window.location.href = '/stripe/{totalprice}'; // Example of bank transfer route
            } else {
                alert('Invalid payment method.');
            }
        });
    });
</script>

</body>
</html>
