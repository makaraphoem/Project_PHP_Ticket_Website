<?php
require "models/purchase.model.php";

$ownerName = "";
$ownerNameError = "";
$cardNumber = "";
$cardNumberError = "";
$expireDate = "";
$expireDateError = "";
$cvvNumber = 0;
$cvvNumberError = "";
$formValid = true;
$btnComfirm = "OK";
if(isset($_COOKIE['role_id']) =='3')
{
    $userRole = true;
    $link = "/login";
}else
{
    $userRole = false;
    $link = "#";
};
if (isset($_COOKIE['id']))
{
    $userId = $_COOKIE['id'];
    $activateCreditCard = getUserCrediCard($userId);
    if ($activateCreditCard[0]['credit_card'] == '1')
    {
        $userActivated = true;
    }else
    {
        $userActivated = false;
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // validation owner name
            if (empty($_POST['ownerName']))
            {
                $ownerNameError = "Please enter the owner name";
                $colorErrorOwnerName  = true;
                $formValid = false;
            }else
            {
                $ownerName = $_POST['ownerName'];
            }
            // Validation credit card numbers
            if (empty($_POST['cardNumber']))
            {
                $cardNumberError = "Please enter card numbers";
                $colorErrorCreditCardNumber  = true;
                $formValid = false;
            }else
            {
                $cardNumber = $_POST['cardNumber'];
                if (strlen($cardNumber) < 19)
                {
                    $cardNumberError = "Invalid card numbers";
                    $colorErrorCreditCardNumber  = true;
                    $formValid = false;
                }
            }
            // Validation  Expire date 
            if (empty($_POST['expireDate']))
            {
                $expireDateError = "Please enter expire date";
                $colorErrorExpireDate  = true;
                $formValid = false;
            }else
            {
                $expireDate = $_POST['expireDate'];
                if (strlen($expireDate) < 5)
                {
                    $expireDateError = "Invalid expire date";
                    $colorErrorExpireDate  = true;
                    $formValid = false;
                }
            }
            // Validation CVV numbers 
            if (empty($_POST['cardCvv']))
            {    
                $cvvNumberError = "Please enter CVV numbers";
                $colorErrorCvvNumber = true;
                $formValid = false;
            }else
            {
                $cvvNumber = $_POST['cardCvv'];
                if (strlen($cvvNumber) < 3)
                {
                    $cvvNumberError = "Invalid CVV numbers";
                    $colorErrorCvvNumber = true;
                    $formValid = false;
                }
            }
            if($formValid)
            {
                $activated = 1;
                header("Location:/");
                creditCard($userId, $ownerName, $cardNumber, $expireDate, $cvvNumber);
                activateCreditCard($activated, $userId);
            }
        }
    }
} 






