<?php
include '../models/connections.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Kullanıcıyı veritabanından sil
    $query = "DELETE FROM users WHERE id = :id";
    $statement = $db->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);

    if ($statement->execute()) {
        header('Location: index.php');
        exit();
    } else {
        echo "An error occurred while deleting the user.";
    }
} else {
    echo "Invalid User ID.";
}
?>
