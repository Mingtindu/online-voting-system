<?php
include("connect.php");

// Retrieve form data
$name = $_POST['name'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$password = $_POST['password'] ?? '';
$cpassword = $_POST['cpassword'] ?? '';
$address = $_POST['address'] ?? '';
$image = $_FILES['photo']['name'] ?? '';
$tmp_name = $_FILES['photo']['tmp_name'] ?? '';
$role = $_POST['role'] ?? '';

// Check if passwords match
if ($password == $cpassword) {
    move_uploaded_file($tmp_name, "../uploads/$image");

    // Insert user data into the database
    $insert = mysqli_prepare($connect, "INSERT INTO USER1 (name, mobile, address, password, photo, role, status, votes) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$insert) {
        die('Error: ' . mysqli_error($connect)); // Handle database connection error
    }

    // Set additional parameters
    $status = 0;
    $votes = 0;

    // Bind parameters
    mysqli_stmt_bind_param($insert, 'ssssssii', $name, $mobile, $address, $password, $image, $role, $status, $votes);

    // Execute the statement
    if (mysqli_stmt_execute($insert)) {
        echo "<script>alert('Registration Successful');</script>";
        echo "<script>window.location='../';</script>";
    } else {
        echo "<script>alert('Error occurred while registering');</script>";
        echo 'Error: ' . mysqli_stmt_error($insert); // Handle SQL execution error
    }

    // Close the prepared statement
    mysqli_stmt_close($insert);
} else {
    echo "<script>alert('Password and Confirm Password do not match'); window.location='../routes/register.html';</script>";
}
?>
