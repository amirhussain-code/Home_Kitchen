<?php
include 'sidebar.php';
$conn = mysqli_connect('localhost', 'root', '', 'login');
$query1 = "SELECT * FROM `login` ";
$result1 = mysqli_query($conn, $query1);
?>
   

    <div class="container">
        <div class="header">
            <a href="reg.php"> <button class="btn btn-primary">Add User</button></a>
        </div>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result1)) {
            ?>
            <tr>
                <td>
                    <?php echo $row['name']; ?>
                </td>
                <td>
                    <?php echo $row['username']; ?>
                </td>
                <td>
                    <?php echo $row['email']; ?>
                </td>
                <td>
                    <?php echo $row['passsword']; ?>
                </td>

            </tr>
            <?php
        } ?>
    </table>
    <div>
