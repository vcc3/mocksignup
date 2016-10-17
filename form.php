<?php

//print_r($_POST);
// this
//header('location:https://www.njit.edu/');

//print_r($_Get);

class form1{

  public function post() {
    echo ' thank you for your submission!';
    }
  public function get(){
    echo 'some form 1':
  }
  }
class form2{

  public function post(){
    echo ' Terrible Job! :(';
    }
  public function get(){
    echo 'some form2';
    }
  }
  
// Step 1: getting page that is requested out of get request.  
$page= new $_Get('page');

print_r($_SERVER);
// is a get  or post request
$request_method = $_SERVER['REQUEST_METHOD'];
//converting to lowercase
$request_method = strtolower($request_method);
echo $request_method;
//calling the method of object being instantiated.
$page->$request_method();
//echo$page;;




?>
