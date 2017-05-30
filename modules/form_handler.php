<?php 
    $email = $name = $msg = $emailErr = $nameErr = "";
      
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        
        if(empty($_POST["name"])){
          $nameErr = "Name is Required";
        } else{
          $name = $_POST["name"];
          if(!preg_match("/^[a-zA-Z]*$/", $name)){
            $nameErr = "Please enter valid Name";
          } else {
            $name = test_input($name);
          }
        }
        
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