<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('admin.css')

    <style type="text/css">
        .center{
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
            <h1>Show Product</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL('/admin/home')}}">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
                <li class="breadcrumb-item active">Show Product</li>
                </ol>
            </nav>
            </div><!-- End Page Title -->

            <div class="add-container">
                <div class="cart-table">
                    <table class="center">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Description</th>
                                <th>Product Quantity</th>
                                <th>Product Price</th>
                                <th>Product Image</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $product)
                            <tr>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_desc }}</td>
                                <td>{{ $product->product_stock }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td><img src="{{ asset('product/' . $product->product_pic) }}" alt="Product" width="100"></td>
                                <td><a href="{{ URL('edit_product', $product->id)}}">Edit</a></td>
                                <td><a href="{{ URL('delete_product', $product->id)}}"><img src="{{ URL('assets/trashicon.svg')}}" alt="LogoImg" class="delete-icon" onclick="return confirm ('Are you sure to remove this product?')"></a></td> 
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

