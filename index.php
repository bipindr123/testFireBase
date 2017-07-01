<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FireBase test</title>
</head>
<body>
<h1>ENTER DATA</h1>
<br>
<form method="post" action="welcome.php ">
    Name: <input type="text" name="name"  pattern="^[a-zA-Z ]*$" required>
    <br><br>
    Email: <input type="email" name="email" required>
    <br><br>
    Phone: <input type="text" name="phone" pattern="^[0-9]{10}$" required>
    <br><br>
    <input type="submit" name="submit">
</form>

</body>

</html>
