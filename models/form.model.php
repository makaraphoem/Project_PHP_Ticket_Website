
<?php

 function register(string $username, string $password, string  $email,$date_of_birth, $role_id ) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (name,email, password,date_of_birth,role_id) values (:name,:email, :password,:date_of_birth,:role_id)");
    $statement->execute([
        ':name' => $username,
        ':email' => $email,
        ':password' => $password,
        ':date_of_birth' => $date_of_birth,
        ':role_id' => $role_id

    ]);
    return $statement->rowCount() > 0;
}

function getUserData() : array
{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


