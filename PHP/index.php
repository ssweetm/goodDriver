<!DOCTYPE html>

<html>

<?php
/**
 * Created by PhpStorm.
 * User: Sadie
 * Date: 8/31/2018
 * Time: 8:52 AM
 */
include_once "../PHP?database.php";
include_once "../PHP/navbar.php";
$db = new DatabaseConnection();
$user = (empty($_SESSION['username'])) ? "" : $db->connection->real_escape_string($_SESSION['username']);
?>

<head>
    <title>MyGDIP</title>
    <link rel="stylesheet" href="../CSS/general.css">
    <link rel="stylesheet" href="../CSS/index.css">
</head>

<body>
    <!-- Index Header Content -->
    <div class = "header">
        <!--TODO -->
    </div>

    <!-- Index Page Content -->
    <div class = "flex-container">
        <!-- TODO -->

        <!-- Footer Content -->
        <div class="footer">
            <h6><b>Brought to you by</b><br><i>Jake Aufschlager, Mitchell Bowser, Patrick Coutu, and Sadie Sweetman</i></h6>
        </div>

    </div>

</body>

</html>