<?php 
require '../db/connect.php';
?>
<div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Food Gallery</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row mrg15">
                        <div class="col-md-12">
                            <div class="sec-box">
                            <div class="masonry">
                                <?php 

                                $dat = $pdo->query("SELECT i_name, i_image FROM items");
                                foreach($dat as $data){
                                    echo '<div class="col-md-4 col-sm-6 col-lg-4 filter-item">
                                    <div class="gallery-bx sudo-bg-red wow zoomIn" data-wow-delay="0.2s">
                                        <img src="../images/items/'.$data['i_image'].'" alt="food item" itemprop="image">
                                        <div class="gallery-info-btns">
                                            <a class="yellow-bg brd-rd50" href="../images/items/'.$data['i_image'].'" data-fancybox="gallery" title="Click to See Image" itemprop="url"><i class="fa fa-search"></i></a>
                                            <a class="yellow-bg brd-rd50" href="#" title="View Image" itemprop="url"><i class="fa fa-chain"></i></a>
                                        </div>
                                        <h3 itemprop="headline"><a href="#" title="View Image" itemprop="url">'.$data['i_name'].'</a></h3>
                                    </div>
                                </div>';
                                }
                                ?>
                                
                                
                            </div>
                            <div class="pagination-wrapper text-center">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREVIOUS</a></li>
                                    <li class="page-item active"><a class="page-link brd-rd2" href="#" itemprop="url">1</a></li>
                                    
                                    <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a></li>
                                </ul>
                            </div><!-- Pagination Wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>