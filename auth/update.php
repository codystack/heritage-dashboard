<?php
// Connect database
include "./config/db.php";

$id = $_GET['id'];
    

    //Update Admin Query
    if (isset($_POST['update_admin_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
        $firstName = $conn->real_escape_string($_POST['firstName']);
        $lastName = $conn->real_escape_string($_POST['lastName']);
        $userName = $conn->real_escape_string($_POST['userName']);
        $email = $conn->real_escape_string($_POST['email']);
        $designation = $conn->real_escape_string($_POST['designation']);
        $status = $conn->real_escape_string($_POST['status']);


        $sql=mysqli_query($conn,"SELECT * FROM tbl_admin where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_admin SET firstName='$firstName', lastName='$lastName', userName='$userName', email='$email', designation='$designation' WHERE id='$id'");
            $_SESSION['success_message'] = "Admin profile updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=admins'>";
        } else {
            $_SESSION['error_message'] = "Error updating admin profile.".mysqli_error($conn);
        }

    }


    //Update Setting Query
    if (isset($_POST['update_setting_btn'])) {

        $id = $_GET['id'];

        $id = $conn->real_escape_string($_POST['id']);
        $title = $conn->real_escape_string($_POST['title']);
        $value = $conn->real_escape_string($_POST['value']);


        $sql=mysqli_query($conn,"SELECT * FROM tbl_settings where id='$id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE tbl_settings SET title='$title', value='$value' WHERE id='$id'");
            $_SESSION['success_message'] = "Setting updated 👍";
            echo "<meta http-equiv='refresh' content='3; URL=settings'>";
        } else {
            $_SESSION['error_message'] = "Error updating setting.".mysqli_error($conn);
        }

    }