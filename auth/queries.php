<?php
// Connect database
include "./config/db.php";


//New Admin Query
if (isset($_POST['add_new_admin_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $userName = $conn->real_escape_string($_POST['userName']);
    $password = $conn->real_escape_string($_POST['password']);
    $designation = $conn->real_escape_string($_POST['designation']);
    $picture = $conn->real_escape_string($_POST['picture']);

    $check_user_query = "SELECT * FROM tbl_admin WHERE email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Admin Already Exist!";
    }else {
        // Finally, register admin if there are no errors in the form
        $password = sha1($password);//encrypt the password before saving in the database
        $query = "INSERT INTO tbl_admin (firstName, lastName, userName, email, password, picture, designation, status) 
  			        VALUES('$firstName', '$lastName', '$userName', '$email', '$password', 'assets/img/memoji/memoji-2.svg', '$designation', '1')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Admin Account Created";
            echo "<meta http-equiv='refresh' content='3; URL=new-admin'>";
        }else {
            $_SESSION['error_message']    = "Error creating account".mysqli_error($conn);
        }
    }
}



//New Settings Query
if (isset($_POST['add_new_settings_btn'])) {

    $title = $conn->real_escape_string($_POST['title']);
    $value = $conn->real_escape_string($_POST['value']);

    $check_query = "SELECT * FROM tbl_settings WHERE title='$title'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Setting Already Exist!";
    }else {
        
        $query = "INSERT INTO tbl_settings (title, value) 
  			        VALUES('$title', '$value')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Setting Added";
            echo "<meta http-equiv='refresh' content='3; URL=settings'>";
        }else {
            $_SESSION['error_message']    = "Error adding new setting".mysqli_error($conn);
        }
    }
}



//New Quote Query
if (isset($_POST['add_new_quote_btn'])) {

    $title = $conn->real_escape_string($_POST['title']);
    $link = $conn->real_escape_string($_POST['link']);


    $check_query = "SELECT * FROM tbl_quote WHERE title='$title'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Quote Already Exist!";
    }else {

        $query = "INSERT INTO tbl_quote (title, link) 
  			        VALUES('$title', '$link')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Quote Added";
            echo "<meta http-equiv='refresh' content='3; URL=quotes'>";
        }else {
            $_SESSION['error_message']    = "Error adding quote".mysqli_error($conn);
        }
    }
}


//New Category Query
if (isset($_POST['add_new_category_btn'])) {

    $category = $conn->real_escape_string($_POST['category']);


    $check_query = "SELECT * FROM tbl_categories WHERE category='$category'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Category Already Exist!";
    }else {

        $query = "INSERT INTO tbl_categories (category) 
  			        VALUES('$category')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Category Added";
            echo "<meta http-equiv='refresh' content='3; URL=categories'>";
        }else {
            $_SESSION['error_message']    = "Error adding category".mysqli_error($conn);
        }
    }
}