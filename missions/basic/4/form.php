<?php require __DIR__ . '/../../mission_helper.php';

// Email form has been submitted.
if (isset($_POST['submit_email'])) {
    $to = trim($_POST['to']);

    if ($to !== 'skull@hackforums.net') {
        die($mission->makePassword());
    }

    die('Email has been sent.');
}

$password = trim($_POST['password'] ?? '');
if($password === $mission->makePassword()) {
    $mission->complete();
}

die('Incorrect password!');
