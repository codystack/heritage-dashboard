<?php
session_start();
// Connect database
include "./config/db.php";

$id = $_GET['id'];


// Delete staff script
if (isset($_POST['delete_staff_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM staff WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Staff account deleted 👍";
        header('Location: staff');
        exit(0);
    }else{
        $_SESSION['error_message'] = "Please Delete other records linked to this user.";
        header('Location: staff');
        exit(0);
    }

}