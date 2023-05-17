<?php 
require 'models/form.create.show.model.php';
require 'models/seller.model.php';
require 'models/detail.model.php';
// ========================================================================================= //

$titleError ="";
$title = "";
$descriptionError = "";
$description = "";
$typeIdError = "";
$typeId = "";
$runningTimeError = "";
$runningTime = "";
$languageError = "";
$language = "";
$subtitleError = "";
$subtitle = "";
$imgShowError = "";
$imgShow = "";
$trailerError = "";
$trailer = "";
$dateError = "";
$date = "";
$nameVenueError = "";
$nameVenue = "";
$addressError = "";
$address = "";
$timeError = "";
$time = "";
$formValid = true;
$showId ='';
$dateTimeId = "";
$venueId = "";
$image = "";
$image_tmp_name = "";
$imageFolder = "";
$countFormvalid = 0;
$Todaydate = date('Y-m-d');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{  
        // validation title
        if(empty($_POST["title"])){
            $titleError = "Please enter an title of show";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $title = $_POST["title"];
        }
        // validation description
        if (empty($_POST["description"]))
        {
            $descriptionError = "Please enter description";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $description = $_POST["description"];
        }
          // validation  type id
        if (empty($_POST["type-id"]))
        {
            $typeIdError = "Please enter type id";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $typeId = $_POST["type-id"];
        }
        // validation running time
        if (empty($_POST["running-time"]))
        {
            $runningTimeError = "Please enter running time";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
            $runningTime = $_POST["running-time"];
        }
        // validation language
        if (empty($_POST["language"]))
        {
            $languageError = "Please enter language";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $language = $_POST["language"];
        }
        // validation subtitle
        if (empty($_POST["subtitle"]))
        {
            $subtitleError = "Please enter subtitle";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $subtitle = $_POST["subtitle"];
        }
        // validation image
        if ($_FILES['image']['name'] != '')
        {
            $imgShow = $_FILES['image']['name'];
        }else
        {
            $imgShowError = "Please choose an image";
            $colorErrorName  = true;
            $formValid = false;
        }
        // validation trailer
        if (empty($_POST["trailer"]))
        {
            $trailerError = "Please enter trailer";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
            $trailer = $_POST["trailer"];
        }
        // validation date
        if (empty($_POST["date"]))
        {
            $dateError = "Please enter date";
            $colorErrorName  = true;
            $formValid = false;
        }
        elseif( $_POST["date"]<$Todaydate){
            $dateError = "Date must be today and future";
            $colorErrorName  = true;
            $formValid = false;
            
        }
        else
        {
            $date = $_POST["date"];
        }
        // validation time
        if (empty($_POST["time"]))
        {
            $timeError = "Please enter time";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
            $time = $_POST["time"];
        }

        // validation name venue
        if (empty($_POST["name-venue"]))
        {
            $nameVenueError = "Please enter name venue";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
            $nameVenue = $_POST["name-venue"];
        }

        // validation time
        if (empty($_POST["address"]))
        {
            $addressError = "Please enter address";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
            $address = $_POST["address"];
        }

        if ((isset($_POST['upload'])))
        {
            $image = $_FILES['image']['name'];
            $image_tmp_name=$_FILES['image']['tmp_name'];
            $imageFolder='assets/shows/'. $image;
            move_uploaded_file($image_tmp_name, $imageFolder);
            if(!isset($_GET['action'])){
                if($formValid){
                    $user_email = $_COOKIE['email'] ;
                    $sellerId = getUserId($user_email);
                    insertDataShow( $title, $description,  $typeId,  $runningTime,  $language,  $subtitle, $imgShow,  $trailer, $sellerId['id']);     
                    $allDataShows = getShowData();
                    foreach($allDataShows as $allDataShow){
                        $showId = $allDataShow['id'];
                    }
                    $countFormvalid += 1;
                }
                if($formValid)
                {
                    insertDateTime( $date, $time);
                    $allDataDatetimes = getDateTimeData();
                    foreach($allDataDatetimes as $allDataDatetime){
                        $dateTimeId = $allDataDatetime['id'];
                    }
                    
                    $countFormvalid +=1;
                }
                if($formValid)
                {
                    $venueId = $_POST['name-venue'];
                    $countFormvalid +=1;
                }
                if($countFormvalid == 3){
                    insertShowDateTime($showId,  $dateTimeId);
                    insertDetailData($showId,   $venueId );
                    header("Location:/seller");
                }
            }
            else{
                if($formValid){
                    editShow( $_GET['showId'],$title, $description,  $typeId,  $runningTime,  $language,  $subtitle, $imgShow,  $trailer); 
                    header("Location:/seller");

                }
            }
                
               
        }        
}







