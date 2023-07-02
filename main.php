<?php
    
	$phone = $_POST['phone'];
   

	$to = "fantomchik.pubg.m@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="Телефон: $phone /n";
    
	mail($to, $subject, $msg, "From: $to");

?>

<p>Привет, форма отправлена</p>
