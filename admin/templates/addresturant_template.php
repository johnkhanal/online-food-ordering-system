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
<h2 class="page-title">Add resturant</h2>
<p class="text-muted">You can add resturant from here</p>
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
                            <label for="validationCustom3">Owner Name</label>
                            <input type="text" class="form-control" id="validationCustom3" name="f_name" placeholder="Enter Owner name" required>
                            <div class="valid-feedback"> Looks good! </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom4">Owner Surname</label>
                            <input type="text" class="form-control" id="validationCustom4" name="l_name" placeholder="Enter Owner surname" required>
                            <div class="valid-feedback"> Looks good! </div>
                          </div>
                        </div> <!-- /.form-row -->
                        <form class="needs-validation" novalidate>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom3">Resturant name</label>
                            <input type="text" class="form-control" name="r_name" id="validationCustom3" required>
                            <div class="valid-feedback"> Looks good! </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="custom-phone">Mobile</label>
                            <input class="form-control input-phoneus" name="r_mobile" id="custom-phone" maxlength="14" required>
                            <div class="invalid-feedback"> Please enter a correct phone </div>
                          </div>
                        </div> <!-- /.form-row -->
                        <div class="form-row">
                          <div class="col-md-8 mb-3">
                            <label for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" name="r_email" id="exampleInputEmail2" aria-describedby="emailHelp1" required>
                            <div class="invalid-feedback"> Please use a valid email </div>
                            <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="custom-phone">Phone</label>
                            <input class="form-control input-phoneus" name="r_phone" id="custom-phone" maxlength="14" required>
                            <div class="invalid-feedback"> Please enter a correct phone </div>
                          </div>
                        </div> <!-- /.form-row -->
                        <div class="form-group mb-3">
                          <label for="address-wpalaceholder">Address</label>
                          <input type="text" id="address-wpalaceholder" name="r_address" class="form-control" placeholder="Enter your address">
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Badd address </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom33">City</label>
                            <input type="text" class="form-control" name="r_city" id="validationCustom33" required>
                            <div class="invalid-feedback"> Please provide a valid city. </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationSelect2">State</label>
                            <select class="form-control select2" name="r_state" id="validationSelect2" required>
                              <option value="">Select state</option>
                              <optgroup label="Province">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                
                              </optgroup>
                             
                            </select>
                            <div class="invalid-feedback"> Please select a valid state. </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="custom-zip">Zip code</label>
                            <input class="form-control input-zip" name="r_zipcode" id="custom-zip" autocomplete="off" maxlength="9" required>
                            <div class="invalid-feedback"> Please provide a valid zip. </div>
                          </div>
                        </div>
                        <div class="form-row mb-3">
                          <div class="col-md-6 mb-3">
                            <label for="date-input1">Registration Date</label>
                            <div class="input-group">
                              <input type="text" class="form-control drgpicker" name="r_registration_date" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                              <div class="input-group-append">
                                <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16 mx-2"></span></div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-md-3 mx-auto mb-3">
                            <p class="mb-3">Available</p>
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" name="r_availability" id="customSwitch1" required>
                              <label class="custom-control-label" for="customSwitch1">Yes</label>
                            </div>
                          </div>
                        </div>
                       
                        <div class="form-group mb-3">
                          <label for="validationTextarea1">Description</label>
                          <textarea class="form-control" id="validationTextarea1" name="r_description" placeholder="Take a note here" required="" rows="3"></textarea>
                          <div class="invalid-feedback"> Please enter a message in the textarea. </div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="validationTextarea1">Logo</label>
                          <input type="file" id="logo" name="r_logo" class="form-control">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationSelect2">Moderator</label>
                            <select class="form-control select2" id="validationSelect2" name="r_e_id" required>
                              <option value="">Select username</option>
                              <?php 
                                $editorr = $pdo->prepare("SELECT * FROM editor");
                                $editorr->execute(); 
                                $editorrr = $editorr->fetchAll();
                              
                              echo '<optgroup label="Users">';
                              foreach($editorrr as $editor){
                                echo '<option value="'.$editor['e_id'].'">'.$editor['e_username'].'</option>';
                              }
                                echo '</optgroup>';
                              ?>
                            </select>
                            <div class="invalid-feedback"> Please select atleast one username. </div>
                          </div>
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" name="r_agreement" id="customControlValidation16" required="">
                          <label class="custom-control-label" for="customControlValidation16"> Agree to terms and conditions</label>
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