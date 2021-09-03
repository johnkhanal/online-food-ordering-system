<?php 
require '../db/connect.php';


$logchk = false;
if(isset($_SESSION['user_loggedin'])){
if($_SESSION['user_loggedin'] == true){
    $logchk = true;
    $uid = $_SESSION['u_id'];
    $abc = $pdo->query("SELECT * FROM users WHERE u_id='$uid'");
    $dat = $abc->fetch();
    $fname = $dat['u_fullname'];
    $email = $dat['u_email'];
    $phone = $dat['u_phone'];
}
}else{
    $fname = ' ';
    $email = ' ';
    $phone = '';

//     echo "<script>
// alert('You are not a user. Please Login first');
// window.location.href='http://localhost/dissertation_project/public_html/';
// </script>";
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
        <h2>Contact Us</h2>
        <p class="lead">Fill up the details for any kind of feedback or contact</p>
    </div>
    <div class="row downmove">
    <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <i style="font-size:74px" class="fa">&#xf041;</i><span class="text-muted" style="margin-left: 50px;">Kathmandu, Nepal</span>
            </h4>
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            <i style="font-size:74px" class="fa">&#xf095;</i><span class="text-muted" style="margin-left: 50px;">+977 9800000000</span>
            </h4>
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            <i style="font-size:74px" class="fa">&#xf0e0;</i><span class="text-muted" style="margin-left: 50px;">chitochito@gmail.com</span>
            </h4>
           
            
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Contact Details</h4>
            <form class="needs-validation" method="POST" novalidate="">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Full Name</label>
                        <input type="text" class="form-control" name="feed_fullname" id="firstName" placeholder="" value="<?php echo $fname;  ?>" required="">
                        <div class="invalid-feedback"> Valid name is required. </div>
                    </div>
                    
                   
                </div>
                
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="feed_email" name="feed_email" value="<?php echo $email;  ?>" placeholder="you@example.com">
                    <div class="invalid-feedback"> Please enter a valid email address. </div>
                </div>
               
                <div class="mb-3">
                    <label for="address">Phone</label>
                    <input type="text" class="form-control" name="feed_phone" value="<?php echo $phone;  ?>" id="u_phone" placeholder="Phone number" required="">
                    <div class="invalid-feedback"> Please enter your phone number. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Message</label>
                    <textarea class="form-control" name="feed_message"  rows="4" cols="50"></textarea>
                    <div class="invalid-feedback"> Please enter your message. </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <button class="btn btn-success btn-lg" style="float: right;" name="save" type="submit">Submit</button>
                    </div>
                </div>
                
                 
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
