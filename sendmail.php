<?php
$kuda='yura05158@gmail.com';//куда отправлять почту?
$zagolovok='сообщение с сайта';
$headers='Content-type: text/plaint; charset="utf-8"';

if (isset($_POST['send'])){
	//если существует переменная, значит начнем получать информацию из формы
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$messages=$message."\n".$email."\n".$name;

	if (mail($kuda,$zagolovok,$messages,$headers)){echo "Ваше сообщение доставлено.";}
	
	}


?>
