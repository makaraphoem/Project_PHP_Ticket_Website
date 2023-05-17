
<?php

function getShowData() : array
{
   global $connection;
   $statement = $connection->prepare("select * from shows");
   $statement->execute();
   return $statement->fetchAll(PDO::FETCH_ASSOC);
}
function getVenueData() : array
{
   global $connection;
   $statement = $connection->prepare("select * from venues");
   $statement->execute();
   return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getDatetime($id) : array
{
   global $connection;
   $statement = $connection->prepare("select date_time.date,date_time.time from show_datetime right join date_time on date_time.id = show_datetime.datetime_id where show_id = $id");
   $statement->execute();
   return $statement->fetch(PDO::FETCH_ASSOC);
}

function type($id) : array
{
   global $connection;
   $statement = $connection->prepare("select type_shows.name from shows right join type_shows on shows.type_id = type_shows.id where shows.id = $id ");
   $statement->execute();
   return $statement->fetch(PDO::FETCH_ASSOC);
}
?>


