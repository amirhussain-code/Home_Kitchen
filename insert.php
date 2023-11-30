<?php
# -- this is insert.php --

/**
 * The follwing Condition checks whether a client requested the insert.php through
 * the POST method with the name, email,  phone, date, cnic and time
 * 
 * name, email, phone, date, cnic nad time  - You can also see these in the HTML Form (index.html) -
 * These are keys to access the actual data provided by a user.
 */
// if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['cnic']) && isset($_POST['time'])) :
if($_POST)
{
    # Database Connection my_test_db is the Database name.
    $db_conn = mysqli_connect("localhost", "root", "", "homekitchen");

    # Assigning user data to variables for easy access later.
    $name = $_POST['name'];
    $age = $_POST['email'];
    $email = $_POST['phone'];
    $date = $_POST['date'];
    $cnic = $_POST['cnic'];
    $time = $_POST['time'];

    # SQL query for Inserting the Form Data into the users table.
    $sql = "INSERT INTO `order` (`name`, `email`, `phone` , `date` , `cnic` , `time`) VALUES ('$name', '$age', '$email' , '$date' , '$cnic' , '$time')";

    # Executing the Above SQL query.
    $query = mysqli_query($db_conn, $sql);

    # Checks that the query executed successfully
    if ($query) {
        header("location : aksdfh.php")
        echo 'Order completed successfully. <a href="./index.html">Go Back</a>';
    } else {
        echo "An error found try again.";
    }
   
}

