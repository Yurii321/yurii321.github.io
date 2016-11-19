<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['email']) 
   and !empty($_POST['message'])){
      $name = trim(strip_tags($_POST['name']));
	  $mail = trim(strip_tags($_POST['email']));
      $message = trim(strip_tags($_POST['message']));
 
      mail('yura05158@gmail.com', 'Письмо с адрес_вашего_сайта', 
      'Вам написал: '.$name.'<br />Его почта: '.$mail.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=utf-8");
 
      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
 
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>