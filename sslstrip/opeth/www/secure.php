<?php
session_start();
if(isset($_POST["submit"])){
    $users = array(
        "user" => "toto",
        "admin"=>"password"
    );
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    if(isset($users[$username]) && $password === $users[$username]){
        $_SESSION["user_data"]["username"] = $username;
        $msg = "Hello " . $username;
    }else{
        $msg = "Invalid Login";
    }
} else {
    if(session_status() === PHP_SESSION_ACTIVE) {
        $msg = "Welcome back, " . $_SESSION["user_data"]["username"];
    } else {
        $msg = "Not logged in";
        header('Location: http://147.210.12.1/index.php');
    }
}
?>
<html>
  <head>
    <title>Secure page</title>
  </head>
  <body>
    <p><?php echo $msg; ?></p>
  </body>
</html>
