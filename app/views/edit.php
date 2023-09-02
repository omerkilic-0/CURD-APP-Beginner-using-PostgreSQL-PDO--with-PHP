<?php
include 'partials/header.php';
include '../controller/edit.php';
?>

<div class="container">
    <h1>Edit Client</h1>
    <form action="" method="post">
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($name) ? $name : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>"> <?php echo isset($emailErr) ? $emailErr : ""; ?>
                    </td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>
                        <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $phone; ?>">
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>
                        <input type="text" name="address" id="address" class="form-control" value="<?php echo isset($address) ? $address : ''; ?>">
                        <?php echo isset($addressErr) ? $addressErr : ""; ?>
                    </td>
                </tr>
                </tbody>
        </table>
        <input type="submit" value="Submit" name="submit" class="btn btn-primary" style="width: 49%;">
        <input type="submit" value="Cancel" name="cancel" class="btn btn-secondary" style="width: 49%;">
    </form>
</div>

<?php include 'partials/footer.php'; ?>