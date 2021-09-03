<?php
require '../db/connect.php';
?>
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Featured Resturants</h2>
              <p class="card-text">You are viewing all the featured resturants lists</p>
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">

                    <table class="table datatables" id="dataTable-1">
                        <thead>
                          <tr>
                        
                            <th>#</th>
                            <th>Name</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $dta = $pdo->prepare("SELECT * FROM featuredresturants fr
                            INNER JOIN resturants r ON fr.fr_r_id=r.r_id
                            ");
                            $dta->execute();
                            $data = $dta->fetchAll();
                            foreach($data as $dat){
                                echo ' <tr>
                            
                                <td>1</td>
                                <td>'.$dat['r_name'].'</td>';
                                
                                echo '<td>
                                    <a class="btn btn-success btn-sm" href="deletefeaturedresturant?did='.$dat['fr_id'].'"><span class="fe fe-24 fe-trash-2"></span></a>
                                </td>';
                               
                              echo '</tr>';
                            }
                            ?>
                         
                          
                        </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>