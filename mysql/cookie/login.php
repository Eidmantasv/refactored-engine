<?php
if (isset($_COOKIE['logged_in'])&& $_COOKIE['logged_in'] == true){
    echo "you are logged in";
?>

    <a href="logout.php">Log out</a>


<?php
    //unset($_COOKIE['logged_in']);

    //setcookie('logged_in', false, time -1);
} else {

    ?>


    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" value="">
        <br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" value="">
        <br>
        <input type="submit" name="submit_login" value="prisijungti">
    </form>


    <?php
}
try {
    $username = 'Eidmantas';
    $pass = 'marsalas';

    $dht = new PDO(
        'mysql:host=localhost:3306;dbname=eidmantas',
        $username,
        $pass
    );
//    echo 'connected? arent we?';
} catch (PDOException $exception) {
    echo 'Error: ' . $exception->getMessage();
}

if (isset($_POST['submit_login'])) {
    $sql = "SELECT * 
FROM users
WHERE username = :username AND password = :password";

    $query = $dht->prepare($sql);
    $query->bindValue(':username', $_POST['username']);
    $query->bindValue(':password', md5($_POST['pass']));
    $query->execute();

    $result = $query->fetch(PDO::FETCH_OBJ);

    echo '<pre>';
    print_r($result);
    echo '</pre>';

    if (!empty($result)) {
        setcookie('logged_in', 'true', time() + 86400);
        header('Location: http://etestas.lt/mysql/cookie/login.php');
    }
}