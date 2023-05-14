<?php
include_once("controller2.php"); 
$Authenticator = new Authenticator();

if (!isset($_SESSION['auth_secret'])) {
    $secret = $Authenticator->generateRandomSecret();
    $_SESSION['auth_secret'] = $secret;
}

$qrCodeUrl = $Authenticator->getQR('myPHPnotes', $_SESSION['auth_secret']);
$code = $Authenticator->getCode($_SESSION['auth_secret']);

if (!isset($_SESSION['failed'])) {
    $_SESSION['failed'] = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nhập OTP</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <meta name="description" content="Implement Google like Time-Based Authentication into your existing PHP application. And learn How to Build it? How it Works? and Why is it Necessary these days."/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel='shortcut icon' href='/favicon.ico'  />
        <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
    <section class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image5.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree" style="text-align: center;">

                        
                        <!-- form 1 home-->
                        <form action="codeQR2.php" method="post" autocomplete="off"> 
                        <!-- thong bao loi -->
                        <?php
                            if($errors > 0){
                                foreach($errors AS $displayErrors){
                        ?>
                            <div id="alert" class="alert alert-danger" role="alert">
                            <?php echo $displayErrors; ?>
                           </div>
                        <?php
                            }
                        }
                        ?>
                        <!-- end thong bao loi -->   
                            <h2 >Nhập mã OTP</h2>
                            <div style="text-align: center;">
                            <!-- <img style="text-align: center;;" class="img-fluid" src="<?php   echo $qrCodeUrl ?>" alt="Verify this Google Authenticator"><br><br>         -->
                                <input name="OTPverify" type="text" class="form-control" required placeholder="******" style="font-size: xx-large;width: 200px;border-radius: 0px;text-align: center;display: inline;color: #0275d8;"><br> <br>    
                                <button name="verifyEmail" type="submit" class="btn btn-md btn-primary" style="width: 200px;border-radius: 0px;">Verify</button>
                            </div>
                        </form>
                        <!-- end form 1 -->
                        <!-- form 2 -->
                        <form action="codeQR2.php" method="post">
                            <div class="social-icons">
                                 <!-- send back otp  -->
                                <input id ="resendingPass" name="resendingPass" type="submit" value="Chưa nhận được OTP?" class="btn btn-link" style="text-align: center;"></input>
                                <!-- < send back otp  -->
                            </div>
                        </form>
                        <!-- end form 2 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
const inputs = document.querySelectorAll(".input");
function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
</script>
</body>
</html>


