
<?php

session_start();
require "models/form.model.php";
//====================================================================
$formValid = false;
$passwordError = '';
$userName = '';
$password = '';
$email='';
$emailError='';
$datas = getUserData();
$role_id = '';
$userId = '';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(empty($_POST["email"]))
    {
        $emailError = "Please enter your email";
        $colorErrorEmail  = true;
        $formValid = false;
    }
    elseif (isset($_POST["email"]))
    {
        $email = $_POST['email'];
        foreach($datas as $data){
            if ($data['email'] == $email)
            {
                $emaillValueCookie = $_POST["email"];
                $userName = $data['name'];
                $userId = $data['id'];
            }else{
                $emailError = "Does not find user's email";
                $colorErrorEmail  = true;
            }
        }
    }
    if (empty($_POST["password"])) 
    {
        $passwordError = "Please enter your password";
        $colorErrorPassword  = true;
        $formValid = false;
    }
    elseif (isset($_POST["password"]))
    {
        $password = $_POST['password'];
        foreach($datas as $data)
        {
            if ($data['email'] == $email && password_verify( $password,$data['password']))
            {
                $role_id = $data['role_id'];
                $formValid = true;
            }
            else{
                $passwordError = "Your password is not correct";
                $colorErrorPassword  = true;
            }
        }           
    }

    if($formValid)
    {   
        setcookie("username",$userName, time() + (86400 * 30));
        setcookie ("email",$_POST["email"], time() + (86400 * 30));
        setcookie ("password",$_POST["password"], time() + (86400 * 30));
        setcookie ("id",$userId, time() + (86400 * 30));

       
        if ($role_id == 3){
            setcookie("role_id", 3, time() + (86400 * 30));
            header("Location:/");
            
        }
        elseif($role_id == 2){
            setcookie("role_id", 2, time() + (86400 * 30));
            header("Location:/seller");
        }
        elseif($role_id == 1){
            setcookie("role_id", 1, time() + (86400 * 30));
            header("Location:/admin");    
        }
    }
}