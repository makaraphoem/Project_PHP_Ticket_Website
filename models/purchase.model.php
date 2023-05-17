<?php
$user_id = isset($_COOKIE['id']) ? $_COOKIE['id'] : 0;
$userCreditCard = getUserCrediCard($user_id);
$creditCardNumbers = getCreditCardData($user_id);

 function creditCard( int $userId, string $ownerName, string $cardNamber, string $expireDate, int $cvvNumber) : bool
 {
    global $connection;
    $statement = $connection->prepare("insert into credit_cards (user_id, name, card_numbers, expire_date, cvv) values (:user_id, :name, :card_numbers, :expire_date, :cvv)");
    $statement->execute([
        ':user_id' => $userId,
        ':name' => $ownerName,
        ':card_numbers' => $cardNamber,
        ':expire_date' => $expireDate,
        ':cvv' => $cvvNumber

    ]);
    return $statement->rowCount() > 0;
}

function activateCreditCard(int $activated, int $userId) : bool
{
    global $connection;
    $statement = $connection->prepare("update users set credit_card = :activated where id = :user_id");
    $statement->execute([
        ':activated' => $activated,
        ':user_id' => $userId
    ]);
    return $statement->rowCount() > 0;
}

function getUserCrediCard(string $user_id) : array
{
    global $connection;
    $statement = $connection->prepare("select credit_card from users where id = :user_id");
    $statement -> execute([
        ':user_id' => $user_id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getCreditCardData(string $user_id) : array
{
    global $connection;
    $statement = $connection->prepare("select card_numbers from credit_cards where user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
};
