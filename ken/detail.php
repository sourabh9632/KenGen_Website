<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = 'kengen_database1';

$conn = mysqli_connect($server_name, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $first_name = $_POST['first_name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $institute = $_POST['institute'];
    $message = $_POST['message'];

    $sql_query = "INSERT INTO entry_details (first_name, mobile, email, institute, message)
                  VALUES ('$first_name','$mobile','$email','$institute','$message')";

                    if (mysqli_query($conn, $sql_query)) {
                        echo '<script>alert("Thank you for your feedback Our Team Will Get Back To You Soon!");</script>';
                        echo '<script>window.location.href = "index.html";</script>';
                    } else {
                        echo '<script>alert("Error: ' . $sql_query . ' ' . mysqli_error($conn) . '");</script>';
                    }

    mysqli_close($conn);
}
?>