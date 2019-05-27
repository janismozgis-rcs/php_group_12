<?php

require_once 'helper.php';

$errors = [];

if (!isset($_POST['email'])) {
    $errors['email'][] = 'Email is required';
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'][] = 'Email is not a valid email address';
}

if (strlen($_POST['password']) < 8) {
    $errors['password'][] = 'Password must be at least 8 symbols long';
}

if ($_POST['password'] != $_POST['password2']) {
    $errors['password'][] = 'Passwords do not match';
}

if (count($errors) > 0) {
    header("Location: index.php?page=registration");
    exit;
}
