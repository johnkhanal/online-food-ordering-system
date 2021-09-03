<?php
require '../db/connect.php';
$eid = $_SESSION['eid'];
?>
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Items</h2>
              <p class="card-text">You are viewing all the items lists</p>
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
                            <th>Mobile</th>
                            
            
                            <th>Address</th>
                            <th>City</th>
                            <th>Price</th>
                            <th>Availability</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $dta = $pdo->prepare("SELECT * FROM items
                            INNER JOIN resturants ON items.i_r_id=resturants.r_id WHERE resturants.r_e_id='$eid'
                            ");
                            $dta->execute();
                            $data = $dta->fetchAll();
                            foreach($data as $dat){
                                echo ' <tr>
                            
                                <td>1</td>
                                <td>'.$dat['i_name'].'</td>
                                <td>'.$dat['r_mobile'].'</td>
                                
                             
                                <td>'.$dat['r_address'].'</td>
                                <td>'.$dat['r_city'].'</td>';
                                echo '<td>'.$dat['i_price'].'</td>';
                               if($dat['i_availability'] == 'on'){
                                   $ava = '<td><span class="badge badge-success">Active</span></td>';
                               }else{
                                $ava = '<td><span class="badge badge-danger">Inactive</span></td>';
                               }
                               echo $ava;
                                echo '<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <button type="button" class="dropdown-item btn mb-2 btn-primary" data-toggle="modal" data-target="#myModal' . $dat['i_id'] . '"><span class="fe fe-24 fe-edit-3"></span></button>
                                    <a class="dropdown-item" href="deleteitem?did='.$dat['i_id'].'"><span class="fe fe-24 fe-trash-2"></span></a>
                                  </div>
                                </td>';
                               
                      
                                echo '<div class="modal fade modal-right modal-slide" id="myModal' . $dat['i_id'] . '" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">';
                                   
                                echo '<div class="modal-dialog modal-sm" role="document">
                                <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="defaultModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        
                                        <div class="form-row">
                                            
                                          <div class="col-md-6 mb-3">
                                            <label for="validationCustom3">Item Name</label>
                                            <input type="text" class="form-control" id="validationCustom3" name="i_name" value="'.$dat['i_name'].'" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                            <label for="validationCustom4">Nickname</label>
                                            <input type="text" class="form-control" id="validationCustom4" name="i_nickname" value="'.$dat['i_nickname'].'" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                          </div>
                                        </div> <!-- /.form-row -->
                               
                                        <div class="form-row">
                                          
                                          <div class="col-md-8 mb-3">
                                          <label for="validationSelect2">Category</label>
                                        
                                            <select class="form-control select2" id="validationSelect2" name="i_c_id" required>
                                              <option value="">Select category</option>';
                                              ?>
                                              <?php 
                                                 $cat = $pdo->prepare("SELECT * FROM category");   
                                                $cat->execute();
                                                $cate = $cat->fetchAll();
                                                
                                              echo '<optgroup label="Category">';
                                                  foreach($cate as $catt){
                                                      if($catt['c_id'] == $dat['i_c_id']){
                                                        echo '<option value="'.$catt['c_id'].'" selected>'.$catt['c_name'].'</option>';
                                                      }else{
                                                        echo '<option value="'.$catt['c_id'].'">'.$catt['c_name'].'</option>';
                                                      }
                                                    
                                                  }
                                                
                                                
                                              echo '</optgroup>
                                            
                                            </select>
                                            <div class="invalid-feedback"> Please select a valid category. </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="custom-zip">Price</label>
                                            <input class="form-control input-zip"  value="'.$dat['i_price'].'" name="i_price" id="custom-zip" autocomplete="off" maxlength="9" required>
                                            <div class="invalid-feedback"> Please provide a price. </div>
                                          </div>
                                        </div>
                                        <div class="form-row mb-3">
                                          <div class="col-md-8 mb-3">
                                            <label for="date-input1">Registration Date</label>
                                            <div class="input-group">
                                              <input type="text" class="form-control drgpicker"  value="'.$dat['i_registration_date'].'" name="i_registration_date" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16 mx-2"></span></div>
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-4 mx-auto mb-3">
                                            <p class="mb-3">Available</p>
                                            <div class="custom-control custom-switch">';
                                            if($dat['i_agreement'] == 'on'){
                                              echo '<input type="checkbox" class="custom-control-input" name="i_availability" id="customSwitch1" checked>';
                                            }else{
                                                echo '<input type="checkbox" class="custom-control-input" name="i_availability" id="customSwitch1">';
                                            }
                                              
                                              echo '<label class="custom-control-label" for="customSwitch1">Yes</label>
                                            </div>
                                          </div>
                                        </div>
                                       
                                        <div class="form-group mb-3">
                                          <label for="validationTextarea1">Description</label>
                                          <textarea class="form-control" id="validationTextarea1" name="i_description" placeholder="Give a description to the item" required="" rows="3">'. nl2br($dat['i_description']).'</textarea>
                                          <div class="invalid-feedback"> Please enter a description in the textarea. </div>
                                        </div>
                                        <div class="form-group mb-3">
                                          <label for="validationTextarea1">Image</label>
                                          <input type="file" id="logo" name="i_image" class="form-control">
                                          <input type="hidden" name="i_image_name" value="'.$dat['i_image'].'" class="form-control">
                                          <img src = "../../images/items/'.$dat['i_image'].'" height="100px" width="100px" style="border-radius: 50%;" alt="No image found">
                                          </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationSelect2">Resturants</label>
                                            <select class="form-control select2" id="validationSelect2" name="i_r_id" required>
                                              <option value="">Select Resturant</option>';
                                              ?>
                                              <?php 
                                                $editorr = $pdo->prepare("SELECT * FROM resturants");
                                                $editorr->execute(); 
                                                // $editor = $editorr->fetch();
                                                
                                              echo '<optgroup label="Users">';
                                              foreach($editorr as $editor){
                                                  if($editor['r_id'] == $dat['i_r_id']){
                                                    echo '<option value="'.$editor['r_id'].'" selected>'.$editor['r_name'].'</option>';
                                                  }else{
                                                    echo '<option value="'.$editor['r_id'].'">'.$editor['r_name'].'</option>';
                                                  }
                                                
                                              }
                                                
                                              echo '</optgroup>';
                                              ?>
                                            </select>
                                            <div class="invalid-feedback"> Please select atleast one resturant. </div>
                                          </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                        <?php 
                                        if($dat['i_agreement'] == 'on'){
                                            echo '<input type="checkbox" checked class="custom-control-input" name="i_agreement" id="customControlValidation16" required="">';
                                        }else{
                                            echo '<input type="checkbox" class="custom-control-input" name="i_agreement" id="customControlValidation16" required="">';
                                        }
                                        ?>
                                          <label class="custom-control-label" for="customControlValidation16"> I Agree to terms and conditions</label>
                                          <div class="invalid-feedback"> You must agree before submitting. </div>
                                        </div>
                                      
                                        
                                        </div>
                                        <div class="modal-footer">
                                        <input type="hidden" name="i_id" value="<?php echo $dat['i_id']; ?>">
                                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn mb-2 btn-primary" name="save">Update</button>
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            <?php 
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