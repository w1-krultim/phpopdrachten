/**
* User: Tim Krul
* Date: 10-05-2020
* Time: 12:49
* File: opdracht6.1.php
*/
<?php include "../includess/header.php.php"; ?>
    <h1>Log in als gebruiker</h1>
    <form method="post" action="checklogin.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="username"><br>
        <input type="submit" name="verzend" value="verzend">
    </form>
<?php include "../includess/footer.php"; ?>