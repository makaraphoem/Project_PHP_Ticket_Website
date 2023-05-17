<?php
require "models/admin.model.php";
$userName = "";
$userNameError = "";
$dateOfBirth = "";
$dateError = "";
$email = "";
$emailError = "";
$password = "";
$passwordError = "";
$role = "";
$roleError = "";
$hash = "";
$formValid = true;
$datas = getUserData();
$Todaydate = date('Y-m-d');

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // Validate username--------
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
        // validate date_of_birth-------
        if (empty($_POST["date-of-birth"]))
        {
            $dateError = "please enter your birthday";
            $colorDateError = true;
            $formValid = false; 
        }
        elseif($_POST["date-of-birth"] >= $Todaydate){
            $dateError = "Your date of birth cannot today and future";
            $colorDateError = true;
            $formValid = false;
        }
        else
        {
            $dateOfBirth = $_POST["date-of-birth"];
            echo $dateOfBirth;
        }
        // validate email----------------
        if (empty($_POST["email"])) 
        {
            $emailError = "Please enter email";
            $colorEmailError = true;
            $formValid = false;
        }
        elseif(isset($_POST['email']))
        {
            $email = $_POST["email"];
            $emailPattern = preg_match('/\\S+@\\S+\\.\\S+/', $email);
            if(empty($_GET['showId'])){
                foreach($datas as $data)
                {
                    if ($data['email'] == $email){
                        $formValid = false;
                        $colorErrorEmail  = true;
                        $emailError = "This email is already in use.";
                    }
                }  
            }
            if(!$emailPattern)
            {
                $emailError = "Please enter a property email";
                $colorErrorEmail  = true;
                $formValid = false;
            } 
        }
        // validate password--------------
        if (empty($_POST["password"]))
        {
            $passwordError = "Please enter password";
            $colorPasswordError = true;
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
            }else{
            $password = $_POST["password"];
            $hash = password_hash($password ,PASSWORD_BCRYPT);
            }   
        }
        // validate role------------
        if (!empty($_POST["role"]))
        {
            if($_POST['role'] == '1' || $_POST['role'] == '2' || $_POST['role'] == '3' ){ 
                $role = $_POST['role'];
            }
            else
            {
                $roleError = "Please select role";
                $colorRoleError = true;
                $formValid = false;
            }
        } 
        if(! isset($_GET['showId'])){
            if($formValid)
            {
                register($userName, $hash , $email , $dateOfBirth, $role);
                header("Location:/admin");
            }
        } 
        else  
        {
            if($formValid)
            {
                editShow($_GET['showId'],$userName, $email, $hash , $role,$dateOfBirth);
                header("Location:/admin");
            }
        }
        
}
    
