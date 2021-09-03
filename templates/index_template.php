<?php 
require '../db/connect.php';

?>
<section>
            <div class="block no-padding overlape-45">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="top-restaurants-wrapper">
                                <ul class="restaurants-wrapper style2">
                                    <li class="wow bounceIn" data-wow-delay="0.2s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 1" itemprop="url"><img src="../assets/images/resource/top-restaurant1.png" alt="top-restaurant1.png" itemprop="image"></a></div></li>
                                    <li class="wow bounceIn" data-wow-delay="0.4s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 2" itemprop="url"><img src="../assets/images/resource/top-restaurant2.png" alt="top-restaurant2.png" itemprop="image"></a></div></li>
                                    <li class="wow bounceIn" data-wow-delay="0.6s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 3" itemprop="url"><img src="../assets/images/resource/top-restaurant3.png" alt="top-restaurant3.png" itemprop="image"></a></div></li>
                                    <li class="wow bounceIn" data-wow-delay="0.8s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 4" itemprop="url"><img src="../assets/images/resource/top-restaurant4.png" alt="top-restaurant4.png" itemprop="image"></a></div></li>
                                    <li class="wow bounceIn" data-wow-delay="1s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 5" itemprop="url"><img src="../assets/images/resource/top-restaurant5.png" alt="top-restaurant5.png" itemprop="image"></a></div></li>
                                    <li class="wow bounceIn" data-wow-delay="1.2s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 5" itemprop="url"><img src="../assets/images/resource/top-restaurant6.png" alt="top-restaurant6.png" itemprop="image"></a></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- top returents -->
		
		<section>
            <div class="block remove-bottom">
                <div class="container">
                    <div class="row">
						<div class="welcome-sec">
							<div class="col-md-6 col-sm-6 col-lg-6">
								<div class="welcome-secinfo">
									<h2>Welcome To Chito Chito</h2>
									<span>We Create Delicious Memories</span>
									<p>You can have your best meal here. Lots of offers are provided with more varieties of foods. You'll be the most happy customer.</p>
									<div class="award">
										<img src="../images/logo/award.png" alt="">
										<span><em>Best Luxury</em>hotel <i>award</i></span>
									</div>
									
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6">
								<div class="welcome-gallery">
									<img src="../assets/images/resource/food1.jpg" alt="">
									<img src="../assets/images/resource/food2.jpg" alt="">
									<img src="../assets/images/resource/food3.jpg" alt="">
								</div>
							</div>
						</div>	
                    </div>
                </div>
            </div>
        </section><!-- welcome section -->
        <section></section>

        <section>
            <div class="block remove-bottom blackish low-opacity margin-bottom" style="margin-top: 200px;">
                <div class="fixed-bg" style="background-image: url(../assets/images/parallax3.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center text-white">
                                <div class="title1-inner">
                                    <span> </span>
                                    <h2 itemprop="headline">Popular Localities </h2>
                                </div>
                            </div>
                            <div class="localities-wrapper">
                                <div class="localities-inner brd-rd2 wow fadeIn" data-wow-delay="0.2s">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <ul class="locat-list">
                                              <?php 

                                              $dat = $pdo->prepare("SELECT * FROM locations ORDER BY l_id DESC LIMIT 2");
                                              $dat->execute();
                                              $dataa = $dat->fetchAll(); 
                                              foreach($dataa as $data){
                                                echo '<li>'.$data['l_name'].' </span></li>';
                                              }
                                              ?>
                                                
                                                
                                            </ul>
                                        </div>
                                       
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <ul class="locat-list">
                                            <?php 

                                              $dat = $pdo->prepare("SELECT * FROM locations ORDER BY l_id ASC LIMIT 2");
                                              $dat->execute();
                                              $dataa = $dat->fetchAll(); 
                                              foreach($dataa as $data){
                                                echo '<li>'.$data['l_name'].' </span></li>';
                                              }
                                              ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Localities Wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block gray-bg2 top-padd210">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
							<div class="filters-wrapper">
                            <div class="title1-wrapper text-center">
								<div class="title1-inner">
									<span>Your Favourite Food</span>
									<h2 itemprop="headline">featured food</h2>
								</div>
							</div>
              <?php 

                $dat = $pdo->prepare("SELECT * FROM items i
                INNER JOIN resturants r ON i.i_r_id=r.r_id
                INNER JOIN category c ON i.i_c_id=c.c_id
                GROUP BY c_name DESC LIMIT 7");
                $dat->execute();
                $dataa = $dat->fetchAll(); 
                
                ?>          
							<ul class="filter-buttons center">
                <li class="active"><a class="brd-rd30" data-filter="*" href="#" itemprop="url">All</a></li>
                <?php 
                $dat = $pdo->prepare("SELECT * FROM category ORDER BY c_id DESC LIMIT 3");
                $dat->execute();
                $dataa = $dat->fetchAll(); 
                $i=1;
                $abc = [];
                foreach($dataa as $data){
                  echo '<li><a class="brd-rd30" data-filter=".filter-item'.$i.'" href="#" itemprop="url">'.$data['c_name'].'</a></li>';
                $i++;
               array_push($abc, $data['c_id']);
                }
                ?>

               <!-- <script type="text/javascript">
                 $(".datafilter").on("click", function(){
                  $.get('ajax.php', getData('send'), function (html) {
                      //$('.slider' + value).html(html);
                      $( "body" ).data( "sliderData", html);
                  }, "json");

                  console.log($( "body" ).data());
                 });
               </script>  -->
              </ul><!-- Filter Buttons -->
              <?php 
              $dat2 = $pdo->prepare("SELECT * FROM items i
              INNER JOIN resturants r ON i.i_r_id=r.r_id
              INNER JOIN category c ON i.i_c_id=c.c_id
              WHERE c.c_id='$abc[0]' GROUP BY r.r_address DESC LIMIT 7");
              $dat2->execute();
              $data2 = $dat2->fetchAll();
              $dataacoun2 = $dat2->rowCount();
         

              $dat3 = $pdo->prepare("SELECT * FROM items i
              INNER JOIN resturants r ON i.i_r_id=r.r_id
              INNER JOIN category c ON i.i_c_id=c.c_id
              WHERE c.c_id='$abc[1]' GROUP BY r.r_address DESC LIMIT 7");
              $dat3->execute();
              $data3 = $dat3->fetchAll();
              $dataacoun3 = $dat3->rowCount();
        

              $dat4 = $pdo->prepare("SELECT * FROM items i
              INNER JOIN resturants r ON i.i_r_id=r.r_id
              INNER JOIN category c ON i.i_c_id=c.c_id
              WHERE c.c_id='$abc[2]' GROUP BY r.r_address DESC LIMIT 7");
              $dat4->execute();
              $data4 = $dat4->fetchAll();
              $dataacoun4 = $dat4->rowCount();
                 $j = 1;
    // echo $abc[0];
    // echo $abc[1];
    // echo $abc[2];
							echo '<div class="filters-inner style2">
								<div class="row">
                  <div class="masonry">';
                  if($dataacoun2 > 0){
                    foreach($data2 as $dataa2){
										echo '<div class="col-md-6 col-sm-12 col-lg-6 filter-item filter-item1">
											<div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.1s">
												<div class="featured-restaurant-thumb">
													<a href="food-detail.html" title="" itemprop="url"><img class="brd-rd50" src="../images/items/'.$dataa2['i_image'].'" alt="'.$dataa2['i_image'].'" itemprop="image"></a>
												</div>
												<div class="featured-restaurant-info">
													<span class="red-clr">'.$dataa2['r_address'].', '.$dataa2['r_city'].'</span>
													<h4 itemprop="headline"><a href="resturantsingle?r_id='.$dataa2['r_id'].'" title="" itemprop="url">'.$dataa2['i_name'].'</a></h4>
													<span class="price">'.$dataa2['i_price'].'</span>
													
                          <ul class="post-meta">';
                          
														if($dataa2['i_agreement'] == 'on'){
                              echo '<li><i class="fa fa-check-circle-o"></i> Min order Rs.50</li>';
                            }
													
													echo '</ul>
												
												</div>
											</div>
                    </div>';
                    
                          }
                          }
                          if($dataacoun3 > 0){
                            foreach($data3 as $dataa3){
                            echo '<div class="col-md-6 col-sm-12 col-lg-6 filter-item filter-item2">
                              <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.1s">
                                <div class="featured-restaurant-thumb">
                                  <a href="food-detail.html" title="" itemprop="url"><img class="brd-rd50" src="../images/items/'.$dataa3['i_image'].'" alt="'.$dataa3['i_image'].'" itemprop="image"></a>
                                </div>
                                <div class="featured-restaurant-info">
                                  <span class="red-clr">'.$dataa3['r_address'].', '.$dataa3['r_city'].'</span>
                                  <h4 itemprop="headline"><a href="resturantsingle?r_id='.$dataa2['r_id'].'" title="" itemprop="url">'.$dataa3['i_name'].'</a></h4>
                                  <span class="price">'.$dataa3['i_price'].'</span>
                                  
                                  <ul class="post-meta">';
                                  
                                    if($dataa3['i_agreement'] == 'on'){
                                      echo '<li><i class="fa fa-check-circle-o"></i> Min order Rs.50</li>';
                                    }
                                  
                                  echo '</ul>
                                
                                </div>
                              </div>
                            </div>';
                         
                                  }
                                  }

                                  if($dataacoun4 > 0){
                                    foreach($data4 as $dataa4){
                                    echo '<div class="col-md-6 col-sm-12 col-lg-6 filter-item filter-item3">
                                      <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.1s">
                                        <div class="featured-restaurant-thumb">
                                          <a href="food-detail.html" title="" itemprop="url"><img class="brd-rd50" src="../images/items/'.$dataa4['i_image'].'" alt="'.$dataa4['i_image'].'" itemprop="image"></a>
                                        </div>
                                        <div class="featured-restaurant-info">
                                          <span class="red-clr">'.$dataa4['r_address'].', '.$dataa4['r_city'].'</span>
                                          <h4 itemprop="headline"><a href="resturantsingle?r_id='.$dataa2['r_id'].'" title="" itemprop="url">'.$dataa4['i_name'].'</a></h4>
                                          <span class="price">'.$dataa4['i_price'].'</span>
                                          
                                          <ul class="post-meta">';
                                          
                                            if($dataa4['i_agreement'] == 'on'){
                                              echo '<li><i class="fa fa-check-circle-o"></i> Min order Rs.50</li>';
                                            }
                                          
                                          echo '</ul>
                                        
                                        </div>
                                      </div>
                                    </div>';
                                 
                                          }
                                          }
							
									echo '</div>
								</div>
              </div>';
              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		

		
		<section>
			<div class="block">
                <div class="container">
                    <div class="row">
						<div class="col-md-12 col-sm-12 col-lg-12">
							<div class="title1-wrapper text-center">
								<div class="title1-inner">
									<span>Different types of</span>
									<h2 itemprop="headline">Restaurant Services</h2>
								</div>
							</div>
						</div>	
						<div class="resturent-services remove-ext">
							<div class="col-md-4 col-sm-6">
								<div class="servise-box wow fadeIn" data-wow-delay="0.2s">
									<figure>
										<img src="../assets/images/resource/resto-service1.jpg" alt="">
									</figure>
									<div class="uper-meta">
										<i><img src="../assets/images/icon1.png" alt=""></i>
										<h4><a href="#" title="">High Quality Food</a></h4>
										<span>You can get the higher quality of food from here</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="servise-box wow fadeIn" data-wow-delay="0.3s">
									<figure>
										<img src="../assets/images/resource/resto-service2.jpg" alt="">
									</figure>
									<div class="uper-meta">
										<i><img src="../assets/images/icon2.png" alt=""></i>
										<h4><a href="#" title="">Clean Eating</a></h4>
										<span>Healthy and clean food is always our priority</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="servise-box wow fadeIn" data-wow-delay="0.4s">
									<figure>
										<img src="../assets/images/resource/resto-service3.jpg" alt="">
									</figure>
									<div class="uper-meta">
										<i><img src="../assets/images/icon3.png" alt=""></i>
										<h4><a href="#" title="">Food Delivery</a></h4>
										<span>You can have the food delivered at your own home or any where you want</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="servise-box wow fadeIn" data-wow-delay="0.5s">
									<figure>
										<img src="../assets/images/resource/resto-service4.jpg" alt="">
									</figure>
									<div class="uper-meta">
										<i><img src="../assets/images/icon5.png" alt=""></i>
										<h4><a href="#" title="">Variety of Food</a></h4>
										<span>You can get the different varieties of food from here</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="servise-box wow fadeIn" data-wow-delay="0.6s">
									<figure>
										<img src="../assets/images/resource/resto-service5.jpg" alt="">
									</figure>
									<div class="uper-meta">
										<i><img src="../assets/images/icon5.png" alt=""></i>
										<h4><a href="#" title="">Fast Service</a></h4>
										<span>You can get very fast service of food delivery from our company</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="servise-box wow fadeIn" data-wow-delay="0.7s">
									<figure>
										<img src="../assets/images/resource/resto-service6.jpg" alt="">
									</figure>
									<div class="uper-meta">
										<i><img src="../assets/images/icon6.png" alt=""></i>
										<h4><a href="#" title="">24/7 Service</a></h4>
										<span>You are facilitiated with any time service</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- our services -->
		

       