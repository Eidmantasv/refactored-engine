<?php


try {
    $username = 'Eidmantas';
    $pass = 'marsalas';

    $dht = new PDO(
        'mysql:host=localhost:3306;dbname=eidmantas',
        $username,
        $pass
    );
    echo 'connected?';
} catch (PDOException $exception) {
    echo 'Error: ' . $exception->getMessage();
}

$sql = "SELECT * FROM users ";
$query = $dht->prepare($sql);
$query->execute();
echo '<pre>';
print_r($query->fetchAll(PDO::FETCH_ASSOC));
echo '</pre>';






$userId = 1;
$sql1 = "SELECT * FROM users WHERE id = :user_id /* and email = :email */ ";

$query1 = $dht->prepare($sql1);
$query1 -> bindValue(
    ':user_id', $userId,
    PDO::PARAM_INT
);

$query1->execute();
echo '<pre>';
print_r($query1->fetchAll(PDO::FETCH_OBJ));
echo '</pre>';

$email = 'new@mailas.com';

$query2 = $dht->prepare(
    "SELECT users.*, user_addresses.address
    FROM users
    LEFT JOIN user_addresses 
    ON users.id = user_addresses.user_id
    WHERE users.id = :user_id
    OR users.email = :email
");

$query2->bindValue(
    ':user_id',
    $userId,
    PDO::PARAM_INT
);

$query2->bindValue(
    ':email',
    $email
);

$query2->execute();

echo '<pre>';
print_r($query2->fetchAll(PDO::FETCH_OBJ));
echo '</pre>';

//ORDER BY field_name ASC (ascending) / DSC (descending

$query3 = $dht->prepare("SELECT *
    FROM towns 
    ORDER BY title ASC, id DESC
    ");

$query3->execute();

echo '<pre>';
echo '<hr>';
print_r($query3->fetchAll(PDO::FETCH_OBJ));

echo '</pre>';