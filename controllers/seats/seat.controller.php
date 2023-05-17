<?php
require 'models/detail.model.php';
require 'views/seats/seat.view.php';



$showDatas = getShowData();
$day =  date("d");
$month =  date("m");
$year =  date("y");
$timeNow = date("h:i");
// $movie_id = $_GET['id'];

// foreach($showDatas as $showData)
// {
//     if ($movie_id== $showData['id']) 
//     {
//         $id = $showData['id'];
//         $title= $showData['title'];
//         $runTime = $showData['running_time'];
//         $language = $showData['language'];
//         $img = $showData['img'];
//     }
// }