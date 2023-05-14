<?php include_once ("controller2.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Your Password In Php</title>
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
<section class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image3.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree" style="text-align: center;">
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
                        
                        <!-- form 1 home-->
                        <form action="forgot.php" method="post" autocomplete="off">    
                            <h2>Email Check</h2>
                            <p>It's quick and easy.</p>
                            <div id="line"></div>
                            <div style="text-align: center; margin-bottom: 30px">
                                <input type="email" name="email" placeholder="Email" required><br>
                                <button type="submit" name="forgot_password" value="Check">Check</button>
                                </div>
                        </form>
                        <!-- end form 1 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
