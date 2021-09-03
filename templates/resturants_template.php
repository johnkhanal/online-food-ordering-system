<?php 
require '../db/connect.php';

?>
<div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Restaurants</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block gray-bg bottom-padd210 top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                              
                                <div class="sec-wrapper top-padd80">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 col-lg-3">
                                            <div class="sidebar left">
                                                <div class="widget style2 Search_filters">
                                                    <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Category Filters</h4>
                                                    <div class="widget-data">
                                                        <ul>
                                                        <?php 
                                                        $dat = $pdo->prepare("SELECT * FROM category");
                                                        $dat->execute();
                                                        $dataa = $dat->fetchAll(); 
                                                        foreach($dataa as $data){
                                                            echo '<li><a href="resturants?catid='.$data['c_id'].'" title="" itemprop="url">'.$data['c_name'].'</a></li>';
                                                        }
                                                        ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                               
                                            </div><!--Sidebar -->
                                        </div>
                                        <div class="col-md-9 col-sm-12 col-lg-9">
                                            
                                            <div class="remove-ext">
                                                <div class="row">
                                                <?php 
                                                echo $msg;
                                                
                                                 foreach($dataa4 as $data4)
                                                 {
                                                    echo '<div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.1s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="resturantsingle?i_id='.$data4['i_id'].'" title="" itemprop="url"><img src="../images/resturants/'.$data4['r_logo'].'" alt="most-popular-img1.png" itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr"><i class="fa fa-phone" style="color:green"></i> '.$data4['r_phone'].'</span>
                                                            <h4 itemprop="headline"><a href="resturantsingle?r_id='.$data4['r_id'].'" title="" itemprop="url">'.$data4['r_name'].'</a></h4>
                                                            <span class="food-types"><a href="#" title="" itemprop="url">'.$data4['r_description'].'</a></span>
                                                            <ul class="post-meta">
                                                                
                                                                <li><i class="fa fa-map-marker" style="color:red"></i>'.$data4['r_address'].', '.$data4['r_city'].'</li>
                                                                <li><i class="fa fa-check-circle-o" style="color:green"></i> Available</li>
                                                                <li><i class="flaticon-money"></i> Accepts cash on delivery</li>
                                                            </ul>
                                                           
                                                            <a class="brd-rd30" href="resturantsingle?r_id='.$data4['r_id'].'" title="View Menu"><i class="fa fa-angle-double-right"></i> View Menu</a>
                                                        </div>
                                                    </div>
                                                </div>';

                                                 }
                                                ?>
                                            
                                               
                                                  
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