<a class="bold decoration-none font-size-13 m-3 shopping-cart fixed-bottom " href="{{route('user-panel-basket')}}">
    &nbsp;<i class="fa fa-fw fa-3x fa-shopping-basket text-orange"></i>

    <span class="edd-cart-quantity fa-num text-white" id="count-id">
        @if(session()->get('cart'))
            {{count(session()->get('cart'))}}
         @else
            {{0}}
        @endif
    </span>
</a>
<section id="footer" >
    <div class="container-fluid footer-style">
        <div class="row row-footer">
            <div class="col-md-12 my-3">
                <div class="container">
                    <div class="row my-4">
                        <!-- ABOUT US -->
                        <div class="col-md-5 col-sm-12 col-xs-6">
                            <h2 class="text-right text-black bold p-footer-style font-size-17">
                                {{$aboutus->name}}
                            </h2>

                            <p class="text-justify text-dark bold line-35 font-size-13 " id="txt-footer">
                                {{$aboutus->shorttext}}
                            </p>
                        </div>
                        <!-- ABOUT US -->
                        <!-- CONTACT US -->
                        <div class="col-md-3 col-sm-12 col-xs-6">
                            <ul class="list-unstyled text-xl-right text-lg-right text-md-right text-center">
                                <li class="text font-1rem text-black bold">ارتباط با ما</li>

                                @foreach($contactus as $contact_us)
                                    @if($contact_us->type == "1")
                                        <li>
                                            <a class="text-dark decoration-none font-size-13 fa-num align-right bold"
                                               href="tel:{{$contact_us->url}}">
                                                <i class="fa-flip-horizontal fas fa-phone-volume text-success"></i>
                                                &nbsp;
                                                {{$contact_us->name}}
                                            </a>
                                        </li>

                                    @elseif($contact_us->type == "2")

                                        <li>
                                            <a class="text-dark decoration-none font-size-13 fa-num align-right bold"
                                               href="mailto:{{$contact_us->url}}">
                                                <i class="fa-flip-horizontal fas fa-envelope text-success"></i>
                                                &nbsp;
                                                {{$contact_us->name}}
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <h3 class="text-dark  font-size-13 fa-num align-right mt-2 bold">
                                                <i class="fa-flip-horizontal fas fa-home text-success"></i>
                                                {{$contact_us->name}}
                                            </h3>
                                        </li>
                                    @endif

                                @endforeach

                            </ul>
                        </div>
                        <!-- CONTACT US -->

                        <!-- SOCIAL MEDIA -->
                        <div class="col-md-4 col-sm-12 col-xs-6">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-6">
                                    <ul class="list-unstyled text-xl-right text-lg-right text-md-right text-center">
                                        <li class="font-1rem text mb-3 text-black bold">ما را در شبکه های اجتماعی دنبال
                                            کنید
                                        </li>


                                        @foreach($socialmedia as $social_meida)
                                            @switch($social_meida->type)
                                                @case (1)
                                                    <li class="list-inline-item ">
                                                        <a class="footer-item" data-toggle="tooltip" title="کانال اینستگرام"
                                                           data-placement="bottom"
                                                           href="https://www.instagram.com/{{$social_meida->url}}">
                                                            <i class="fab fa-instagram fa-2x text-danger"></i>
                                                        </a>
                                                    </li>
                                                @break
                                                @case (2)
                                                    <li class="list-inline-item ">
                                                        <a class="footer-item" data-toggle="tooltip" title="کانال تلگرام"
                                                           data-placement="bottom"
                                                           href="https://www.t.me/{{$social_meida->url}}">
                                                            <i class="fab fa-telegram fa-2x color-blue"></i>
                                                        </a>
                                                    </li>
                                                @break
                                                @case (3)
                                                    <li class="list-inline-item ">
                                                        <a class="footer-item" data-toggle="tooltip" title="کانال لینکدین"
                                                           data-placement="bottom"
                                                           href="https://www.linkedin.com/{{$social_meida->url}}">
                                                            <i class="fab fa-linkedin-in fa-2x text-primary"></i>
                                                        </a>
                                                    </li>
                                                @break
                                                @case (4)
                                                    <li class="list-inline-item ">
                                                        <a class="footer-item" data-toggle="tooltip" title="کانال یوتوب"
                                                           data-placement="bottom"
                                                           href="https://www.youtube.com/{{$social_meida->url}}">
                                                            <i class="fab fa-youtube fa-2x text-danger"></i>
                                                        </a>
                                                    </li>
                                                @break
                                                @case (5)
                                                    <li class="list-inline-item ">
                                                        <a class="footer-item" data-toggle="tooltip" title="کانال فیسبوک"
                                                           data-placement="bottom"
                                                           href="https://www.facebook.com/{{$social_meida->url}}">
                                                            <i class="fab fa-facebook-f fa-2x text-primary"></i>
                                                        </a>
                                                    </li>
                                                @break
                                                @case (6)
                                                    <li class="list-inline-item ">
                                                        <a class="footer-item" data-toggle="tooltip" title="کانال توییتر"
                                                           data-placement="bottom"
                                                           href="https://www.twitter.com/{{$social_meida->url}}">
                                                            <i class="fab fa-twitter fa-2x text-info"></i>
                                                        </a>
                                                    </li>
                                                @break

                                            @endswitch


                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- SOCIAL MEDIA -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<!-- Footer -->
<footer class="bg-light py-2">
    <div class="container">
        <div class="small text-center text-dark bold">*کلیه حقوق مادی و معنوی این وبسایت متعلق به مجموعه  ناشتا  می باشد* </div>
    </div>
</footer>


<!-- Footer -->
<footer class="bg-main-green py-2">
    <div class="container">
        <div class="text-white small text-center  "><a class="text-white decoration-none" href="https://wwww.websazandeh.ir">*طراحی و اجرا توسط شرکت وب سازنده* </a></div>
    </div>
</footer>
