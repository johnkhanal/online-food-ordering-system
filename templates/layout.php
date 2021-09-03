<?php 
require '../admin/db/connect.php';
$isanuser = false;
if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] == true) {
    $isanuser = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="../images/logo/dark_logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/css/icons.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/red-color.css">
    <link rel="stylesheet" href="../assets/css/yellow-color.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    
    <style>
        .carttop{
            margin-top: -30px;
            margin-left: -10px;
            background: #ea1b25;
        }
    </style>
</head>
<body itemscope>
    <main>
        <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <header class="stick">
            <div class="topbar">
                <div class="container">
                    <div class="select-wrp">
                        <select data-placeholder="Feel Like Eating">
                            <option>FEEL LIKE EATING</option>
                            <option>Burger</option>
                            <option>Pizza</option>
                            <option>Fried Rice</option>
                            <option>Chicken Shots</option>
                        </select>
                    </div>
                    <div class="select-wrp">
                        <select data-placeholder="Choose Location">
                            <option>CHOOSE LOCATION</option>
                            <option>New york</option>
                            <option>Washington</option>
                            <option>Chicago</option>
                            <option>Los Angeles</option>
                        </select>
                    </div>
                   
                    <div class="social1">
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>                
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo"><h1 itemprop="headline"><a href="index" title="Home" itemprop="url"><img src="../images/logo/white_logo.png" alt="Logo missing"  itemprop="image" width="150px" height="100px"></a></h1></div>
                    <nav>
                        <div class="menu-sec">
                            <ul>
                                <li class="menu-item-has-children"><a href="index.php" title="HOMEPAGES" itemprop="url"><span class="red-clr">MAIN</span>Homepage</a>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="RESTAURANTS" itemprop="url"> <span class="red-clr">OUR</span>RESTAURANTS</a>
                                    <ul class="sub-dropdown">
                                    <li><a href="resturants" title="View Resturants" itemprop="url">View Resturants</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="PAGES" itemprop="url"><span class="red-clr">OUR</span>GALLERY</a>
                                    <ul class="sub-dropdown">
     
                                        <li class="menu-item"><a href="gallery" title="FOOD GALLERY" itemprop="url">FOOD GALLERY</a>
                                            
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li><a href="contact" title="CONTACT US" itemprop="url"><span class="red-clr">OUR</span>CONTACT DETAILS</a></li>
                            <li>
                            
                            
                            <a class="btn btn-secondary btn-lg" type="button" data-toggle="modal" data-target="#modalPoll-1" >
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.243 1.071a.5.5 0 0 1 .686.172l3 5a.5.5 0 1 1-.858.514l-3-5a.5.5 0 0 1 .172-.686zm-4.486 0a.5.5 0 0 0-.686.172l-3 5a.5.5 0 1 0 .858.514l3-5a.5.5 0 0 0-.172-.686z"/>
                            <path fill-rule="evenodd" d="M1 7v1h14V7H1zM.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h15a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H.5z"/>
                            <path fill-rule="evenodd" d="M14 9H2v5a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V9zM2 8a1 1 0 0 0-1 1v5a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V9a1 1 0 0 0-1-1H2z"/>
                            <path fill-rule="evenodd" d="M4 10a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                            </svg>    
                            <span class="badge badge-success carttop">0</span><span class="caret"></span></a>
                             <!-- Modal: modalPoll -->
                            
                                <!-- Modal: modalPoll -->
                            
                            
                            
                            </li>
                            <?php 
                                    if($isanuser == true){
                                        echo '<li class="menu-item-has-children"><a href="#" itemprop="url"><img src="../images/users/'.$_SESSION['u_profile'].'" style="border-radius: 50%;" height="30px" width="30px"><span class="caret"></span></a>
                                        <ul class="sub-dropdown">';
                                        echo '<li><a href="./myprofile" itemprop="url">My Account</a></li>';
                                        echo '<li><a href="./viewmyorders" itemprop="url">My Orders</a></li>';
                                        echo '<li><a href="../logout_user.php" itemprop="url">Logout</a></li>';
                                        echo '</ul>
                                        </li>';
                                        }else{
                                    echo '<li class="menu-item-has-children"><a href="#" itemprop="url"><img src="../images/other/noimage.jpg" style="border-radius: 50%;" height="30px" width="30px"><span class="caret"></span></a>
                                    <ul class="sub-dropdown">';
                                   
                                       
                                            echo '<li><a class="log-popup-btn" href="#" title="Login" itemprop="url">LOGIN</a></li>
                                            <li><a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a></li>';
                                        echo '</ul>
                                    </li>';
                            }
                                    ?>
                                    
                                    
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Navigation -->
                </div>
            </div><!-- Logo Menu Section -->
        </header><!-- Header -->
        
        <div class="responsive-header">
            <div class="responsive-topbar">
                <div class="select-wrp">
                    <select data-placeholder="Feel Like Eating">
                        <option>FEEL LIKE EATING</option>
                        <option>Burger</option>
                        <option>Pizza</option>
                        <option>Fried Rice</option>
                        <option>Chicken Shots</option>
                    </select>
                </div>
                <div class="select-wrp">
                    <select data-placeholder="Choose Location">
                        <option>CHOOSE LOCATION</option>
                        <option>New york</option>
                        <option>Washington</option>
                        <option>Chicago</option>
                        <option>Los Angeles</option>
                    </select>
                </div>
            </div>
            <div class="responsive-logomenu">
                <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url"><img src="../images/logo/dark_logo.png" alt="Logo missing"  itemprop="image" width="200px" height="100px"></a></h1></div>
                <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
            </div>
            
            <div class="responsive-menu">
                <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
                <div class="menu-lst">
                <ul>
                                <li class="menu-item-has-children"><a href="index.php" title="HOMEPAGES" itemprop="url"><span class="red-clr">MAIN</span>Homepage</a>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="RESTAURANTS" itemprop="url"> <span class="red-clr">OUR</span>RESTAURANTS</a>
                                    <ul class="sub-dropdown">
                                    <li><a href="resturants" title="View Resturants" itemprop="url">View Resturants</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="PAGES" itemprop="url"><span class="red-clr">OUR</span>GALLERY</a>
                                    <ul class="sub-dropdown">
     
                                        <li class="menu-item-has-children"><a href="#" title="GALLERY" itemprop="url">GALLERY</a>
                                            <ul class="sub-dropdown">
                                                <li><a href="gallery" title="FOOD GALLERY" itemprop="url">FOOD GALLERY</a></li>
                            
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li><a href="contact" title="CONTACT US" itemprop="url"><span class="red-clr">OUR</span>CONTACT DETAILS</a></li>
                            </ul>
                </div>
                <div class="topbar-register">
                    <a class="log-popup-btn" href="#" title="Login" itemprop="url">LOGIN</a> / <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a>
                </div>
                <div class="social1">
                    <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="register-btn">
                    <a class="yellow-bg brd-rd4" href="register-reservation.html" title="Register" itemprop="url">REGISTER RESTAURANT</a>
                </div>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->

        <section>
            <div class="block blackish opac50">
                <div class="fixed-bg" style="background-image: url(../assets/images/parallax2.jpg);"></div>
                <div class="restaurant-searching style2 text-center">
                    <div class="restaurant-searching-inner">
						<span>Delicious <i>Food</i> </span>
                        <h2 itemprop="headline">Order Delivery & Take-Out</h2>
                        <form class="restaurant-search-form2 brd-rd30" method="POST" action="resturants">
                            <input class="brd-rd30" type="text" name="r_name" placeholder="RESTAURANT NAME OR LOCATION">
                            <button class="brd-rd30 red-bg" type="submit" name="search">SEARCH</button>
                        </form>
                    </div>
                </div><!-- Restaurant Searching -->
            </div>
        </section>
        <div>
        <div class="modal fade right" id="modalPoll-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
                                    <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Your cart</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true" class="btn btn-danger btn-md">X</span>
                                                                        </button>
                                    </div>

                                    <!--Body-->
                                    <div class="modal-body">
                                    <table class="table table-hover carttable" id="carttable">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>Product name</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Final Price</th>
                                            <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="cartbody">
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <td colspan ='3' style='color:red;'>Subtotal</td>
                                            <td></td>
                                            <td id="totalcart" class="totalcart"></td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    </div>

                                    <!--Footer-->
                                    <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                    <a href="checkout" class="btn btn-primary">Checkout</a>
                                    </div>
                                    </div>
                                </div>
                                </div>   
        <?php echo $content;?> 
        </div>
        <section>
            <div class="block no-padding red-bg">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="app-sec">
                                <div class="row">
                                    <div class="col-md-4 hidden-sm col-md-offset-1 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-1">
                                        <div class="app-mockup text-right overlape-110 wow fadeInUp" data-wow-delay="0.2s"><img src="../images/logo/chito_chito_mockup.png" alt="app-mockup.png" itemprop="image"></div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-1 col-sm-12 col-sm-offset-0 col-lg-6 col-lg-offset-1">
                                        <div class="app-info">
                                            <h4 itemprop="headline">The Best Food Delivery App</h4>
                                            <p itemprop="description">We are launching soon this wonderful application to our city. The customer will be much facilitiated after the application will be launched.</p>
                                            <div class="app-download-btns">
                                                <a class="" href="#" title="Google Play Store" itemprop="url" target="_blank"><img src="../assets/images/resource/app-download-btn1.png" alt="app-download-btn1.png" itemprop="image"></a>
                                                <a class="" href="#" title="Apple App Store" itemprop="url" target="_blank"><img src="../assets/images/resource/app-download-btn2.png" alt="app-download-btn2.png" itemprop="image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- App Section -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- red section -->
        
        <footer>
            <div class="block top-padd80 bottom-padd80 dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="footer-data">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-lg-6">
                                        <div class="widget about_widget wow fadeIn" data-wow-delay="0.1s">
                                            <div class="logo"><h1 itemprop="headline"><a href="#" title="Home" itemprop="url"><img src="../images/logo/dark_logo.png" width="200px" height="150px" alt="logo.png" itemprop="image"></a></h1></div>
                                            <p itemprop="description">Chito Chito is the best choice for your online purchase of food</p>
                                            <div class="social2">
                                                <a class="brd-rd50" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="brd-rd50" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="brd-rd50" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a class="brd-rd50" href="#" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="col-md-3 col-sm-6 col-lg-6">
                                        <div class="widget get_in_touch wow fadeIn" data-wow-delay="0.4s">
                                            <h4 class="widget-title" itemprop="headline">GET IN TOUCH</h4>
                                            <ul>
                                               <li><i class="fa fa-map-marker"></i> Kathmandu, Nepal</li>
                                               <li><i class="fa fa-phone"></i> (+977) 9800 0000 00</li>
                                               <li><i class="fa fa-envelope"></i> <a href="#" title="" itemprop="url">chitochito@test.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Footer Data -->
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->
     

        <div class="log-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="log-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                    <div class="sign-popup-title text-center">
                        <img src="../images/logo/white_logo.png">
                        <!-- <h4 itemprop="headline">SIGN IN</h4> -->
                      
                    </div>
                   
                    <form class="sign-form" method="POST" action="signinuser" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" name="email" type="email" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" name="password" type="password" required >
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" type="submit" name="signin">SIGN IN</button>
                            </div>
                          
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="sign-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="sign-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                    <div class="sign-popup-title text-center">
                        <!-- <h4 itemprop="headline">SIGN UP</h4> -->
                        <img src="../images/logo/white_logo.png">
                    </div>
                    
                    <form class="sign-form"  method="POST" action="registeruser" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <label>Username</label>
                                <input class="brd-rd3" type="text" name="u_username" placeholder="Username">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <label>Email</label>
                                <input class="brd-rd3" type="email" name="u_email" placeholder="Email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <label>Password</label>
                                <input class="brd-rd3" type="password" name="u_password" placeholder="Password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <label>Address</label>
                                <input class="brd-rd3" type="text" name="u_address" placeholder="Address">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <label>Phone</label>
                                <input class="brd-rd3" type="text" name="u_phone" placeholder="Phone">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <label>Full name</label>
                                <input class="brd-rd3" type="text" name="u_fullname" placeholder="Fullname">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <label>Profile Image</label>
                                <input class="brd-rd3" type="file" name="u_profile">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" type="submit" name="signup">REGISTER NOW</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main><!-- Main Wrapper -->

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
    
</body>	

</html>
<script type="text/javascript">
    // $(".addtocart").on("click", function(){
    //     alert('added');
    // });
        function getdata(){
            var gpname = localStorage.getItem('productname');
            var gprice = localStorage.getItem('price');
            var gcoun = localStorage.getItem('coun');
            var gsubtot = localStorage.getItem('subtotal');
            try{
               var ggpname =  gpname.split(",");
                var ggprice = gprice.split(",");
                var ggcoun = gcoun.split(",");
                
            for(var i=0;i<ggcoun.length;i++){
               
                var nd = "<tr>";
            nd += "<td>"+ggcoun[i]+"</td>";
            nd += '<td class="iname">'+ggpname[i]+'</td>';
            nd += '<td id="ll" class="cprice">'+ggprice[i]+'</td>';
            nd += '<td>';
            nd += '<input class="qty" type="number" value="1">';
            nd += '</td>';
            nd += '<td id="fprice" class="fprice">'+ggprice[i]+'</td>';
            nd += '<td><button class="btn btn-danger remove">X</button></td>';
            
            nd += '</tr>';
      
            $("table .cartbody").append(nd);
            $(".carttop").html(ggcoun.length);
            }
            $(".totalcart").html('Rs.' + gsubtot);
            }catch(Exception){
                
            }
        }
        getdata();
    var coun = 0;
    var total = 0;
    const fitemname = [];
    const finaloprice = [];
    const fqty = [];
    const fsubtotal = [];
    const fcoun = [];
    const frid = [];
    $('.addtocart').each(function(i, el){
		$(el).click(function(){
            var itemname = $(this).parent().parent().find(".itemname").html();
            var price = $(this).parent().parent().find(".food-types a").html();
            var rid = $(this).attr('id');
            var qtyy = 1;
             coun ++;
            $(".carttop").html(coun);
            var nd = "<tr>";
            nd += "<td>"+coun+"</td>";
            nd += '<td class="iname" id="ii">'+itemname+'</td>';
            nd += '<td id="ll" class="cprice">'+price+'</td>';
            nd += '<td class="ffqty">';
            nd += '<input class="qty" type="number" value="'+qtyy+'">';
            nd += '</td>';
            nd += '<td id="fprice" class="fprice">'+price+'</td>';
            nd += '<td><button class="btn btn-danger remove">X</button></td>';
            
            nd += '</tr>';
      
            $("table .cartbody").append(nd);
            var obj = document.createElement("audio");
            obj.src = "../audio/addtocart.wav";
            obj.volume = 0.1;
            obj.autoPlay = false;
            obj.preLoad = true;
            obj.controls = true;


            obj.play();
            var oprice = price.split("Rs.");
            var qty = $(".qty").val();
            var nprice = Number(oprice[1]) * qty;
            $(".cprice").val(price);
            $(".fprice").val(nprice);
            total = total + nprice;
            // alert(total);
           
			var sum2 = 0;
        $(".fprice").each(function(){
            var vv = $(this).html();
            var tprice = vv.split("Rs.");
            sum2 = sum2 + Number(tprice[1]);
        });
        $(".totalcart").html('Rs.' + sum2);
        fitemname.push(itemname);
        finaloprice.push(price);
        fcoun.push(coun);
        fqty.push(qtyy);
        frid.push(rid);
        localStorage.setItem("productname", fitemname);
        localStorage.setItem("price", finaloprice);
        localStorage.setItem("coun", fcoun);
        localStorage.setItem("subtotal", sum2);
        localStorage.setItem("qty", fqty);
        localStorage.setItem("rid", frid);

		});
       
 
	});
    $(document).on('click keyup', '.qty', function(){
        var price = $(this).closest('td').prev('#ll').text();
        var sprice = price.split("Rs.");
        var foprice = Number(sprice[1]);
        var qty = $(this).val();
        var finprice = Number(foprice) * Number(qty);
        $(this).closest('td').next('#fprice').html('Rs. '+finprice);
        var sum2 = 0;
        $(".fprice").each(function(){
            var vv = $(this).html();
            var tprice = vv.split("Rs.");
            sum2 = sum2 + Number(tprice[1]);
        });
        // alert(sum2);
        $(".totalcart").html('Rs.' + sum2);
        // total = total + finprice;
        // $("#totalcart").html(total);
        clearArray(fqty);
        $(".qty").each(function(){
            
            fqty.push(this.value);
            
        });
        
    
localStorage.setItem("qty", fqty);
localStorage.setItem("subtotal", sum2);
    });
    function clearArray(array) {
  while (array.length) {
    array.pop();
  }
}
var fitemname2 = [];
var fpriceset2 = [];
var fqty2 = [];
var frid2 = [];
    $(document).on('click', '.remove', function(){
                  var fitemname = localStorage.getItem('productname');
                  var fpriceset = localStorage.getItem('price');
                  var fqtyset = localStorage.getItem("qty");
                  var fridset = localStorage.getItem("rid");
                    var fitemname1 = fitemname.split(",");
                    var fpriceset1 = fpriceset.split(",");
                    var fqty1 = fqtyset.split(",");
                    var frid1 = fridset.split(",");
                    for(var i=0;i<fitemname1.length;i++){
                        fitemname2.push(fitemname1[i]);
                        fpriceset2.push(fpriceset1[i]);
                        fqty2.push(fqty1[i]);
                        frid2.push(frid1[i]);
                    }
                  var d = $(this).closest('td').prev('#ll').text();
                  var iname = $(this).closest('td').parent().find(".iname").html();
                  var pname = $(this).closest('td').parent().find(".cprice").html();
                  var sqty = $(this).closest('td').parent().find(".bootstrap-touchspin .qty").val();
                       
                  $(this).closest('tr').remove();
                  coun--;
                  $(".carttop").html(fcoun.length);
                  var sum2 = 0;
        $(".fprice").each(function(){
            var vv = $(this).html();
            var tprice = vv.split("Rs.");
            sum2 = sum2 + Number(tprice[1]);
        });
      
        fitemname2.splice( $.inArray(iname,fitemname2) ,1 );
        fpriceset2.splice( $.inArray(pname,fpriceset2) ,1 );
        fqty2.splice( $.inArray(sqty,fqty2) ,1 );
         
        localStorage.setItem("productname", fitemname2);
        localStorage.setItem("price", fpriceset2);
        localStorage.setItem("qty", fqty2);

        $(".totalcart").html('Rs.' + sum2);
        localStorage.setItem("subtotal", sum2);
        localStorage.setItem("coun", fcoun);
        localStorage.setItem("rid", frid2);
                 });
                 
</script>