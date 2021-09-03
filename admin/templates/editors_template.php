<?php
require '../db/connect.php';
?>
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Editors</h2>
              <p class="card-text">You are viewing all the editors lists</p>
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">

                    <table class="table datatables" id="dataTable-1">
                        <thead>
                          <tr>
                        
                            <th>#</th>
                            <th>Photo</th>
                            <th>Username</th>
                            <th>Password</th>
                            
            
                            
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $dta = $pdo->prepare("SELECT * FROM editor
                            ");
                            $dta->execute();
                            $data = $dta->fetchAll();
                            foreach($data as $dat){
                                echo ' <tr>
                            
                                <td>1</td>
                                <td><a href="../../images/editors/'.$dat['e_photo'].'"><img src = "../../images/editors/'.$dat['e_photo'].'" height="100px" width="100px" style="border-radius: 50%;" alt="No image found"></a></td>
                                <td>'.$dat['e_username'].'</td>
                                <td>'.$dat['e_password'].'</td>';
                                
                                echo '<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <button type="button" class="dropdown-item btn mb-2 btn-primary" data-toggle="modal" data-target="#myModal' . $dat['e_id'] . '"><span class="fe fe-24 fe-edit-3"></span></button>
                                    <a class="dropdown-item" href="deleteeditor?did='.$dat['e_id'].'"><span class="fe fe-24 fe-trash-2"></span></a>
                                  </div>
                                </td>';
                               
                      
                                echo '<div class="modal fade modal-right modal-slide" id="myModal' . $dat['e_id'] . '" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">';
                                   
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
                                            <label for="validationCustom3">User Name</label>
                                            <input type="text" class="form-control" id="validationCustom3" name="e_username" value="'.$dat['e_username'].'" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                            <label for="validationCustom4">Password</label>
                                            <input type="text" class="form-control" id="validationCustom4" name="e_password" value="'.$dat['e_password'].'" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                          </div>
                                        </div> <!-- /.form-row -->
                               
                                       
                                        
                                          
                                         

                                        <div class="form-group mb-3">
                                          <label for="validationTextarea1">Image</label>
                                          <input type="file" id="logo" name="e_photo" class="form-control">
                                          <input type="hidden" name="e_photo_name" value="'.$dat['e_photo'].'" class="form-control">
                                          <a href="../../images/editors/'.$dat['e_photo'].'"><img src = "../../images/editors/'.$dat['e_photo'].'" height="100px" width="100px" style="border-radius: 50%;" alt="No image found"></a>
                                          </div>';
                                          ?>
                                        </div>
                                        <div class="modal-footer">
                                        <input type="hidden" name="e_id" value="<?php echo $dat['e_id']; ?>">
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