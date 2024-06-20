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
        .add-container{
            display: flex;
            justify-content: center;
        }

        label{
            width: 200px;
        }

        .input-text{
            margin: 10px;
        }

        .input-form{
            padding: 10px;
            background: #FFF8ED;
            border: none;
            border-radius: 20px;
            /* text-align: center; */
            font-family: "Poppins", sans-serif;

        }
        
        
    </style>
</head>
<body>
    <div class="main-container">
        @include('admin.header')
        @include('admin.sidebar')
        <main id="main" class="main">
            <div class="pagetitle">
            <h1>Add Product</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL('/admin/home')}}">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
                <li class="breadcrumb-item active">Add Product</li>
                </ol>
            </nav>
            </div><!-- End Page Title -->

            <div class="add-container">
                <form action="{{ URL('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-text">
                        <label>Product Name</label>
                        <input type="text" class="input-form" name="product_name" placeholder="Enter the name">
                    </div>
                    <div class="input-text">
                        <label>Product Cost</label>
                        <input type="number" class="input-form" name="product_cogs" placeholder="Enter the cost">
                    </div>
                    <div class="input-text">
                        <label>Product Price</label>
                        <input type="number" class="input-form" name="product_price" placeholder="Enter the price">
                    </div>
                    <div class="input-text">
                        <label>Product Desciption</label>
                        <input type="text" class="input-form" name="product_desc" placeholder="Enter the description">
                    </div>
                    <div class="input-text">
                        <label>Product Stock</label>
                        <input type="number" class="input-form" min="0" name="product_stock" placeholder="Enter product's stock">
                    </div>
                    <div class="input-text">
                        <label>Product Image</label>
                        <input type="file" class="input-form" name="product_pic">
                    </div>
                    <div class="input-submit">
                        <input type="submit" class="input-form" value="Add Product">
                    </div>
                </form>
                
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

