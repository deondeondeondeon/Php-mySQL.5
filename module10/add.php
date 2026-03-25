<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <?php 
        include ' config.php';
        $sql = "SELECT * FROM users";
        $getUsers = $conn->prepare($sql);
        $getUsers->execute();
        $users = $getUsers->fetchALL(PDO::FETCH_ASSSOC);

    ?>
    <br><br>
    <h1>Users Dashboard</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['last_name']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="add_user.php">Add User</a>
    
</body>
</html>