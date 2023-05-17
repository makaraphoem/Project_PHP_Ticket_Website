<?php
session_start();
require "models/form.model.php";
// ========================================================================================= //
// Return current date from the remote server

$userNameError ="";
$userName = "";
$userDateOfBirthError = "";
$dateOfBirth = "";
$emailError = "";
$email = "";
$passwordError = "";
$password ="";
$comfirmPasswordError = "";
$comfirmPassword = "";
$formValid = true;
$datas = getUserData();
$Todaydate = date('Y-m-d');
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // validation user name
        if (empty($_POST["username"]))
        {
            $userNameError = "Please enter an username";
            $colorErrorName  = true;
            $formValid = false;
        }
        elseif(isset($_POST["username"]))
        {
            $userName = $_POST["username"];
            $uppercase = preg_match('@[A-Z]@', $userName);
            $lowercase = preg_match('@[a-z]@', $userName);
            if (!$uppercase || !$lowercase)
             {
                $userNameError = "Username should contains only letters: a-z, A-Z";
                $colorErrorName  = true;
                $formValid = false;
            }
        }
        else
        {
                $userName = $_POST["username"];
        }
        // validation user date of birth
        if (empty($_POST["date-of-birth"]))
        {
            $userDateOfBirthError = "Please enter your date of birth";
            $colorErrorDateOfBirth  = true;
            $formValid = false; 
        }elseif(($_POST["date-of-birth"])>= $Todaydate){
            $userDateOfBirthError = "Your date of birth cannot today and future";
            $colorErrorDateOfBirth  = true;
            $formValid = false;
        }
        else
        {
            $dateOfBirth = $_POST["date-of-birth"];
        }
        // validation user email
        if (empty($_POST["email"])) 
        {
            $emailError = "Please enter an email";
            $colorErrorEmail  = true;
            $formValid = false;
        }
        elseif (isset($_POST["email"]))
        {
            $email = $_POST["email"];
            $emailPattern = preg_match('/\\S+@\\S+\\.\\S+/', $email);
            foreach($datas as $data)
            {
                if ($data['email'] == $email){
                    $formValid = false;
                    $colorErrorEmail  = true;
                    $emailError = "This email is already in use.";
                }
                if(!$emailPattern)
                {
                    $emailError = "Please enter a property email";
                    $colorErrorEmail  = true;
                    $formValid = false;
                }
            }    
        }
        if (empty($_POST["password"]))
        {
            $passwordError = "Please enter password";
            $colorErrorPassword  = true;
            $formValid = false;
        }
        elseif (isset($_POST["password"])) 
        {
            $password = $_POST['password'];
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);

            if (!$uppercase || !$lowercase || !$number || strlen($password) < 8 )
             {
                    $passwordError = "Password should be contain a strong password: a-z, A-Z, 0-9 and at least 8";
                    $formValid = false;
                    $colorErrorPasswordComfirm  = true;
            }
        }
        else{
            $password=$_POST["password"];
            
        }

        if (empty($_POST["comfirmPassword"]))
        {
            $comfirmPasswordError = "Please enter a comfirm password";
            $colorErrorComfirm  = true;
            $formValid = false;
        }
        elseif (!empty($_POST["comfirmPassword"]))
        {
            $comfirmPassword = $_POST["comfirmPassword"];
            if ($comfirmPassword != $password){

                $comfirmPasswordError = "Your password does not match";
                $formValid = false;
                $colorErrorComfirm  = true;
            }else 
            {
                $hash = password_hash($password ,PASSWORD_BCRYPT);
                
            }
        }

        if($formValid)
        {
            setcookie ("email",$_POST["email"], time() + (86400 * 30));
            setcookie ("password",$_POST["password"], time() + (86400 * 30));
            setcookie ("username",$_POST["username"], time() + (86400 * 30));
            setcookie("role_id", 3, time() + (86400 * 30));
            register($userName, $hash, $email, $dateOfBirth,3 );
            header("Location:/");
        }
}
    
