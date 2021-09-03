<?php
require '../db/connect.php';
?>
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Feedbacks</h2>
              <p class="card-text">You are viewing all the feedbacks</p>
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">

                    <table class="table datatables" id="dataTable-1">
                        <thead>
                          <tr>
                        
                            <th>#</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $dta = $pdo->prepare("SELECT * FROM feedback
                            ");
                            $dta->execute();
                            $data = $dta->fetchAll();
                            foreach($data as $dat){
                                echo ' <tr>
                            
                                <td>1</td>
                                <td>'.$dat['feed_fullname'].'</td>
                                <td>'.$dat['feed_email'].'</td>
                                <td>'.$dat['feed_phone'].'</td>
                                <td>'.$dat['feed_message'].'</td>';
                                if($dat['feed_status'] == 'unread'){
                                    echo '<td><span class="badge badge-warning">'.$dat['feed_status'].'</span></td>'; 
                                echo '<td><a class="btn btn-md btn-primary" style="color:black;" href="markasread?feed_id='.$dat['feed_id'].'">Mark as read</a>
                                </td>';
                                }else{
                                    echo '<td><span class="badge badge-success">'.$dat['feed_status'].'</span></td>';
                                
                                echo '<td>
                                </td>';
                                }
                                
                               
                      
                                
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