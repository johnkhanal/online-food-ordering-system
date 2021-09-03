<?php 
require '../db/connect.php';
$logchk = false;
if(isset($_SESSION['user_loggedin'])){
if($_SESSION['user_loggedin'] == true){
    $logchk = true;
    $uid = $_SESSION['u_id'];
    $abc = $pdo->query("SELECT * FROM users WHERE u_id='$uid'");
    $dat = $abc->fetch();
}
}else{
    echo "<script>
alert('You are not a user. Please Login first');
window.location.href='http://localhost/foodchow/public_html/';
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
        <h2>My Account</h2>
        <p class="lead">Change your details</p>
    </div>
    <div class="row downmove">
        
        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">User Details</h4>
            <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate="">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Full Name</label>
                        <input type="text" class="form-control" name="u_fullname" id="firstName" placeholder="" value="<?php echo $dat['u_fullname'];  ?>" required="">
                        <div class="invalid-feedback"> Valid Name is required. </div>
                    </div>
                   
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" name="u_username" value="<?php echo $dat['u_username'];  ?>" name="o_username" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="u_email" name="u_email" value="<?php echo $dat['u_email'];  ?>" placeholder="you@example.com">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="email">Password</label>
                    <input type="password" class="form-control" name="u_password_new">
                    <input type="hidden" readonly class="form-control-plaintext" name="u_password" value="<?php echo $dat['u_password'];  ?>">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Phone</label>
                    <input type="text" class="form-control" name="u_phone" value="<?php echo $dat['u_phone'];  ?>" id="u_phone" placeholder="Phone number" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="u_address" id="address" value="<?php echo $dat['u_address'];  ?>" placeholder="Enter a valid address" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12 mb-3">
                    <label for="address2">Photo</label>
                    <input type="file" name="u_profile_new" class="form-control">
                    <input type="hidden" readonly class="form-control-plaintext" name="u_profile" value="<?php echo $dat['u_profile'];  ?>" class="form-control">
                    </div>
                 
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                    <div class="alert alert-warning" role="alert">
                        <span class="fe fe-alert-triangle fe-16 mr-2"></span> Please leave the password or image field empty if you don't want to change! </div>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <input type="hidden" name="u_id" value="<?php echo $dat['u_id'];  ?>">
                        <button class="btn btn-success btn-lg" style="float: right;" name="save" type="submit">Update</button>
                    </div>
                </div>
                
                 
            </form>
        </div>
    </div>
    
</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
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
