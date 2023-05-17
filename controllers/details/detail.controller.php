
<?php
require 'models/detail.model.php';
require 'models/form.edit.model.php';
date_default_timezone_set('Asia/bangkok');
$day =  date("d");
$month =  date("m");
$year =  date("y");
$timeNow = date("h:i");
$movie_id = $_GET['id'];
$showDatas = getShowData();
$venuesDatas = getVenueData();
$description = '';
$id = '';
$language = '';
$subtitle = '';
$time = '';
$trailer = '';
$poster = '';
foreach($showDatas as $showData)
{
    if ($movie_id== $showData['id']) 
    {
        $description = $showData['description'];
        $id = $showData['id'];
        $language = $showData['language'];
        $subtitle = $showData['subtitle'];
        $time = $showData['running_time'];
        $trailer = $showData['trailer'];
        $movie_name= $showData['title'];
        $img = $showData['img'];
    }
}
$date_time = getDatetime($id);
$type = type($id);
$venus = getVenuebyId($id);

