<?php 
require '../db/connect.php';
$dat = new DatabaseTable('editor');
$e_id = $_SESSION['eid'];
$ins = $dat->find('e_id', $e_id);
$udatt = $ins->fetch();

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
<h2 class="page-title">Update Profile</h2>
<p class="text-muted">You can update your profile here</p>
<div class="row">
<div class="col-md-6">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Profile Details</strong>
                    </div>
                    <div class="card-body">
                      <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                        <div class="form-row">
                            
                          <div class="col-md-12 mb-3">
                            <label for="validationCustom3">Username</label>
                            <input type="text" class="form-control" id="validationCustom3" name="e_username" value="<?php echo $udatt['e_username'];  ?>" required>
                            <div class="valid-feedback"> Looks good! </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="validationCustom4">Password</label>
                            <input type="text" class="form-control" name="e_password_new" value="">
                            <input type="hidden" class="form-control-plaintext" readonly name="e_password" value="<?php echo $udatt['e_password'];  ?>" required>
                            <div class="valid-feedback"> Looks good! </div>
                          </div>
                        </div> <!-- /.form-row -->
              
                     
                        <div class="form-group mb-3">
                          <label for="validationTextarea1">Image</label>
                          <input type="file"  name="e_photo_new" class="form-control">
                          <input type="hidden" class="form-control-plaintext" readonly name="e_photo" value="<?php echo $udatt['e_photo'];  ?>" class="form-control">
                        </div>
                        <div class="alert alert-warning" role="alert">
                        <span class="fe fe-alert-triangle fe-16 mr-2"></span> Please leave the password or image field empty if you don't want to change! </div>
                       
                        <button class="btn btn-primary" name="save" type="submit">Update</button>
                      </form>
                    </div> <!-- /.card-body -->
                  </div> <!-- /.card -->
                </div> <!-- /.col -->
</div>
</div>
</div>
</div>