<?php
session_start();
// Connect database
include "./config/db.php";


// Delete Admin script
if (isset($_POST['delete_admin_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM tbl_admin WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Admin account deleted";
    }else{
        $_SESSION['error_message'] = "Error deleting admin account".mysqli_error($conn);
    }

}