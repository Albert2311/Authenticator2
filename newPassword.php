<?php include_once ("controller2.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        #line
            {
                height: 1px;
                width: 100%;
                background: #00000060;
                margin: 10px 0 50px 0;
            }
    </style>
</head>
<body>
        <!-- form section start -->
        <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                   
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image2.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">

                        <h2>Password</h2>
                        <p>It's quick and easy.</p>
                        <div id="line"></div>
                        <form action="newPassword.php" method="POST" autocomplete="off">
                        <?php
                            if($errors > 0){
                                foreach($errors AS $displayErrors){
                                ?>
                                <div id="alert">
                                    <?php echo $displayErrors; ?>
                                    
                                </div>
                                <?php
                                }
                            }
                    ?>
                            <input type="password" name="password" placeholder="Password" required><br>
                            <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br>
                            <button type="submit" name="changePassword" value="Save">Save</button>
                        </form>
                        <div class="social-icons">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->
<!-- <div id="container">
        <h2>Password</h2>
        <p>It's quick and easy.</p>
        <div id="line"></div>
        <form action="newPassword.php" method="POST" autocomplete="off">
            <?php
            if ($errors > 0) {
                foreach ($errors as $displayErrors) {
            ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
            <?php
                }
            }
            ?>
            <input type="text" name="password" placeholder="Password" required><br>
            <input type="text" name="confirmPassword" placeholder="Confirm Password" required><br>
            <input type="submit" name="changePassword" value="Save">
        </form>
    </div> -->
</body>
</html>