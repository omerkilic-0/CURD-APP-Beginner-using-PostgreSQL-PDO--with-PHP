<?php
include '../models/connections.php';

$nameErr = $emailErr = $phoneErr = $addressErr = $name = $email = $phone = $address = "";

if (isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $nameErr = '
        <br><div class="alert alert-danger" role="alert">
        Name field cannot be empty!
        </div>
        ';
    } else if (strlen($_POST["name"]) < 5 || strlen($_POST["name"]) >= 20) {
        $nameErr = '
        <br><div class="alert alert-danger" role="alert">
        The namespace must be 5-20 characters!
        </div>
        ';
    } else if (empty($_POST["email"])) {
        $emailErr = '
        <br><div class="alert alert-danger" role="alert">
        Email field cannot be empty!
        </div>
        ';
    } else if (empty($_POST["phone"])) {
        $phoneErr = '
        <br><div class="alert alert-danger" role="alert">
        Phone field cannot be empty!
        </div>
        ';
    } else if (empty($_POST["address"])) {
        $addressErr = '
        <br><div class="alert alert-danger" role="alert">
        Address field cannot be empty!
        </div>
        ';
    } else {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
   
        $sql = "INSERT INTO users (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
        
        $result = $db->query($sql);
        
        if (!$result) {
            echo '
            <br><div class="alert alert-danger" role="alert">
            SQL error: ' . $db->errorInfo()[2] . '
            </div>
            ';
        }
        header('location: ../views/index.php');
    }
}

if (isset($_POST["cancel"])) {
    header('location: ../views/index.php');
}

if (isset($_POST["edit"])) {
    header('location: ../views/index.php');
}
if (isset($_POST["delete"])) {
    header('location: ../views/index.php');
}

include '../views/newClient.php';
