<header>
    <div class="container-full">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12">
                <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md" href="#">
                    <i class="fa fa-navicon"></i>
                </a>
                <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                    <i class="fa fa-close"></i>
                </a>
                <div id="logo">
                    <a href="{{route('index')}}"><img src="img/logo.png" alt=""></a>
                </div>
            </div><!-- // col-md-2 -->
            <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
                <div class="search-form">
                    <form id="search" action="#" method="post">
                        <input type="text" placeholder="جستجو ..." />
                        <input type="submit" value="Keywords" />
                    </form>
                </div>
            </div><!-- // col-md-3 -->
            <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
            </div><!-- // col-md-4 -->
            <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm">
                <!--  -->
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                @auth
                <div class="dropdown">
                    <a data-toggle="dropdown" href="#" class="user-area">

                        <h2>{{auth()->user()->name}}</h2>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu account-menu">
                        <li><a href="{{route('videos.create')}}"><i class="fa fa-video-camera color-2"></i>اضافه کردن فیلم</a></li>
                        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out color-4"></i>خروج</a></li>
                    </ul>
                </div>
                @endauth
                @guest
                <div class="dropdown">
                    <a data-toggle="dropdown" href="#" class="user-area">
                        <h2>احراز هویت</h2>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    
                    <ul class="dropdown-menu account-menu">
                        <li><a href="{{route('login')}}"><i ></i>لاگین</a></li>
                        <li><a href="{{route('register')}}"><i ></i>ثبت نام</a></li>
                    </ul>
                </div>
                @endguest
            </div>
        </div><!-- // row -->
    </div><!-- // container-full -->
</header>
