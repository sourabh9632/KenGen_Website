<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = 'kengen_database1';

$conn = new mysqli($server_name, $username, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    $sql_query = "INSERT INTO contact_detail (name, email, address, phoneNumber, message)
                  VALUES ('$name', '$email', '$address', '$phoneNumber', '$message')";

    if (mysqli_query($conn, $sql_query)) {
        echo '<script>alert("Thank you for your feedback Our Team Will Get Back To You Soon!");</script>';
        echo '<script>window.location.href = "index.html";</script>';
    } else {
        echo '<script>alert("Error: ' . $sql_query . ' ' . mysqli_error($conn) . '");</script>';
    }

    mysqli_close($conn);
}
?>
