<?php
session_start();

include './db/db.php';

$errors = array();



if (isset($_POST['register'])) {

    $username = clean_input($_POST['username']);
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);

    if (empty($username)) {
        array_push($errors, 'Username is required');
    }
    if(empty($email)) {
        array_push($errors, 'Email is required');
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Email is badly formatted');
    }
    if (empty($password)) {
        array_push($errors, 'Password is required');
    }

    // Hash password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Process form

    $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $username, $email, $password);
    $process = $stmt->execute();
    if($process) {
        header('Location: login.php');
        $_SESSION['success'] = 'Account created successfully';
    }else{
        $_SESSION['error'] = 'Error creating account';
    }
}

function clean_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);

    return $input;
}

