<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Ваше сообщение успешно отправлено</title>
</head>
 
<body>
<?php
  if(isset($_POST["send"])) {
    $to = "yura05158@gmail.com";
    $name = htmlspecialchars ($_POST["name"]);
    $email = htmlspecialchars ($_POST["email"]);
    $message = htmlspecialchars ($_POST["message"]);
    $error_name = "";
    $error_email = "";
    $error_message = "";
    $error = false;
    if($email == "" || !preg_match ("/@/", $email)) {
    $error_email = "ERROR";
    $error = true;
    }
    if(strlen($name) == 0) {
     $error_name = "ERROR";
     $error = true;
    }
    if(strlen($message) == 0) {
     $error_message = "ERROR";
     $error = true;
    }
    if(!error) {
      $subject = "Tema";
      $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
      mail ($to, $subject, $name, $message, $headers);
    }
  }
?>
</body>
</html>
