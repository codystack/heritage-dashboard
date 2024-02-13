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
            $_SESSION['success_message'] = "New Admin Account Created";
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

    $check_query = "SELECT * FROM tbl_settings WHERE id='$id'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Setting Already Exist!";
    }else {
        
        $query = "INSERT INTO tbl_settings (title, value) 
  			        VALUES('$title', '$value')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "New Setting Added";
            echo "<meta http-equiv='refresh' content='3; URL=settings'>";
        }else {
            $_SESSION['error_message']    = "Error adding new setting".mysqli_error($conn);
        }
    }
}



//New Contact Request
if (isset($_POST['add_new_contact_btn'])) {

    $staffID = $conn->real_escape_string($_POST['staffID']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $country = $conn->real_escape_string($_POST['country']);
    $city = $conn->real_escape_string($_POST['city']);
    $address = $conn->real_escape_string($_POST['address']);
    $events = $conn->real_escape_string($_POST['events']);

    $check_user_query = "SELECT * FROM contact WHERE companyName='companyName' && email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Contact Already Exist!";
    }else {
        // Finally, register contact if there are no errors in the form
        $query = "INSERT INTO contact (staffID, companyName, phone, email, country, city, address, events) 
  			        VALUES('$staffID', '$companyName', '$phone', '$email', '$country', '$city', '$address', '$events')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['email'] = $email;
            $_SESSION['companyName'] = $companyName;
            $_SESSION['success_message'] = "Contact Created";
            echo "<meta http-equiv='refresh' content='5; URL=contacts'>";
        }else {
            $_SESSION['error_message']    = "Error creating contact".mysqli_error($conn);
        }
    }
}



//New Quote Request
if (isset($_POST['add_new_quote_btn'])) {

    $quoteRef = 'QREF'.rand(1000, 9999);
    $staffID = $conn->real_escape_string($_POST['staffID']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $bumpInDate = $conn->real_escape_string($_POST['bumpInDate']);
    $bumpOutDate = $conn->real_escape_string($_POST['bumpOutDate']);
    $standSize = $conn->real_escape_string($_POST['standSize']);
    $standNumber = $conn->real_escape_string($_POST['standNumber']);
    $venue = $conn->real_escape_string($_POST['venue']);
    $selectExpo = $conn->real_escape_string($_POST['selectExpo']);
    $salesComment = $conn->real_escape_string($_POST['salesComment']);
    $saleOwner = $conn->real_escape_string($_POST['saleOwner']);
    $balanceDue = $conn->real_escape_string($_POST['balanceDue']);
    $depositRequired = $conn->real_escape_string($_POST['depositRequired']);
    $jobDeadline = $conn->real_escape_string($_POST['jobDeadline']);
    $depositDeadline = $conn->real_escape_string($_POST['depositDeadline']);
    $artworkDeadline = $conn->real_escape_string($_POST['artworkDeadline']);
    $type = $conn->real_escape_string($_POST['type']);
    $briefDescription = $conn->real_escape_string($_POST['briefDescription']);
    $quotedHours = $conn->real_escape_string($_POST['quotedHours']);
    $deliveryDeadline = $conn->real_escape_string($_POST['deliveryDeadline']);
    $price = $conn->real_escape_string($_POST['price']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Finally, register contact if there are no errors in the form
    $query = "INSERT INTO quote (quoteRef, staffID, companyName, bumpInDate, bumpOutDate, standSize, standNumber, venue, selectExpo, salesComment, saleOwner, balanceDue, depositRequired, jobDeadline, depositDeadline, artworkDeadline, type, briefDescription, quotedHours, deliveryDeadline, price, subject, message) 
                VALUES('$quoteRef', '$staffID', '$companyName', '$bumpInDate', '$bumpOutDate', '$standSize', '$standNumber', '$venue', '$selectExpo', '$salesComment', '$saleOwner', '$balanceDue', '$depositRequired', '$jobDeadline', '$depositDeadline', '$artworkDeadline', '$type', '$briefDescription', '$quotedHours', '$deliveryDeadline', '$price', '$subject', '$message')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        $_SESSION['success_message'] = "Quote Created";
        echo "<meta http-equiv='refresh' content='5; URL=quotes'>";
    }else {
        $_SESSION['error_message']    = "Error creating quote".mysqli_error($conn);
    }
}




//New Event Request
if (isset($_POST['add_new_event_btn'])) {

    $staffID = $conn->real_escape_string($_POST['staffID']);
    $entryUser = $conn->real_escape_string($_POST['entryUser']);
    $eventName = $conn->real_escape_string($_POST['eventName']);
    $eventDate = $conn->real_escape_string($_POST['eventDate']);
    $population = $conn->real_escape_string($_POST['population']);
    $location = $conn->real_escape_string($_POST['location']);
    $standNumber = $conn->real_escape_string($_POST['standNumber']);

    // Finally, enter event if there are no errors in the form
    $query = "INSERT INTO events (staffID, entryUser, eventName, eventDate, population, location, standNumber) 
                VALUES('$staffID', '$entryUser', '$eventName', '$eventDate', '$population', '$location', '$standNumber')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        $_SESSION['success_message'] = "Event Added Successfully";
        echo "<meta http-equiv='refresh' content='5; URL=events'>";
    }else {
        $_SESSION['error_message']    = "Error adding event".mysqli_error($conn);
    }
}




//New TeleReport Request
if (isset($_POST['add_new_telereport_btn'])) {

    $staffID = $conn->real_escape_string($_POST['staffID']);
    $entryUser = $conn->real_escape_string($_POST['entryUser']);
    $decisionMaker = $conn->real_escape_string($_POST['decisionMaker']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $space = $conn->real_escape_string($_POST['space']);
    $size = $conn->real_escape_string($_POST['size']);
    $expo = $conn->real_escape_string($_POST['expo']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $requirements = $conn->real_escape_string($_POST['requirements']);

    // Finally, enter event if there are no errors in the form
    $query = "INSERT INTO teleReport (staffID, entryUser, decisionMaker, companyName, space, size, expo, email, phone, requirements) 
                VALUES('$staffID', '$entryUser', '$decisionMaker', '$companyName', '$space', '$size', '$expo', '$email', '$phone', '$requirements')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        $_SESSION['success_message'] = "Report Added Successfully";
        echo "<meta http-equiv='refresh' content='5; URL=tele-report'>";
    }else {
        $_SESSION['error_message']    = "Error adding report".mysqli_error($conn);
    }
}