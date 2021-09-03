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
<h2 class="page-title">Add editors</h2>
<p class="text-muted">You can add editors from here</p>
<div class="row">
<div class="col-md-6">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Form Details</strong>
                    </div>
                    <div class="card-body">
                      <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                        <div class="form-row">
                            
                        <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">Username</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                              </div>
                              <input type="text" name = "e_username" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback"> Please choose a username. </div>
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                        <label for="example-password">Password</label>
                        <input type="password" name="e_password" id="example-password" class="form-control" value="password" required>
                      </div>
                      <div class="col-md-6 mb-3">
                          <input type="file" name="e_photo" class="custom-file-input" id="validatedCustomFile" required>
                          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                          <div class="invalid-feedback">Invalid custom file</div>
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