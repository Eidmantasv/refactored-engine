<form action="" method="get">
    <label for="name">Enter your name</label>
    <input type="text" name="name" value="">

    <br>
    <label for="lastname">Enter your lastname</label>
    <input type="text" name="lastname" value="">
    <br>
    <input type="submit" value="submit">
</form>


<?php

if (isset($_GET['name'])  && !empty($_POST['name'])) {
    echo "Hello {$_POST['name']}";
}
if (isset($_GET['lastname'])  && !empty($_POST['lastname'])) {
    echo ' ' . $_POST['lastname'];
}