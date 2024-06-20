<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
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
            <h1>Edit posts</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL('/admin/home')}}">Home</a></li>
                <li class="breadcrumb-item active">posts</li>
                <li class="breadcrumb-item active">Show posts</li>
                <li class="breadcrumb-item active">Edit posts</li>
                </ol>
            </nav>
            </div><!-- End Page Title -->

            <div class="add-container">
                <form action="{{ URL('/edit_post_confirm', $posts->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-text">
                        <label>Post Name</label>
                        <input type="text" class="input-form" name="posts_name" placeholder="Enter the name" value="{{ $posts->posts_name}}">
                    </div>
                    <div class="input-text">
                        <label>Post Desciption</label>
                        <input type="text" class="input-form" name="posts_desc" placeholder="Enter the description" value="{{ $posts->posts_desc}}">
                    </div>
                    <div class="input-text">
                        <label>Post Image</label>
                        <input type="file" class="input-form" name="posts_pic">
                    </div>
                    <div>
                        <input type="submit" class="input-form" value="Edit Post">
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

