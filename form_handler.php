<?php 
    $email = $pwd = $msg = $emailErr = $pwdErr = "";
      
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(empty($_POST["email"])){
          $emailErr = "Email is Required";
        } else{
          $email = $_POST["email"];
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Please enter valid email";
          } else {
            $email = test_input($email);
          }
        }
      
        if(empty($_POST["pwd"])){
          $pwdErr = "password is Required";
        } else{
          $pwd = $_POST["pwd"];
          if(!preg_match("/^[a-zA-Z0-9]*$/", $pwd)){
            $pwdErr = "Please enter valid password";
          } else {
            $pwd = test_input($pwd);
          }
        }
        
        if(!empty($_POST["msg"])){
          $msg = test_input($_POST["msg"]);
        }
    }
      
    function test_input($input){
      $input = trim($input);
      $input = stripslashes($input);
      $input = htmlspecialchars($input);
      return $input;
    }
?>