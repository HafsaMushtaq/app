<?php include 'connection/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demos.wpexpand.com/html/eElectronics/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Jun 2016 08:57:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eSpares - HTML eCommerce Template</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        ul#egmenu {  
    background: #1abc9c; 
    height: 30px;
    width: 100%; 
}

ul#egmenu > li { 
    float: left; 
    position: relative;  
}

ul#egmenu ul {
    background: #444; 
    display: none; 
    position: absolute;
    left: 0; top: 100%;
}

ul#egmenu a { 
    cursor: pointer; 
    display: block; 
    color: white; 
    line-height: 30px; 
    padding: 0 10px; 
}

ul#egmenu li { list-style: none; }

ul#egmenu li:hover { background: #555;  }
ul#egmenu li:hover ul { display: block;  }

@media all and (max-width: 480px) {
    ul#egmenu {  height: auto; }
    ul#egmenu > li {  float: none; width: 100%; }
    ul#egmenu a { line-height: 40px; }
    ul#egmenu ul { position: relative; }
}

@media all and (min-width: 481px) {
    ul#egmenu li:hover { background: #555;  }
    ul#egmenu li:hover ul { display: block;  }
}

@media all and (max-width: 480px) {
    ul#egmenu {  height: auto; }
    ul#egmenu > li {  float: none; width: 100%; }
    ul#egmenu a { line-height: 40px; }
    ul#egmenu ul { position: relative; }

    ul#egmenu li.tap { background: #555;  }
    ul#egmenu li.tap ul { display: block;  }
} 
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','.show_more',function(){
            var ID = $(this).attr('id');
            $('.show_more').hide();
            $('.loding').show();
            $.ajax({
                type:'POST',
                url:'ajax_more.php',
                data:'id='+ID,
                success:function(html){
                    $('#show_more_main'+ID).remove();
                    $('.list').append(html);
                }
            });
            
        });
    });

    $('.has-sub').click( function(e) {
    e.preventDefault();
    $(this).parent().toggleClass('tap');
    }); 
    </script>
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="cart.php"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php">e<span>Spares</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart - <span class="cart-amunt">$800</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" id="egmenu" >
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="shop.php">Shop page</a></li>
                        <li><a href="single-product.html">Single product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="#" class="has-sub">Category</a>
                            <ul style="padding-left:0; z-index: 1; ">
                              <li><a href="#">Computers</a></li>
                              <li><a href="#">Phones</a></li>
                              <li><a href="#">Tablets</a></li>
                              <li><a href="#">Beepers</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="list">
                <?php 
                    $query = mysqli_query($connect, "SELECT * FROM images ORDER BY image_id ASC LIMIT 8");
            
                    //number of rows
                    $rowCount = mysqli_num_rows($query);
                    if($rowCount > 0){ 
                    while($row = mysqli_fetch_assoc($query)){ 
                        $tutorial_id =  $row['image_id'];
                         echo " <div class=\"col-md-3 col-sm-6\">
                                    <div class=\"single-shop-product\">
                                        <div class=\"product-upper\">
                                            <img src=".$row["image_path"]." alt=".$row["image_name"]."> 
                                        </div>
                                            <h2><a href=\"#\">".$row["product_name"]."</a></h2>
                                        <div class=\"product-carousel-price\">
                                                <ins>".$row["original_price"]."</ins> <del>$999.00</del>
                                        </div>  
                                            
                                        <div class=\"product-option-shop\">
                                                <a class=\"add_to_cart_button\" data-quantity=\"1\" data-product_sku=\"\" data-product_id=\"70\" rel=\"nofollow\" href=\"#\">Add to cart</a>
                                        </div>                       
                                    </div>
                                </div>";
                        }?>
                       <div class="show_more_main" id="show_more_main<?php echo $tutorial_id; ?>">
                            <span id="<?php echo $tutorial_id; ?>" class="show_more" title="Load more posts">SHOW MORE</span>
                            <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
                       </div>
             <?php  } ?>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>e<span>Spares</span></h2>
                        <p>some introduction of shop..</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Maruti</a></li>
                            <li><a href="#">Land Rover</a></li>
                            <li><a href="#">Hyundai</a></li>
                            <li><a href="#">Audi</a></li>
                            <li><a href="#">Bla..</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2016 eSpares. All Rights Reserved. Coded by <a href="http://www.iacsoftware.com" target="_blank">IAC Software Solutions </a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Latest jQuery form server -->
    <script src="js/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>

<!-- Mirrored from demos.wpexpand.com/html/eElectronics/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Jun 2016 08:57:29 GMT -->
</html>