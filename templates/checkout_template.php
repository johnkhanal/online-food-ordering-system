<?php 
require '../db/connect.php';
$logchk = false;
if(isset($_SESSION['user_loggedin'])){
if($_SESSION['user_loggedin'] == true){
    $logchk = true;
    $uid = $_SESSION['u_id'];
    $abc = $pdo->query("SELECT * FROM users WHERE u_id='$uid'");
    $dat = $abc->fetch();
    $userdata = json_encode($dat);
}
}else{
    echo "<script>
alert('You are not a user. Please Login first');
window.location.href='http://localhost/dissertation_project/public_html/';
</script>";
}
?>

<style>
    .startcon {
  max-width: 960px;
 
}
.tophead{
    margin-top: 700px;
}
.downmove{
    margin-bottom: 150px;
}

/* .lh-condensed { line-height: 1.25; } */
</style>

<div class="container startcon">
    <div class="py-5 text-center tophead">
        <h2>Checkout form</h2>
        <p class="lead">From here you can book your products</p>
    </div>
    <div class="row downmove">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill coun">0</span>
            </h4>
            <ul class="list-group mb-3 sticky-top cartcheckout">
                
                
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (Rs.)</span>
                    <strong class="tp">20</strong>
                </li>
            </ul>
            
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" name="o_fname" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" name="o_lname" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" name="o_username" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="u_email" placeholder="you@example.com">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Phone</label>
                    <input type="text" class="form-control"  id="u_phone" placeholder="Phone number" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Address 1</label>
                    <input type="text" class="form-control" name="o_address1" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" name="o_address2" id="address2" placeholder="Apartment or suite">
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">City</label>
                        <select class="custom-select d-block w-100" name="o_city" id="country" required="">
                            <option value="">Choose...</option>
                            <option>Kathmandu</option>
                            <option>Pokhara</option>
                            <option>Lalitpur</option>
                            <option>Biratnagar</option>
                            <option>Birganj</option>
                            <option>Bhaktapur</option>
                            <option>Butwal</option>
                            <option>Hetauda</option>
                            <option>Bharatpur</option>
                            <option>Itahari</option>
                            <option>Nepalganj</option>
                            <option>Damak</option>
                            <option>Siraha</option>
                            <option>Gorkha  </option>
                            <option>Waling</option>
                        </select>
                        <div class="invalid-feedback"> Please select a valid city. </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Province </label>
                        <select class="custom-select d-block w-100" name="o_province" id="state" required="">
                            <option value="">Choose...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select>
                        <div class="invalid-feedback"> Please provide a valid province. </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="number" name="o_zipcode" class="form-control" id="zip" placeholder="" required="">
                        <div class="invalid-feedback"> Zip code required. </div>
                    </div>
                </div>
                
   
                <hr class="mb-4">
                <h4 class="mb-3">Payment</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" type="radio" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Cash on Delivery</label>
                    </div>
                    
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="o_t_condition" id="same-address">
                    <input type="hidden" name="o_c_id" value="<?php echo $_SESSION['u_id'];  ?>">
                    <input type="hidden" name="o_i_name" id="o_i_name">
                    <input type="hidden" name="o_price" id="o_price">
                    <input type="hidden" name="o_qty" id="o_qty">
                    <input type="hidden" name="o_total_price" id="o_total_price">
                    <input type="hidden" name="o_r_id" id="o_r_id">
                    <label class="custom-control-label" for="same-address">I accept shipping terms and conditions</label>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" name="book" type="submit">Book</button>
            </form>
        </div>
    </div>
    
</div>
<script type="text/javascript">
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict'

    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation')

        // Loop over them and prevent submission
        Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    }, false)
}())
</script>
<script type="text/javascript">
    var loggin = '<?php echo $logchk; ?>';
    if(loggin == false){
        alert('Please Login');
    }else{
        var jsdata = '<?php echo $userdata; ?>';
  
        var JSONObject = JSON.parse(jsdata);
        // alert(jsdata);
        var uu_email =  JSONObject['u_email'];
        // alert(uu_email); 
        var u_phone = JSONObject['u_phone'];
        // // alert(u_email);
        $("#u_email").val(uu_email);
        $("#u_phone").val(u_phone);
    }
 
            
    function getdata2(){
        
            var gpname = localStorage.getItem('productname');
            var gprice = localStorage.getItem('price');
            var gcoun = localStorage.getItem('coun');
            var gsubtot = localStorage.getItem('subtotal');
            var gqty = localStorage.getItem("qty");
            var grid = localStorage.getItem("rid");
            
            $("#o_i_name").val(gpname);
            $("#o_price").val(gprice);
            $("#o_qty").val(gqty);
            $("#o_total_price").val(gsubtot);
            $("#o_r_id").val(grid);
            
            try{
               var ggpname =  gpname.split(",");
                var ggprice = gprice.split(",");
        
                var ggcoun = gcoun.split(",");
                var ggqty = gqty.split(",");
                
            for(var i=0;i<ggcoun.length;i++){
                var pr = ggprice[i].substring(3);
                eprice = Number(pr) * Number(ggqty[i]);
                var nd = '<li class="list-group-item d-flex justify-content-between lh-condensed "><div><h6 class="my-0">'+ggpname[i]+'</h6>';
            nd += '<small class="text-muted">(Rs.) X '+ggqty[i]+'</small>';
            nd += '</div><span class="text-muted prrice">'+eprice+'</span></li>';
            
            $(".cartcheckout").prepend(nd);
            $(".coun").html(ggcoun.length);
            // }
            // $(".totalcart").html('Rs.' + gsubtot);
            }
            var sum22 = 0;
            $(".prrice").each(function(){
            var vv = $(this).html();
            sum22 = sum22 + Number(vv);
        });
        $(".tp").html(sum22);
        }catch(Exception){
                
            }
    }
            getdata2();
</script>