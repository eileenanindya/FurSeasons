<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <!-- <link rel="shortcut icon" href="img/icon.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="{{ asset('css\posts.css') }}">
    <!-- <link rel="stylesheet" href="css/mediaqueries.css"> -->
</head>
<body>
    <div class="main-container">    
        @include('components.navigation')

        <section id="posts">
            <div class="section-container">
                <div class="about-details-container">
                    <div class="posts-container">
                        <div class="text-container">
                            <div class="desc-container">
                                <div class="desc-countainer-title">
                                    <h1>Additional Information</h1>
                                </div>
                                <div class="desc-countainer-sub">
                                    <p>Always check for the latest information and best deals from Fur Seasons!</p>
                                
                                    <div class="image-row1">
                                        @foreach($posts as $post)
                                            <img src="{{ asset('posts/' . $post->posts_pic) }}" alt="{{ $post->posts_name }}" class="info-image" width="300">
                                            <p>{{ $post->posts_desc }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('components.footer')
        <!-- <footer>
            <div class="content">
                <div class="info-footer">
                    <div class="info-img">
                        <img src="assets/logoimg.png" alt="LogoImg" width="45">
                        <img src="assets/logolight.png" alt="Logo-light" width="125"><br>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum nobis obcaecati perferendis mollitia ullam fugiat sit! Unde eligendi aliquid suscipit sapiente</p>
                    <div class="icon-footer">
                        <a href="https://api.whatsapp.com/send/?phone=6285741148770&text&type=phone_number&app_absent=0"><img src="assets/whatsappicon.svg" alt="WhatsApp"></a>
                        <a href="https://www.instagram.com/furseasons.id/"><img src="assets/igicon.svg" alt="Instagram"></a>
                        <a href="https://shopee.co.id/furseasons.id"><img src="assets/shopeeicon.svg" alt="Shopee"></a>
                    </div>
                </div>
            </div>

            <nav>
                <div class="nav-footer">
                    <ul class="nav-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Catalog</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="posts.php">Posts</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </nav>  

            <div id="horizontal-line"></div>
            <div class="copyright">
                <p>Copyright &#169; <?php echo date("Y"); ?> Fur Seasons. All Rights Reserved.</p>
            </div>
        </footer> -->
    </div>
</body>
</html>
