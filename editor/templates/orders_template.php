<?php
require '../db/connect.php';
$eid = $_SESSION['eid'];
?>
<style>
    .vlhead{
        color: #ec2027;
        font-weight: 900;
        font-size: 18px;
    }
</style>
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Customers Order</h2>
              <p class="card-text">You are viewing all the orders made by customer</p>
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">

                    <table class="table table-md" >
                        <thead>
                          <tr>
                        
                            <th>#</th>
                            <th>Name</th>
                            <th>Order Location</th>
                            <th>Price</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $dta = $pdo->prepare("SELECT * FROM orders o
                            INNER JOIN users u ON u.u_id=o.o_c_id 
                            INNER JOIN resturants r ON o.o_r_id=r.r_id  WHERE r.r_e_id='$eid' GROUP BY o.o_comid
                            ");
                            $dta->execute();
                            $data = $dta->fetchAll();
                            foreach($data as $dat){
                                echo ' <tr>
                            
                                <td>1</td>
                                <td>'.$dat['u_username'].'</td>
                                <td>'.$dat['o_address1'].'</td>
                                <td>'.$dat['o_total_price'].'</td>';
                                
                                echo '<td>';
                                if($dat['o_status'] == 'Booked'){
                                    echo '<a href="confirmbooking?comid='.$dat['o_comid'].'" class="btn btn-sm mb-2 btn-primary">Confirm</a>';
                                
                                }
                                echo '<a href="#" class="btn btn-sm mb-2 btn-secondary" data-toggle="modal" data-target="#myModal' . $dat['o_id'] . '"><span class="fe fe-24 fe-alert-octagon
                                "></span></a>
                               
                              </div>
                            </td>';
                           
                  
                            echo '<div class="modal fade modal-right modal-slide" id="myModal' . $dat['o_id'] . '" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">';
                               
                                echo '<div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="defaultModalLabel">ORDER #'.$dat['o_id'].'</h5><br>
                                            
                                            
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                    <p class="modal-title" id="defaultModalLabel">INVOICE DATE: '.$dat['o_date'].'</p>
                                                    <p class="modal-title" id="defaultModalLabel">STATUS: <span class="badge badge-warning">'.$dat['o_status'].'</span></p>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="vlhead">First Name</label>
                                                        <input type="text" readonly class="form-control-plaintext" value="'.$dat['o_fname'].'" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="vlhead">Last Name</label>
                                                        <input type="text" readonly class="form-control-plaintext" value="'.$dat['o_lname'].'" required>
                                                    </div>
                                                </div>
                                            
                                         
                                                <div class="form-row">  
                                                    <div class="col-md-6 mb-3">
                                                        <label class="vlhead">Username</label>
                                                        <input type="text" readonly class="form-control-plaintext" value="@'.$dat['o_username'].'" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="vlhead">Email</label>
                                                        <input type="text" readonly class="form-control-plaintext" value="'.$dat['u_email'].'" required>
                                                    </div>
                                      
                                                </div>
                                       
                                            
                                                <div class="form-row">   
                                                    <div class="col-md-12 mb-3">
                                                        <label class="vlhead">Phone</label>
                                                        <input type="text" readonly class="form-control-plaintext" value="'.$dat['u_phone'].'" required>
                                                    </div>
                                                </div>
                                           
                                            
                                                <div class="form-row">  
                                                    <div class="col-md-6 mb-3">
                                                        <label class="vlhead">Address1</label>
                                                        <input type="text" readonly class="form-control-plaintext" value="'.$dat['o_address1'].'" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="vlhead">Address2</label>
                                                        <input type="text" readonly class="form-control-plaintext" value="'.$dat['o_address2'].'" required>
                                                    </div>
                                      
                                                </div>
                                            
                                           
                                                <div class="form-row">  
                                                    <div class="col-md-4 mb-3">
                                                        <label class="vlhead">City</label>
                                                        <input type="text" readonly class="form-control-plaintext" value="'.$dat['o_city'].'" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="vlhead">Province</label>
                                                        <input type="text" readonly class="form-control-plaintext" value="'.$dat['o_province'].'" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="vlhead">Zip code</label>
                                                        <input type="text" readonly class="form-control-plaintext" value="'.$dat['o_zipcode'].'" required>
                                                    </div>  
                                                </div>
                                          
                                                <hr/>
                                            
                                                <div class="form-row">  
                                                    <div class="col-md-4 mb-3">
                                                        <label class="vlhead">Item</label>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="vlhead">Qty</label>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="vlhead">Price</label>
                                                    </div>
                                                </div>';
                                            
                                                echo '<hr/>';
                                         
                                                $comid = $dat['o_comid'];
                                                $rr = $pdo->query("SELECT * FROM orders WHERE  o_comid='$comid'");
                                                foreach($rr as $rrr){
                                                echo '<div class="form-row"> 
                                                    <div class="col-md-4 mb-3">
                                                        <input type="text" readonly class="form-control-plaintext text-center" value="'.$rrr['o_i_name'].'" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <input type="text" readonly class="form-control-plaintext text-center" value="'.$rrr['o_qty'].'" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <input type="text" readonly class="form-control-plaintext text-center" value="'.$rrr['o_price'].'" required>
                                                    </div>';
                                                echo '</div>';
                                    
                                                }
                                            
                                                echo '<hr/>
                                                <div class="form-row">  
                                                    <div class="col-md-9 mb-3">
                                                        <label class="vlhead">Subtotal</label>
                                                    </div>
                                                    
                                                    <div class="col-md-3 mb-3">
                                                        <label class="total">Rs. '.$dat['o_total_price'].'</label>
                                                    </div>
                                                </div>';
                                            
                                        echo '</div>';
                                        echo '<div class="modal-footer">
                                            <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                                        </div>';
                                    echo '</div>';
                                   
                                    
                                   
                                echo '</div>';
                            echo '</div>';
                            
                               
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