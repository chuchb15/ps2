<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>BagBag</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">
</head>

<body class="header_sticky header-style-2 has-menu-extra">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <!-- Boxed -->
    <div class="boxed">
        <div id="site-header-wrap">
            <!-- Header -->
            <header id="header" class="header clearfix">
                <div class="container-fluid clearfix container-width-93" id="site-header-inner">
                    <div id="logo" class="logo float-left">
                        <a href="index.php" title="logo">
                            <img src="images/z4152026595126_6236ec80d20bd2b4b081c83ce309c3f3-removebg-preview.png"
                                alt="image" width="180" height="70">
                        </a>
                    </div><!-- /.logo -->
                    <div class="mobile-button"><span></span></div>
                    <ul class="menu-extra">
                        <li class="box-search">
                            <a class="icon_search header-search-icon" href="#"></a>
                            <form role="search" method="get" class="header-search-form" action="#">
                                <input type="text" value="" name="s" class="header-search-field"
                                    placeholder="Search...">
                                <button type="submit" class="header-search-submit" title="Search">Search</button>
                            </form>
                        </li>
                        <li class="box-login">
                            <a class="icon_login" href="#"></a>
                        </li>
                        <li class="box-cart nav-top-cart-wrapper">
                            <a class="icon_cart nav-cart-trigger active" href="cart.php"></a>
                        </li>
                    </ul><!-- /.menu-extra -->
                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li>
                                    <a href="index.php">HOME</a>
                                </li>
                                <li>
                                    <a href="shop-3col.php">SHOP</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="shop-3col-slide.php">Shop Layouts</a>
                                        </li>
                                        <li>
                                            <a href="shop-detail-des.php">Shop Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="coming-soon.php">PAGE</a>
                                </li>
                                <li class="active">
                                    <a href="blog-list.php">BLOG</a>
                                </li>
                                <li>
                                    <a href="contact.php">CONTACT</a>
                                </li>
                            </ul>
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.container-fluid -->
            </header><!-- /header -->
        </div><!-- /.site-header-wrap -->
        <!-- ==================================================================================== -->

        <h1> Giỏ Hàng</h1>
        <h2> <a href="shop-3col.php"> Danh sách sản phẩm</a></h2>
        <?php
            session_start();
            require("Database.php");
            if(isset($_SESSION["cart"])==false || count($_SESSION["cart"])==0)//nếu chưa có giỏ hàng
            {
        ?>
            <div class="pro">
                <p> Bạn chưa có sản phẩm nào trong giỏ hàng</p>
                <a href="shop-3col.php"> Vào Danh sách sản phẩm</a>
            </div>
            <?php
                }
                else
                {
                ?>
                <form name="form1" id="form1" method="post" action="updatecart.php">
                    <?php
                        $tongtien =0;
                        foreach($_SESSION["cart"] as $id => $soluong)
                        {
                        $row = Tim_Sanpham_Theo_ID($id);
                        $tongtien += $row["price"]*$soluong;
                    ?>
                    <div class="pro">
                        <h3><?=$row["title"]?> - <?=$row["author"]?></h3>
                        <p>Giá: <b><?=number_format($row["price"])?> vnđ </b></p>
                        <p align="right">
                        Số lượng <input type="text" name="qty[<?=$id?>]" value="<?=$soluong?>" size="5">
                        </p>
                        <p align="right">Tổng tiền Sản phẩm:
                        <b><?=number_format($row["price"]*$soluong)?> vnđ</b>
                        </p>
                        <p align="right"><a href="delcart.php?id=<?=$id?>">Xóa sản phẩm</a></p>
                    </div>
                    <?php
                        }//for
                        ?>
                        <div class="pro">
                            <h3 style="text-align:right; color:red">
                            Tổng tiền: <?=number_format($tongtien)?> VNĐ</h3>
                            <p align="center">
                                <input type="submit" name="b1" id="b1" value="CẬP NHẬT SỐ LƯỢNG"
                                style="width:300px; height:50px; font-size:18px">
                            </p>
                            <p align="center">
                                <a href="delcart.php?id=0" style="width:300px; height:50px; font-size:18px; color:RED">
                                XÓA TẤT CẢ SẢN PHẨM</a>
                            </p>
                        </div>
                </form>
                <?php
            }//else
        ?>
        

        <!-- END NEW LATEST -->

        <section class="flat-row mail-chimp">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text">
                            <h3>Sign up for Send Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="subscribe clearfix">
                            <form action="#" method="post" accept-charset="utf-8" id="subscribe-form">
                                <div class="subscribe-content">
                                    <div class="input">
                                        <input type="email" name="subscribe-email" placeholder="Your Email">
                                    </div>
                                    <div class="button">
                                        <button type="button">SUBCRIBE</button>
                                    </div>
                                </div>
                            </form>
                            <ul class="flat-social">
                                <li><a href="https://www.facebook.com/profile.php?id=100090968866398"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul><!-- /.flat-social -->
                        </div><!-- /.subscribe -->
                    </div>
                </div>
            </div>
        </section><!-- /.mail-chimp -->

        <!-- // -->
        <div class="box-shopp">
            <div class="box--shop1">
                <div class="product-shop"></div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget widget-link link-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.09798860926!2d105.77960061501275!3d21.028764885998417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3285df81f%3A0x97be82a66bbe646b!2sDetech%20Building!5e0!3m2!1sen!2s!4v1678266858974!5m2!1sen!2s"
                                width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-link">
                            <ul>
                                <li><a href="contact.php">About Us</a></li>
                                <li><a href="https://www.facebook.com/profile.php?id=100090968866398">Online Store</a>
                                </li>
                                <li><a href="blog-list.php">Blog</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--<div class="col-md-3">
                <div class="widget widget-link link-login">
                    <ul>
                        <li><a href="#">Login/ Register</a></li>
                        <li><a href="#">Your Cart</a></li>
                        <li><a href="#">Wishlist items</a></li>
                        <li><a href="#">Your checkout</a></li>
                    </ul>
                </div>
            </div>-->
                    <div class="col-md-3">
                        <div class="widget widget-link link-faq">
                            <ul>
                                <li><a href="contact.php">FAQs</a></li>
                                <li><a href="contact.php">Term of service</a></li>
                                <li><a href="contact.php">Privacy Policy</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3">
                        <div class="widget widget-brand">
                            <div class="logo logo-footer">
                                <a href="index.php"><img
                                        src="images/z4152026595126_6236ec80d20bd2b4b081c83ce309c3f3-removebg-preview.png"
                                        alt="image" width="140" height="40"></a>
                            </div>
                            <ul class="flat-contact">
                                <li class="address">8A Ton That Thuyet, Ha Noi</li>
                                <li class="phone">0378-856-272</li>
                                <li class="email">bagbagshop@fpt.com</li>
                            </ul><!-- /.flat-contact -->
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.footer -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="copyright text-center">Copyright @2023 <a href="#">Modaz</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>

    </div>

    <!-- Javascript -->

    <script type="text/javascript" src="javascript/shop.js"></script>
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/tether.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/jquery.easing.js"></script>
    <script src="javascript/parallax.js"></script>
    <script src="javascript/jquery-waypoints.js"></script>
    <script src="javascript/jquery-countTo.js"></script>
    <script src="javascript/jquery.countdown.js"></script>
    <script src="javascript/jquery.flexslider-min.js"></script>
    <script src="javascript/images-loaded.js"></script>
    <script src="javascript/jquery.isotope.min.js"></script>
    <script src="javascript/magnific.popup.min.js"></script>
    <script src="javascript/jquery.hoverdir.js"></script>
    <script src="javascript/owl.carousel.min.js"></script>
    <script src="javascript/equalize.min.js"></script>
    <script src="javascript/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB">
    </script>
    <script src="javascript/jquery-ui.js"></script>

    <script src="javascript/jquery.cookie.js"></script>
    <script src="javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="javascript/rev-slider.js"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="rev-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>
</html>