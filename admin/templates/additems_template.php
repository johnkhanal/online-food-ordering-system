<?php 
require '../db/connect.php';


?>
<style>
        .center {
        margin: auto;
        width: 100%;
        padding: 40px;
        }
    </style>
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-12">
<h2 class="page-title">Add items</h2>
<p class="text-muted">You can add items from here</p>
<div class="row">
<div class="col-md-6">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Form Details</strong>
                    </div>
                    <div class="card-body">
                      <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                        <div class="form-row">
                            
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom3">Item Name</label>
                            <input type="text" class="form-control" id="validationCustom3" name="i_name" placeholder="Enter item name" required>
                            <div class="valid-feedback"> Looks good! </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom4">Nickname</label>
                            <input type="text" class="form-control" id="validationCustom4" name="i_nickname" placeholder="Enter nickname" required>
                            <div class="valid-feedback"> Looks good! </div>
                          </div>
                        </div> <!-- /.form-row -->
               
                        <div class="form-row">
                          
                          <div class="col-md-3 mb-3">
                          <label for="validationSelect2">Category</label>
                            <select class="form-control select2" id="validationSelect2" name="i_c_id" required>
                              <option value="">Select category</option>
                              <?php 
                                 $cat = $pdo->prepare("SELECT * FROM category");   
                                $cat->execute();
                                $cate = $cat->fetchAll();
                                
                              echo '<optgroup label="Category">';
                                  foreach($cate as $catt){
                                    echo '<option value="'.$catt['c_id'].'">'.$catt['c_name'].'</option>';
                                  }
                                
                                
                              echo '</optgroup>';
                              ?>
                            </select>
                            <div class="invalid-feedback"> Please select a valid category. </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="custom-zip">Price</label>
                            <input class="form-control input-zip" name="i_price" id="custom-zip" autocomplete="off" maxlength="9" required>
                            <div class="invalid-feedback"> Please provide a price. </div>
                          </div>
                        </div>
                        <div class="form-row mb-3">
                          <div class="col-md-6 mb-3">
                            <label for="date-input1">Registration Date</label>
                            <div class="input-group">
                              <input type="text" class="form-control drgpicker" name="i_registration_date" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                              <div class="input-group-append">
                                <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16 mx-2"></span></div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-md-3 mx-auto mb-3">
                            <p class="mb-3">Available</p>
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" name="i_availability" id="customSwitch1" required>
                              <label class="custom-control-label" for="customSwitch1">Yes</label>
                            </div>
                          </div>
                        </div>
                       
                        <div class="form-group mb-3">
                          <label for="validationTextarea1">Description</label>
                          <textarea class="form-control" id="validationTextarea1" name="i_description" placeholder="Give a description to the item" required="" rows="3"></textarea>
                          <div class="invalid-feedback"> Please enter a description in the textarea. </div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="validationTextarea1">Image</label>
                          <input type="file" id="logo" name="i_image" class="form-control">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationSelect2">Resturants</label>
                            <select class="form-control select2" id="validationSelect2" name="i_r_id" required>
                              <option value="">Select Resturant</option>
                              <?php 
                                $editorr = $pdo->prepare("SELECT * FROM resturants");
                                $editorr->execute(); 
                                $editorrr = $editorr->fetchAll();
                              
                              echo '<optgroup label="Users">';
                                  foreach($editorrr as $editor){
                                    echo '<option value="'.$editor['r_id'].'">'.$editor['r_name'].'</option>';
                                  }
                                echo '</optgroup>';
                              ?>
                            </select>
                            <div class="invalid-feedback"> Please select atleast one resturant. </div>
                          </div>
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" name="i_agreement" id="customControlValidation16" required="">
                          <label class="custom-control-label" for="customControlValidation16"> I Agree to terms and conditions</label>
                          <div class="invalid-feedback"> You must agree before submitting. </div>
                        </div>
                        <button class="btn btn-primary" name="save" type="submit">Submit form</button>
                      </form>
                    </div> <!-- /.card-body -->
                  </div> <!-- /.card -->
                </div> <!-- /.col -->
</div>
</div>
</div>
</div> 