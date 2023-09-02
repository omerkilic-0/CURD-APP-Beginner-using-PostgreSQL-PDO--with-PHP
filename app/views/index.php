<?php include 'partials/header.php';
include '../models/connections.php';
?>
<div class="container">
    <h1>List Of Client</h1>
    <a href="newClient.php">
        <button type="submit" class="btn btn-primary">New Client</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../models/connections.php';
            if ($result) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>
                    <a href='edit.php?id=" . $row['id'] . "'>
                    <button type='submit' class='btn btn-primary'>Edit</button>
                </a>
                    <a href='../views/delete.php?id=" . $row['id'] . "'>
                        <button type='submit' class='btn btn-danger'>Delete</button>
                    </a>
                </td>
            </tr>";
                }
            } else {
                echo "No records found";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include 'partials/footer.php'; ?>