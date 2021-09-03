<?php 
require '../db/connect.php';
$r_id = $_GET['r_id'];
?>
<div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Restaurant</a></li>
                    <li class="breadcrumb-item active">Restaurant Details</li>
                </ol>
            </div>
        </div>

        <section >
            <div class="block gray-bg top-padd30">
                <div class="container" style="margin-bottom: 80px;">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="sec-wrapper">
                                    <div class="row">
                                    <?php 
                                                        $dat4 = $pdo->prepare("SELECT * FROM items i
                                                        INNER JOIN resturants r ON i.i_r_id=r.r_id
                                                        INNER JOIN category c ON i.i_c_id=c.c_id
                                                        WHERE i.i_r_id='$r_id' GROUP BY r.r_address DESC LIMIT 7");
                                                         $dat4->execute();
                                                         $dataa4 = $dat4->fetch();
                                                      
                                                         $dataacoun4 = $dat4->rowCount();
                                                         
                                                    ?>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="restaurant-detail-wrapper">
                                                <div class="restaurant-detail-info">
                                                    <div class="restaurant-detail-thumb">
                                                        <ul class="restaurant-detail-img-carousel">
                                                            <li><img height="500px"   class="brd-rd3" src="../images/resturants/<?php echo $dataa4['r_logo'];  ?>" alt="restaurant-detail-big-img1-1.jpg" itemprop="image"></li>
                                                            
                                                        </ul>
                                                        <ul class="restaurant-detail-thumb-carousel">
                                                        <li><img class="brd-rd3" src="../images/resturants/<?php echo $dataa4['r_logo'];  ?>" alt="restaurant-detail-big-img1-1.jpg" itemprop="image"></li>
                                                        </ul>
                                                    </div>
                                                    
                                                    <div class="restaurant-detail-title">
                                                        <h1 itemprop="headline"><?php echo $dataa4['r_name']; ?></h1>
                                                        <div class="info-meta">
                                                            <span><?php echo $dataa4['r_address']; ?>, </span>
                                                            <span><a href="#" title="" itemprop="url"><?php echo $dataa4['r_city']; ?></a></span>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="restaurant-detail-tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a href="#tab1-1" data-toggle="tab"><i class="fa fa-cutlery"></i> Menu</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade in active" id="tab1-1">
                                                                
                                                                
                                                                <?php 
                                                                
                                                                $dd = $pdo->prepare("SELECT * FROM category");
                                                                $dd->execute();
                                                                foreach($dd as $ddd){
                                                                    
                                                                    $cid = $ddd['c_id'];
                                                                    $dat4 = $pdo->prepare("SELECT * FROM items i
                                                                    INNER JOIN resturants r ON i.i_r_id=r.r_id
                                                                    INNER JOIN category c ON i.i_c_id=c.c_id
                                                                    WHERE c.c_id='$cid' && r.r_id='$r_id' ORDER BY r.r_address DESC LIMIT 7");
                                                                    $dat4->execute();
                                                                    $dataa4 = $dat4->fetchAll();
                                                                    $dataacoun4 = $dat4->rowCount();
                                                                    if($dataacoun4>0){
                                                                        echo '<div class="dishes-list-wrapper">
                                                                <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">'.$ddd['c_name'].'</span></h4>
                                                                <ul class="dishes-list">';
                                                                        foreach($dataa4 as $data4){
                                                                            echo '<li class="wow fadeInUp" data-wow-delay="0.1s">
                                                                            <div class="featured-restaurant-box">
                                                                                <div class="featured-restaurant-thumb">
                                                                                    <a href="../images/items/'.$data4['i_image'].'" title="" itemprop="url"><img src="../images/items/'.$data4['i_image'].'" alt="dish-img1-1.jpg" itemprop="image"></a>
                                                                                </div>
                                                                                <div class="featured-restaurant-info">
                                                                            
                                                                                <h3 itemprop="headline"><a href="resturantsingle?r_id='.$data4['r_id'].'" title="" itemprop="url" class="itemname">'.$data4['i_name'].'</a></h3><br>
                                                                                <h5><span class="food-types" style="font-size: 20px;">Price: <a href="#" title="" itemprop="url" style="font-size: 20px;">Rs.'.$data4['i_price'].'</a></span></h5><br>
                                                                                <ul class="post-meta">
                                                                                <li>'.$data4['i_description'].'</li><br>
                                                                                    <li><i class="fa fa-map-marker" style="color:red"></i>'.$data4['r_address'].', '.$data4['r_city'].'</li><br>
                                                                                    <li><i class="fa fa-check-circle-o" style="color:green"></i> Available</li><br>
                                                                                    <li><i class="flaticon-money"></i> Accepts cash on delivery</li><br>
                                                                                </ul>
                                                                               
                                                                                </div>
                                                                                <div class="ord-btn">
                                                                                    <a class="brd-rd2 addtocart" href="#" id="'.$data4['r_id'].'" title="Order Now" itemprop="url">Order Now</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>';
                                                                        }
                                                                                                                                        
                                                                        
                                                                    echo '</ul>
                                                                    </div>';
                                                                }
                                                                }

                                                                ?>
                                                                    
                                                                
                                                                
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-2">
                                                                <div class="restaurant-gallery">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Nik B</span>aker's Gallery</h4>
                                                                    <div class="remove-ext">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a href="../assets/images/resource/restaurant-gallery-img1.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="../assets/images/resource/restaurant-gallery-img1.jpg" alt="restaurant-gallery-img1.jpg" itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a href="../assets/images/resource/restaurant-gallery-img2.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="../assets/images/resource/restaurant-gallery-img2.jpg" alt="restaurant-gallery-img2.jpg" itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <div class="restaurant-gallery-img"><a href="../assets/images/resource/restaurant-gallery-img3.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="../assets/images/resource/restaurant-gallery-img3.jpg" alt="restaurant-gallery-img3.jpg" itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a href="../assets/images/resource/restaurant-gallery-img4.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="../assets/images/resource/restaurant-gallery-img4.jpg" alt="restaurant-gallery-img4.jpg" itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a href="../assets/images/resource/restaurant-gallery-img5.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="../assets/images/resource/restaurant-gallery-img5.jpg" alt="restaurant-gallery-img5.jpg" itemprop="image"></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-3">
                                                                <div class="customer-review-wrapper">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Custo</span>mer Reviews</h4>
                                                                    <ul class="comments-thread customer-reviews">
                                                                        <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50" src="../assets/images/resource/review-img1.jpg" alt="review-img1.jpg" itemprop="image">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Mathur</a></h4>
                                                                                    <p itemprop="description">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutat omnes homero mea, pro delenit accusam eu</p>
                                                                                    <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50" src="../assets/images/resource/review-img2.jpg" alt="review-img2.jpg" itemprop="image">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Mathur</a></h4>
                                                                                    <p itemprop="description">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutat omnes homero mea, pro delenit accusam eu</p>
                                                                                    <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50" src="../assets/images/resource/review-img3.jpg" alt="review-img3.jpg" itemprop="image">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Mathur</a></h4>
                                                                                    <p itemprop="description">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutat omnes homero mea, pro delenit accusam eu</p>
                                                                                    <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="your-review">
                                                                        <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Write</span> Review Here</h4>
                                                                        <form class="review-form">
                                                                            <textarea class="brd-rd5">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutatomnes homero mea, pro delenit accusam eu</textarea>
                                                                            <button class="brd-rd2 red-bg" type="submit">POST REVIEW</button>
                                                                            <div class="rate-box">
                                                                                <span>RATE US</span>
                                                                                <div class="rating-box">
                                                                                    <span class="brd-rd2 clr1 on"></span>
                                                                                    <span class="brd-rd2 clr2 on"></span>
                                                                                    <span class="brd-rd2 clr3 on"></span>
                                                                                    <span class="brd-rd2 clr4 on"></span>
                                                                                    <span class="brd-rd2 clr5 on"></span>
                                                                                    <span class="brd-rd2 clr6 on"></span>
                                                                                    <span class="brd-rd2 clr7 off"></span>
                                                                                    <span class="brd-rd2 clr8 off"></span>
                                                                                    <i>4.0</i>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-4">
                                                                <div class="book-table">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Book</span> This Restaurant Table</h4>
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-user"></i> <input type="text" placeholder="NAME"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-phone"></i> <input type="text" placeholder="PHONE"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="select-wrp2">
                                                                                    <select>
                                                                                        <option>Questions</option>
                                                                                        <option>Questions No 1</option>
                                                                                        <option>Questions No 2</option>
                                                                                        <option>Questions No 3</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-envelope"></i> <input type="email" placeholder="EMAIL"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-calendar"></i> <input class="datepicker" type="text" placeholder="SELECT DATE"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-clock-o"></i> <input class="timepicker" type="text" placeholder="SELECT Time"></div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <div class="textarea-field brd-rd2"><i class="fa fa-pencil"></i> <textarea placeholder="Your Instruction"></textarea></div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <button class="brd-rd2 red-bg" type="submit">POST PREVIEW</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-5">
                                                                <div class="restaurant-info-wrapper">
                                                                    <h3 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Book</span> This Restaurant Table</h3>
                                                                    <div class="loc-map" id="loc-map"></div>
                                                                    <ul class="restaurant-info-list">
                                                                        <li>
                                                                            <i class="fa fa-map-marker red-clr"></i>
                                                                            <strong>Address :</strong>
                                                                            <span>2nd Street, East-West Mansion Flat A2 231 Newyork NY 10003</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-phone red-clr"></i>
                                                                            <strong>Call us & Hire us</strong>
                                                                            <span>+32 (0) 598 65 8968</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-envelope-o red-clr"></i>
                                                                            <strong>Have any questions?</strong>
                                                                            <span>Support@webinane.com</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-fax red-clr"></i>
                                                                            <strong>Fax</strong>
                                                                            <span>+652 235 89658965</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  