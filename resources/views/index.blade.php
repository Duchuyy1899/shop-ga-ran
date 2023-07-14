<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <base href="{{asset(' ')}}"/>
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Gà Rán</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{URL::to('public/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder-->
    <!-- <div id="preloder">
        <div class="loader col-md-6"><h3>Đồ Án Tốt Nghiêp</h3></div>
        <div class="__button"><button type="button" class="btn btn-primary">Tắt</button></div>
    </div> -->

    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">X</span>
        <p><h1>Đồ Án Tốt Nghiệp</h1></p>
      </div>

    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            @if(Auth::check())
            <ul>
                <li><a href="gio-hang"><i class="fa fa-shopping-bag"></i> <span>{!!$Quantity!!}</span></a></li>
            </ul>

            <div class="header__cart__price">item:<span>{!!number_format($Total)!!} VND</span></div>
            @else
                <ul>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>00.00</span></div>
            @endif
        </div>
        <div class="humberger__menu__widget">
            @if(Auth::check())
            <div class="header__top__right__language">
                <div><a href="#" style="color: black"><i class="fa fa-user"></i> <div>{!! Auth::user()->name !!}</div></a></div>
                <span class="arrow_carrot-down"></span>
                <ul style="margin-top: 5px" style="width: 200px;">
                    <li><a href="thong-tin-ca-nhan">Thông Tin</a></li>
                    <li><a href="dang-xuat">Logout</a></li>
                </ul>
            </div>
            @else
            <div class="header__top__right__auth">
                <a href="login"><i class="fa fa-user"></i>Login</a>
            </div>
            @endif
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="trang-chu">Trang Chủ</a></li>
                <li><a href="lien-he">Liên Hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>shopgaran@gmail.com</li>
                <li>Miễn phí vận chuyển nếu đơn hàng trên 200k</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> shopgaran@gmail.com</li>
                                <li>Miễn phí vận chuyển nếu đơn hàng trên 200k</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            @if(Auth::check())
                                <div class="header__top__right__language">
                                    <div><a href="#" style="color: black"><i class="fa fa-user"></i> <div>{!! Auth::user()->name !!}</div></a></div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul style="margin-top: 5px" style="width: 200px;">
                                        <li><a href="thong-tin-ca-nhan">Thông Tin</a></li>
                                        <li><a href="dang-xuat">Logout</a></li>
                                    </ul>
                                </div>
                            @else
                                <div class="header__top__right__auth">
                                    <a href="login"><i class="fa fa-user"></i>Login</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="trang-chu"><img src="public/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="trang-chu">Trang Chủ</a></li>
                            <li><a href="lien-he">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                        @if(Auth::check())
                        <div class="header__cart">
                            <ul>
                                <li><a href="gio-hang"><i class="fa fa-shopping-bag"></i> <span>{!!$Quantity!!}</span></a></li>
                            </ul>
                            
                            <div class="header__cart__price">item:<span>{!!number_format($Total)!!} VND</span></div>
                        @else
                            <div class="header__cart">
                                <ul>
                                    <li><a href="gio-hang"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                                </ul>
                                <div class="header__cart__price">item: <span>0 VND</span></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </div>
                        <ul>
                            @foreach($loaisanpham as $item)
                                <li><a href="san-pham-theo-loai/{!!$item->manhom!!}">{!! $item->tennhom !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form class="search__form" action="tim-kiem">
                               
                                <input type="text" placeholder="Tìm Kiếm ?" name="txttimkiem">
                                <button type="submit" class="site-btn">Tìm Kiếm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0387170320</h5>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="public/img/hero/banner.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản Phẩm</h2>
                    </div>
                </div>
            </div>
    <!--product--------------------->
            @isset($products)
                <div>
                    <div class="row featured__filter">
                @foreach($products as $item)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/img/shop/{!! $item->hinhsp !!}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="san-pham/{!! $item->manhom !!}/{!! $item->masp !!}">Xem Chi tiết</a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h5><a href="san-pham/{!! $item->manhom !!}/{!! $item->masp !!}" style="color: black">{!! $item->tensp !!}</a></h5>
                            <h5 style="margin-top: 10px">Khuyến Mãi: 
                                @if($item->KhuyenMai)
                                    {!!$item->KhuyenMai!!}
                                @else
                                    Không
                                @endif
                            </h5>
                            <h5>Đơn Giá: {!!number_format($item->dongia)!!} VND</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="phantrang" class="col-lg-4 col-md-3 col-sm-6" style="position: relative;width: 200px">
                {!! $products -> links()!!}
            </div>
                </div>
            @endisset
    <!--End product--------------------->

    <!--product--------------------->
            @isset($timkiem)
            <div class="row featured__filter">
                @foreach($timkiem as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">

                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/img/shop/{!! $item->hinhsp !!}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="san-pham/{!! $item->manhom !!}/{!! $item->masp !!}">Xem Chi tiết</a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="san-pham/{!! $item->manhom !!}/{!! $item->masp !!}">{!! $item->tensp !!}</a></h6>
                            <h5>{!!number_format(($item->dongia))!!} VND</h5>
                        </div>
                    </div>

                </div>
                @endforeach
                <div  style="position: relative; left: 40%">
                    {!! $timkiem -> links()!!}
                </div>
            </div>
            @endisset
 <!--End product--------------------->
 <!--san pham theo loai--------------------->           
            @isset($sanphamtheoloai)
                <div class="row featured__filter">
                    @foreach($sanphamtheoloai as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">

                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="public/img/shop/{!! $item->hinhsp !!}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="san-pham/{!! $item->manhom !!}/{!! $item->masp !!}">Xem Chi tiết</a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="san-pham/{!! $item->manhom !!}/{!! $item->masp !!}">{!! $item->tensp !!}</a></h6>
                                <h5>{!!number_format(($item->dongia))!!} VND</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div style="position: relative; left: 40%">
                        {!! $sanphamtheoloai -> links()!!}
                    </div>
                </div>
            @endisset
    <!--End product--------------------->
        </div>
    </section>
    <!-- Featured Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="trang-chu"><img src="public/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>TPHCM</li>
                            <li>Số Điện Thoại: 0387170320</li>
                            <li>Email: shopgaran@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="public/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{URL::to('public/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::to('public/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('public/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{URL::to('public/js/jquery-ui.min.js')}}"></script>
    <script src="{{URL::to('public/js/jquery.slicknav.js')}}"></script>
    <script src="{{URL::to('public/js/mixitup.min.js')}}"></script>
    <script src="{{URL::to('public/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::to('public/js/main.js')}}"></script>



</body>

</html>