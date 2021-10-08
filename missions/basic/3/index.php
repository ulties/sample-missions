<?php require __DIR__ . '/../../mission_helper.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Basic 3</title>
    <base href="<?php echo $mission->url() ?>">
</head>
<body>

    <center>
        <b>Basic 3</b>
    </center>

    <br><br>

    This time Mark remembered to upload the password file,
    but there were deeper problems than that.

    <br>

    <center>
        <form action="form.php" method="post">
            <input name="file" value="password.php" type="hidden">
            <input name="password" type="password">

            <br><br>

            <input value="submit" name="submit" type="submit">
        </form>
    </center>

</body>
</html>
