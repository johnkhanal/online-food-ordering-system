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
<h2 class="page-title">Add Featured Resturant</h2>
<p class="text-muted">You can add categories from here</p>
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
                            <label for="validationSelect2">Resturants</label>
                            <select class="form-control select2" id="validationSelect2" name="fr_r_id" required>
                              <option value="">Select Resturant</option>
                              <?php 
                                $editorr = $pdo->prepare("SELECT * FROM resturants");
                                $editorr->execute(); 
                                $editor = $editorr->fetch();
                              
                              echo '<optgroup label="Resturants">';
                                echo '<option value="'.$editor['r_id'].'">'.$editor['r_name'].'</option>';
                              echo '</optgroup>';
                              ?>
                            </select>
                            <div class="invalid-feedback"> Please select atleast one resturant. </div>
                          </div>
                          
                        </div> <!-- /.form-row -->
                        <button class="btn btn-primary" name="save" type="submit">Add</button>
                      </form>
                    </div> <!-- /.card-body -->
                  </div> <!-- /.card -->
                </div> <!-- /.col -->
</div>
</div>
</div>
</div>