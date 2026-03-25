<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <a href="index.php">Dashboard</a>
    <h1>Add User</h1>
    <form method="POST" action="add_user.php">
       <input type="text" name="name" placeholder="Enter your name"><br>
       <input type="text" name="lastname" placeholder="enter your last name"><br>
       <input type="text" name="email" placeholder="enter your email"><br>
       <button type="submit">Add User</button>
    </form>
</body>
</html>