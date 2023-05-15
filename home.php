<?php 
include_once("controller2.php"); 
?>
<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("location: codeQR.php");
    die();
}
$Authenticator = new Authenticator();

$checkResult = $Authenticator->verifyCode($_SESSION['auth_secret'], $_POST['otp'], 3);    // 2 = 2*30sec clock tolerance

if (!$checkResult) {
    $_SESSION['failed'] = true;
    header("location: codeQR.php");
    die();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentication Successful</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <meta name="description" content="Implement Google like Time-Based Authentication into your existing PHP application. And learn How to Build it? How it Works? and Why is it Necessary these days."/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="menu-area">
		<a class="logo" href="#">Computer Network Security</a>
		<ul class="nav">
			<li>
				<a href="#home">Home</a>
			</li>
			<li>
				<a href="#about">About</a>
			</li>
		</ul>
	</div>
	<section id="home">
		<div class="content">
			<h1>NoBrain Group</h1>
			<p>Trần Tấn Trung - 46.01.104.202</p>
            <p>Phạm Nguyệt Anh - 46.01.104.005</p>
            <p>Nguyễn Văn Toàn - 46.01.104.183</p>
            <p>Trần Thái Nguyên - 46.01.104.126</p>
            <a href="logout.php"><button class="button-34" role="button">Đăng xuất</button></a>
		</div>
	</section>   
</body>
</html>




