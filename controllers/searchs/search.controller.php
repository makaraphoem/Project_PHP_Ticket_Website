<?php
function input($data) : string 
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;   
}
if (!empty($_GET['search']))
{
    $search = input($_GET['search']);
}else
{
    $search = '';
}
$query= 'select * from shows';
if(isset($_GET['category'])){
        if($_GET['category']=='Movies'){
            $query = 'select * from shows where type_id=1';
            if($search != ''){
                $query = "select * from shows where title like '%{$search}%' and type_id=1 ";
            }
        }
        elseif($_GET['category']=='Concerts'){
            $query = 'select * from shows where type_id=2';
            if($search != ''){
                $query = "select * from shows where title like '%{$search}%' and type_id=2 ";
            }
        }
        else{
            $query = "select * from shows where title like '%{$search}%'";
        }
}
elseif($search != '')
{
    $query = "select * from shows where title like '%{$search}%'";
}

require 'models/search.model.php';
$showResult = getShows($query);