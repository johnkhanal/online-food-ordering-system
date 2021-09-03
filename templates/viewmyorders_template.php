<?php 
require '../db/connect.php';
if(!isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] != true){
  header('Location: index');
}
?>
        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>
        </div>

        <section>
       
                
                <div class="container" style="margin-bottom: 100px;">
                    <div class="row">
                                          
                      <table class="table table-bordered table-striped table-hover table-sm display nowrap" id="example2" name="example2" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                          <th>Item</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Ordered Date</th>
                          <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $uid = $_SESSION['u_id'];
                            $dta = $pdo->prepare("SELECT * FROM orders
                            WHERE o_c_id='$uid'
                            ");
                            $dta->execute();
                            $data = $dta->fetchAll();
                            foreach($data as $dat){
                              echo '<tr>
                              <td>'.$dat['o_i_name'].'</td>
                              <td>'.$dat['o_qty'].'</td>
                              <td>'.$dat['o_price'].'</td>
                              <td>'.$dat['o_date'].'</td>';
                              if($dat['o_status'] == 'Booked'){
                                echo '<td><span class="badge badge-warning">'.$dat['o_status'].'</span></td>';
                            
                              }else{
                                echo '<td><span class="badge badge-success">'.$dat['o_status'].'</span></td>';
                            
                              }
                              echo '</tr>';
                            }
                        ?>
                        
                        </tbody>
                       
                      </table>
                    </div>
                </div>
  
        </section>
        