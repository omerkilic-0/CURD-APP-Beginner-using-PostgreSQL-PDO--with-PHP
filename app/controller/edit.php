<?php

try {
    include '../models/connections.php';

    if (isset($_GET['id'])) {
        $userId = $_GET['id'];

        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $address = $row['address'];
        } else {
            echo "User not found.";
            exit;
        }

        if (isset($_POST["submit"])) {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $name = $_POST["name"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $address = $_POST["address"];

                $sql = "UPDATE users SET name = :name, email = :email, phone = :phone, address = :address WHERE id = :userId";
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
                $stmt->bindParam(':address', $address, PDO::PARAM_STR);
                $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);

                if ($stmt->execute()) {
                    header("Location: index.php");
                    exit;
                } else {
                    echo "Update failed.";
                }
            }
        }
    } else {
        echo "User ID not specified.";
    }
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
