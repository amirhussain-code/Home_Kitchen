<?php
include 'sidebar.php';
$conn = mysqli_connect('localhost', 'root', '', 'homekitchen');
if ($_POST) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo $username."=".$name."=".$email."=".$password;
    $query = "INSERT INTO `users`( `username`, `passsword`, `email`,`name`) VALUES ('$username','$password','$email','$name')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "somthing wrong";
    }
    else{
        header("location: user.php");
    }
}
?>
<div class="container">
    <form action="reg.php" method="post">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        </div>

        <button type="submit" class="btn btn-primary">Registration</button>
    </form>
</div>