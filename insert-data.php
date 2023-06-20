<?php

$connDB = mysqli_connect('localhost', 'root', 'mysql', 'php-ajax-crud') or die('Connection Faild.');

if (isset($_POST['fname']) || isset($_POST['lname']) || isset($_POST['age']) || isset($_POST['gender']) || isset($_POST['email']) || isset($_POST['country'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = 'male';
    $country = $_POST['country'];

    $query = "INSERT INTO students(fname,lname,age,gender,email,country) VALUES ('$fname', '$lname', $age, '$gender', '$email', '$country')" or die(mysqli_error($connDB));

    $result = mysqli_query($connDB, $query) or die(mysqli_error($connDB));

    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}
