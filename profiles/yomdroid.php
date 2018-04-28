<?php
  require_once"../db.php";
  $result = $conn->query("SELECT * from secret_word LIMIT 1");
  $result = $result->fetch(PDO::FETCH_OBJ);
  $secret_word = $result->secret_word;
  $result2 = $conn->query("Select * from interns_data where username = 'yomdroid'");
  $user = $result2->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Yomdroid | Developer</title>
	<style type="text/css">
		html {font-family: 'Podkova', serif;
            background-image: url("http://res.cloudinary.com/yomdroid/image/upload/v1524493981/Frame_3.png");
        }
        h1 {
        	color: #FFFFFF;
        	text-align: right;
        	font-size: 30px;
        	margin-right: 20px;
        }
        h2 {
        	color: #FFFFFF;
        	text-align: right;
        	font-size: 30px;
        	margin-right: 20px;
        }
        h3 {
        	color: #FFFFFF;
        	text-align: right;
        	font-size: 25px;
        	margin-right: 20px;
        }
        img {
        	height: 300px;
        	width: 250px;
        	margin-left: 1020px;
        }
        p {
        	color: #FFFFFF;
        	text-align: right;
        	font-size: 25px;
        	margin-right: 20px;
        }
	</style>
</head>
<body>
	<img src="<?= $user->image_filename;?>" alt="Picture">
<div>
	<h1><strong><?= $user->name; ?></strong></h1>
	<h2><small>Developer</small></h2>
	<h3><a href="https://twitter.com/yomdroid">Twitter</a></h3>
	<p>Programming is the new super power. <br> Harness this opportunity to secure your future</p>
</div>
</body>
</html>