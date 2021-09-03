<?php
require '../db/connect.php';
?>
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Location</h2>
              <p class="card-text">You are viewing all the locations lists</p>
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
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $dta = $pdo->prepare("SELECT * FROM locations
                            ");
                            $dta->execute();
                            $data = $dta->fetchAll();
                            foreach($data as $dat){
                                echo ' <tr>
                            
                                <td>1</td>
                                <td>'.$dat['l_name'].'</td>';
                                
                                echo '<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <button type="button" class="dropdown-item btn mb-2 btn-primary" data-toggle="modal" data-target="#myModal' . $dat['l_id'] . '"><span class="fe fe-24 fe-edit-3"></span></button>
                                    <a class="dropdown-item" href="deletelocation?did='.$dat['l_id'].'"><span class="fe fe-24 fe-trash-2"></span></a>
                                  </div>
                                </td>';
                               
                      
                                echo '<div class="modal fade modal-right modal-slide" id="myModal' . $dat['l_id'] . '" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">';
                                   
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
                                            <label for="validationCustom3">Location Name</label>
                                            <input type="text" class="form-control" id="validationCustom3" name="l_name" value="'.$dat['l_name'].'" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                          </div>
                                          
                                        </div> 
                               
                                        <div class="modal-footer">
                                        <input type="hidden" name="l_id" value="'.$dat['l_id'].'">
                                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn mb-2 btn-primary" name="save">Update</button>
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>';
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