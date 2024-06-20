<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('admin.css')

    <style type="text/css">
        table{
            margin: auto;
            width: 90%;
            border-collapse: separate;
            border-spacing: 0;
            background-color: #FFF8ED;
            border-radius: 20px;
        }

        th, td {
            padding: 1rem;
            text-align: left;
        }

        thead th {
            background-color: #f8ead4;
            padding: 1rem;
        }

        thead th:first-child {
            border-top-left-radius: 20px;
        }

        thead th:last-child {
            border-top-right-radius: 20px;
        }

        tbody tr:last-child td:first-child {
            border-bottom-left-radius: 20px;
        }

        tbody tr:last-child td:last-child {
            border-bottom-right-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        @include('admin.header')
        @include('admin.sidebar')
        <main id="main" class="main">
            <div class="pagetitle">
            <h1>Orders</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL('/admin/home')}}">Home</a></li>
                <li class="breadcrumb-item active">Orders</li>
                </ol>
            </nav>
            </div><!-- End Page Title -->

            <div class="add-container">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Order Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Product Name</th>
                                <th>Product Quantity</th>
                                <th>Product Price</th>
                                <th>Total</th>
                                <th>Product Image</th>
                                <th>Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $order)
                            <tr>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone_number }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->product_name }}</td>
                                <td>{{ $order->product_quantity }}</td>
                                <td>{{ $order->product_price }}</td>
                                <td>{{ $order->total_price }}</td>
                                <td><img src="{{ asset('product/' . $order->product_pic) }}" alt="product" width="100"></td>
                                <td>{{ $order->payment_status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>  
                </div>
            </div>
        </main><!-- End #main -->
    </div>
    @section('css')

    @endsection

    @section('js')

    @endsection

    @include('admin.script')
</body>
</html>

