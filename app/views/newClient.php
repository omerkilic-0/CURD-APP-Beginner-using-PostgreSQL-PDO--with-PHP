<?php include 'partials/header.php'; ?>

    <div class="container">
        <h1>New Client</h1>
        <form action="../controller/newClient.php" method="post">
            <table class="table">
                <tbody>
                <tr>
                    <th>Name</th>
                    <td>
                        <input type="text" name="name" id="name" class="form-control">
                        <?php echo isset($nameErr) ? $nameErr : ""; ?>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <input type="email" name="email" id="email" class="form-control">
                        <?php echo isset($emailErr) ? $emailErr : ""; ?>
                    </td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>
                        <input type="text" name="phone" id="phone" class="form-control">
                        <?php echo isset($phoneErr) ? $phoneErr : ""; ?>
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>
                        <input type="text" name="address" id="address" class="form-control">
                        <?php echo isset($addressErr) ? $addressErr : ""; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit" name="submit" class="btn btn-primary" style="width: 49%;">
                        <input type="submit" value="Cancel" name="cancel" class="btn btn-secondary" style="width: 49%;">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>

<?php include 'partials/footer.php'; ?>