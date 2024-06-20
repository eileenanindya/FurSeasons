<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Posts</title>
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
            <h1>Show Posts</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL('/admin/home')}}">Home</a></li>
                <li class="breadcrumb-item active">Posts</li>
                <li class="breadcrumb-item active">Show Posts</li>
                </ol>
            </nav>
            </div><!-- End Page Title -->

            <div class="add-container">
                <div class="cart-table">
                    <table class="center">
                        <thead>
                            <tr>
                                <th>Post Name</th>
                                <th>Post Description</th>
                                <th>Post Image</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $posts)
                            <tr>
                                <td>{{ $posts->posts_name }}</td>
                                <td>{{ $posts->posts_desc }}</td>
                                <td><img src="{{ asset('posts/' . $posts->posts_pic) }}" alt="Post" width="100"></td>
                                <td><a href="{{ URL('edit_post', $posts->id)}}">Edit</a></td>
                                <td><a href="{{ URL('delete_post', $posts->id)}}"><img src="{{ URL('assets/trashicon.svg')}}" alt="LogoImg" class="delete-icon" onclick="return confirm ('Are you sure to remove this post?')"></a></td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>  
                </div>
            </div>
        </main>
    </div>
    @section('css')

    @endsection

    @section('js')

    @endsection

    @include('admin.script')
</body>
</html>

