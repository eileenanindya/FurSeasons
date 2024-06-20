<style>
    footer{
        /* height: 100%; */
        width: 100%;
        /* margin: 0; */
        background : rgb(135, 100, 69);
        position: absolute;
        /* bottom: 0; */
    }

    .content{
        display: flex;
        /* align-items: center; */
        justify-content: space-between;
        margin-left: 5rem;
        margin-right: 5rem;
        padding-top: 2rem;
    }

    .logo-footer{
        /* display: flex; */
        align-items: center;
        gap: 1rem;
        margin-right: 30%;
    }

    .logo-footer p{
        font-size: 0.8rem;
        color: rgb(255, 243, 221);
    }

    .logo-img{
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .nav-footer ul{
        margin-top: 0.5rem;
        list-style: none;
        display: flex;
        gap:3rem;
    }

    .nav-links {
        margin: 0 auto;
    }

    .icon-footer{
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .nav-footer a{
        text-decoration: none;
        color: rgb(255, 243, 221);
    }

    .nav-footer a:hover{
        color: rgb(255, 243, 221);
        text-decoration: underline;
        text-underline-offset: 1rem;
    }

    #horizontal-line{
        margin-top: 1rem;
        margin-right: 5rem;
        margin-left: 5rem;
        /* width: 100%; */
        height: 1px;
        background-color: rgb(255, 243, 221);
    }

    .copyright{
        margin-right: 5rem;
        padding-bottom: 0.1rem;
    }

    .copyright p{
        font-size: 0.8rem;
        text-align: end;
        color: rgb(255, 243, 221);
    }
</style>

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
                <li><a href="/">Home</a></li>
                <li><a href="Catalog">Catalog</a></li>
                <li><a href="Services">Services</a></li>
                <li><a href="Posts">Posts</a></li>
                <li><a href="AboutUs">About</a></li>
            </ul>
        </div>
    </nav>  
                
    </div>
    <div id="horizontal-line"></div>
    <div class="copyright">
        <p>Copyright &#169; 2024 Fur Seasons. All Rights Reserved.</p>
    </div>
</footer>