<?php require __DIR__ . '/../../mission_helper.php';

$password = trim($_POST['password'] ?? '');

// Shows the password, if password field was empty.
if ($password === '') {
    die($mission->makePassword());
}

if($password === $mission->makePassword()) {
    $mission->complete();
}

die('Incorrect password!');
