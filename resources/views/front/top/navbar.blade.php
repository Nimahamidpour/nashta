<!-- Masthead -->
<header class="masthead page-section">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-6  d-flex flex-row-reverse direction-ltr bd-highlight">
                <div class="p-0">
                    <div class="outer-menu">
                        <input class="checkbox-toggle" type="checkbox"/>
                        <div class="hamburger">
                            <div></div>
                        </div>
                        <div class="menu">
                            <div>
                                <div>
                                    <ul>
                                        <li><a href="{{route('index')}}">صفحه اصلی </a></li>
                                        <li><a href="{{route('day-order')}}">سفارش روز</a></li>
                                        <li><a href="{{route('pre-order')}}">پیش سفارش</a></li>
                                        <li><a href="{{route('aboutus')}}">درباره ما</a></li>
                                        <li><a href="{{route('guid')}}">چگونه سفارش دهم؟</a></li>
                                        <li><a href="#footer">تماس با ما</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <ul class="navbar-nav p-0 m-0">
                        <li class="nav-item  align-right dropdown">
                            <button type="button" class="btn form-control-sm"
                                    data-toggle="dropdown">
                                <img src="{{url('/front/img/structure/user.svg')}}" alt="" class="height-40width-40"/>
                            </button>
                            <ul class="dropdown-menu">
                                @auth
                                    <li class="nav-item  align-right  dropdown-item">
                                        <a class="nav-link  bold font-size-14 text-success"
                                           href="{{route('edit-user',Auth()->user()->id)}}">ویرایش پروفایل</a>
                                    </li>
                                    <li class="nav-item  align-right  dropdown-item">
                                        <a class="nav-link  bold font-size-14 text-success"
                                           href="{{route('listorder')}}">ورود به محیط کاربری</a>
                                    </li>
                                    <li class="nav-item  align-right  dropdown-item">
                                        <form action="{{route('logout')}}" method="post">
                                            @csrf
                                            <input type="submit" class="btn btn-danger bold font-size-14" value="خروج">
                                        </form>
                                    </li>

                                @else
                                    <li class="nav-item  align-right  dropdown-item">
                                        <a class="nav-link  bold font-size-14 text-success" href="{{route('login')}}">ورود </a>
                                    </li>
                                    <li class="nav-item  align-right  dropdown-item">
                                        <a class="nav-link  bold font-size-14 text-success"
                                           href="{{route('register')}}">ثبت نام </a>
                                    </li>
                                @endauth
                            </ul>

                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-6 d-flex flex-column bd-highlight mb-3">
                <div class="p-4 ">
                    <img src="{{url('/front/img/structure/icon-min.png')}}" alt="" class="height-50width-50"/>
                </div>
                <div class="p-4 ">
                    <p data-aos="zoom-in-down" data-aos-delay="500"
                       class="text-white font-weight-light mt-2 font-size-22 bold">ناشـــتا ، سـفارش آنــلاین انــواع صـبحانه
                        در تـــهران </p>
                </div>
                <div class="p-4 ">
                    <div id="container1">

                        <div class="button1 border-18 bg-main-green mb-3" id="button-3">
                            <div id="circle"></div>
                            <a href="{{route('day-order')}}" class="font-size-17 ml-1">سفـارش روز</a>&nbsp;
                            <img src="{{url('/front/img/structure/sb.png')}}" rel="cart-icon"
                                 class="img-fluid height-30width-30"
                                 alt=""/>
                        </div>
                        <div class="button1 border-18 bg-main-green mb-3" id="button-3">
                            <div id="circle"></div>
                            <a href="{{route('pre-order')}}" class="font-size-17 ml-1">پیش سفارش</a>&nbsp;
                            <img src="{{url('/front/img/structure/sb.png')}}" rel="cart-icon"
                                 class="img-fluid height-30width-30"
                                 alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>
<!-- /Masthead -->
