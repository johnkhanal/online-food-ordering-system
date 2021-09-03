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
<h2 class="page-title">Add locations</h2>
<p class="text-muted">You can add locations from here</p>
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
                            <label for="validationCustom3">Location Name</label>
                            <input type="text" class="form-control" id="validationCustom3" name="l_name" required>
                            <div class="valid-feedback"> Looks good! </div>
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