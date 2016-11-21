<?php
  if(isset($_POST["send"])) {
    $name = htmlspecialchars ($_POST["name"]);
    $email = htmlspecialchars ($_POST["email"]);
    $message = htmlspecialchars ($_POST["message"]);
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["message"] = $message;
  }
?>
