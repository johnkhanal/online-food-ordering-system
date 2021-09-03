<?php
require '../db/connect.php';
?>
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Resturants</h2>
              <p class="card-text">You are viewing all the resturants lists</p>
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
                            <th>Email</th>
            
                            <th>Address</th>
                            <th>City</th>
                            <th>Availability</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $dta = $pdo->prepare("SELECT * FROM resturants");
                            $dta->execute();
                            $data = $dta->fetchAll();
                            foreach($data as $dat){
                                echo ' <tr>
                            
                                <td>1</td>
                                <td>'.$dat['r_name'].'</td>
                                <td>'.$dat['r_mobile'].'</td>
                                <td>'.$dat['r_email'].'</td>
                             
                                <td>'.$dat['r_address'].'</td>
                                <td>'.$dat['r_city'].'</td>';
                               if($dat['r_availability'] == 'on'){
                                   $ava = '<td><span class="badge badge-success">Active</span></td>';
                               }else{
                                $ava = '<td><span class="badge badge-danger">Inactive</span></td>';
                               }
                               echo $ava;
                               echo '<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span class="text-muted sr-only">Action</span>
                             </button>
                             <div class="dropdown-menu dropdown-menu-right">
                               <button type="button" class="dropdown-item btn mb-2 btn-primary" data-toggle="modal" data-target="#myModal' . $dat['r_id'] . '"><span class="fe fe-24 fe-edit-3"></span></button>
                               <a class="dropdown-item" href="deleteresturant?did='.$dat['r_id'].'"><span class="fe fe-24 fe-trash-2"></span></a>
                             </div>
                           </td>';
                          
                 
                           echo '<div class="modal fade modal-right modal-slide" id="myModal' . $dat['r_id'] . '" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">';
                              
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
                                       
                                     <div class="col-md-12 mb-3">
                                       <label for="validationCustom3">Owner Name</label>
                                       <input type="text" class="form-control" id="validationCustom3"  name="r_o_name" value="'.$dat['r_o_name'].'" required>
                                       <div class="valid-feedback"> Looks good! </div>
                                     </div>
                                     
                                   </div> <!-- /.form-row -->
                                   
                                   <div class="form-row">
                                     <div class="col-md-6 mb-3">
                                       <label for="validationCustom3">Resturant name</label>
                                       <input type="text" class="form-control" name="r_name" value="'.$dat['r_name'].'" id="validationCustom3" required>
                                       <div class="valid-feedback"> Looks good! </div>
                                     </div>
                                     <div class="col-md-6 mb-3">
                                       <label for="custom-phone">Mobile</label>
                                       <input class="form-control input-phoneus" name="r_mobile" value="'.$dat['r_mobile'].'" id="custom-phone" maxlength="14" required>
                                       <div class="invalid-feedback"> Please enter a correct phone </div>
                                     </div>
                                   </div> <!-- /.form-row -->
                                   <div class="form-row">
                                     <div class="col-md-12 mb-3">
                                       <label for="exampleInputEmail2">Email address</label>
                                       <input type="email" class="form-control" value="'.$dat['r_email'].'" name="r_email" id="exampleInputEmail2" aria-describedby="emailHelp1" required>
                                       <div class="invalid-feedback"> Please use a valid email </div>
                                       <small id="emailHelp1" class="form-text text-muted">We will never share your email with anyone else.</small>
                                     </div>
                                   </div> <!-- /.form-row -->
                                   <div class="form-row">
                                   <div class="col-md-12 mb-3">
                                       <label for="custom-phone">Phone</label>
                                       <input class="form-control input-phoneus" value="'.$dat['r_phone'].'" name="r_phone" id="custom-phone" maxlength="14" required>
                                       <div class="invalid-feedback"> Please enter a correct phone </div>
                                     </div>
                                    </div>
                                   <div class="form-group mb-3">
                                     <label for="address-wpalaceholder">Address</label>
                                     <input type="text" id="address-wpalaceholder" value="'.$dat['r_address'].'" name="r_address" class="form-control" placeholder="Enter your address">
                                     <div class="valid-feedback"> Looks good! </div>
                                     <div class="invalid-feedback"> Badd address </div>
                                   </div>
                                   <div class="form-row">
                                     <div class="col-md-5 mb-3">
                                       <label for="validationCustom33">City</label>
                                       <input type="text" class="form-control" value="'.$dat['r_city'].'" name="r_city" id="validationCustom33" required>
                                       <div class="invalid-feedback"> Please provide a valid city. </div>
                                     </div>
                                     <div class="col-md-3 mb-3">
                                       <label for="validationSelect2">State</label>
                                       <select class="form-control select2" name="r_state" id="validationSelect2" required>
                                         <option value="">Select state</option>
                                         <optgroup label="Province">';
                                          for($i=1;$i<8;$i++){
                                            if($i == $dat['r_state']){
                                              echo '<option selected value="'.$i.'">'.$i.'</option>';
                                            }else{
                                              echo '<option value="'.$i.'">'.$i.'</option>';
                                            }
                                            
                                          }
                                           
                                           
                                           
                                         echo '</optgroup>
                                        
                                       </select>
                                       <div class="invalid-feedback"> Please select a valid state. </div>
                                     </div>
                                     <div class="col-md-4 mb-3">
                                       <label for="custom-zip">Zip code</label>
                                       <input class="form-control input-zip" value="'.$dat['r_zipcode'].'" name="r_zipcode" id="custom-zip" autocomplete="off" maxlength="9" required>
                                       <div class="invalid-feedback"> Please provide a valid zip. </div>
                                     </div>
                                   </div>
                                   <div class="form-row mb-3">
                                     <div class="col-md-8 mb-3">
                                       <label for="date-input1">Registration Date</label>
                                       <div class="input-group">
                                         <input type="text" class="form-control drgpicker" value="'.$dat['r_registration_date'].'" name="r_registration_date" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                                         <div class="input-group-append">
                                           <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16 mx-2"></span></div>
                                         </div>
                                       </div>
                                     </div>
                                     
                                     <div class="col-md-4 mx-auto mb-3">
                                       <p class="mb-3">Available</p>
                                       <div class="custom-control custom-switch">';
                                        if($dat['r_availability'] == 'on'){
                                          echo '<input type="checkbox" checked class="custom-control-input" name="r_availability" id="customSwitch1" required>';
                                        
                                        }else{
                                          echo '<input type="checkbox" class="custom-control-input" name="r_availability" id="customSwitch1" required>';
                                        }
                                          echo '<label class="custom-control-label" for="customSwitch1">Yes</label>
                                       </div>
                                     </div>
                                   </div>
                                  
                                   <div class="form-group mb-3">
                                     <label for="validationTextarea1">Description</label>
                                     <textarea class="form-control" id="validationTextarea1" name="r_description" placeholder="Take a note here" required="" rows="3">'.$dat['r_description'].'</textarea>
                                     <div class="invalid-feedback"> Please enter a message in the textarea. </div>
                                   </div>
                                   <div class="form-group mb-3">
                                     <label for="validationTextarea1">Logo</label>
                                     <input type="file" id="logo" name="r_logo" class="form-control">
                                     <input type="hidden" name="r_logo_name" value="'.$dat['r_logo'].'">
                                     <input type="hidden" name="r_id" value="'.$dat['r_id'].'">
                                     <img src = "../../images/resturants/'.$dat['r_logo'].'" height="100px" width="100px" alt="No image found">
                                   </div>
                                   <div class="form-group mb-3">
                                   
                                       <label for="validationSelect2">Moderator</label>
                                       <select class="form-control select2" id="validationSelect2" name="r_e_id" required>
                                         <option value="">Select username</option>';
                                       
                                           $editorr = $pdo->prepare("SELECT * FROM editor");
                                           $editorr->execute(); 
                                         
                                         
                                         echo '<optgroup label="Users">';
                                         foreach($editorr as $editor){
                                           if($editor['e_id'] == $dat['r_e_id']){
                                            echo '<option value="'.$editor['e_id'].'" selected>'.$editor['e_username'].'</option>';
                                           }else{
                                            echo '<option value="'.$editor['e_id'].'">'.$editor['e_username'].'</option>';
                                           }
                                          }
                                           
                                         echo '</optgroup>
                                         
                                       </select>
                                       <div class="invalid-feedback"> Please select atleast one username. </div>
                                   
                                    </div>
                                   <div class="custom-control custom-checkbox mb-3">';
                                    if($dat['r_agreement'] == 'on'){
                                      echo '<input type="checkbox" class="custom-control-input" name="r_agreement" id="customControlValidation16" checked required="">';
                                     
                                    }else{
                                      echo '<input type="checkbox" class="custom-control-input" name="r_agreement" id="customControlValidation16" required="">';
                                     
                                    }
                                   
                                     echo '<label class="custom-control-label" for="customControlValidation16"> Agree to terms and conditions</label>
                                     <div class="invalid-feedback"> You must agree before submitting. </div>
                                   </div>
                                    
                                   
                                 
                                   
                                   </div>';
                                   ?>
                                   
                                   <div class="modal-footer">
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