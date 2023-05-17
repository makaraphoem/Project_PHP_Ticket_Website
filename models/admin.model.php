<?php
require "database/database.php";
function register(string $username, string $password, string  $email, $date_of_birth, string  $role_id ) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (name,email, password,date_of_birth,role_id) values (:name, :email, :password, :date_of_birth, :role_id)");
    $statement->execute([
        ':name' => $username,
        ':email' => $email,
        ':password' => $password,
        ':date_of_birth' => $date_of_birth,
        ':role_id' => $role_id,
    ]);
    return $statement->rowCount() > 0;
}
function getUserData() : array
{
   global $connection;
   $statement = $connection->prepare("select * from users");
   $statement->execute();
   return $statement->fetchAll();
}
//  ---------------DELETE USER
function deleteUser($id)
{
    global $connection;
    $statement = $connection -> prepare("DELETE from users where id = $id ");
    $statement->execute();
}
// --------------------EDIT USER
function getUserById($id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from users where id = :id");
    $statement->execute([
        ':id'=>$id
    ]);
    return $statement -> fetch(PDO::FETCH_ASSOC);
}
// ------------------ROLE OF SELLRT
function getRowById($id) : array
{
    global $connection;
    $statement = $connection->prepare("select name from roles where id = :id");
    $statement->execute([
        ':id'=>$id
    ]);
    return $statement -> fetch(PDO::FETCH_ASSOC);
}
// -------------------EDIT USER
function editShow(int $id,string $username, string $email, string $password, string $role_id, string $date_of_birth) :bool{
    global $connection;
    $statement = $connection->prepare("update users set name = :name ,email = :email,password=:password,role_id=:role_id, date_of_birth=:date_of_birth where id= :id ");
    $statement->execute([
        ':name' => $username,
        ':email'=>$email,
        ':password'=>$password,
        ':role_id'=>$role_id,
        ':id' => $id,
        ':date_of_birth' => $date_of_birth
    ]
    );
    return $statement->rowCount() > 0;
}



