<?php
require 'database/database.php';

function getShows(string $query) : array
{
    global $connection;
    $statement = $connection->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);

}
