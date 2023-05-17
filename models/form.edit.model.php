<?php

function getshowbyId($id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows where id = $id");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getVenuebyId($id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT venues.name, venues.address, venues.id FROM detail right join venues on venues.id = detail.venue_id where show_id=$id;");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function editShow(int $id, string $title, string $description, int $type_id, int $running_time, string $language, string $subtitle, string $img, string  $trailer) :bool{
    global $connection;
    echo $subtitle;
    $statement = $connection->prepare("update shows set title = :title ,img = :img,description=:description,type_id=:type_id,running_time=:running_time,trailer=:trailer,language=:language,subtitle=:subtitle where id= :id ");
    $statement->execute([
        ':title'=>$title,
        ':id' => $id,
        ':img'=>$img,
        ':description'=>$description,
        ':type_id'=>$type_id,
        ':running_time'=>$running_time,
        ':trailer'=>$trailer,
        ':language'=>$language,
        ':subtitle'=>$subtitle
    ]
    );
    return $statement->rowCount() > 0;
}