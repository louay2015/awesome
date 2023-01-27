<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="compteur.css">
</head>
<body>
    <div class="box">
        <form action="main.html" class="form" method="get">
            <h2 id="head">Signup</h2>
            <strong>Type your Full Name</strong>
            <input type="text" required="true">
            <strong>Type your email</strong>
            <input type="email" required="true">
            <strong>Type your password </strong>
            <input type="password" required="true">
            <div class="button">
                <button type="submit">Done</button>
                <button type="reset">Reset</button>
			
        </form>


	</div>	
		<div class="views">
			<strong>views==> </strong>
            	<?php
					require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'htdocs' . DIRECTORY_SEPARATOR . 'awesome.php'; 
            	counter();
            		?>

    	</div>
</body>
</html>