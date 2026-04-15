<?php include '../includes/header.php';?>

<div class="container mt-5">
    <h2>Login</h2>
    <form action="">
        <div>
            <label for="Email:">Email:</label>
            <input type="email" class="form-control" id="Email" name="Email" required>
        </div>
        <div>
            <label for="Password:">Password:</label>
            <input type="password" class="form-control" id="Password" name="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

<?php include '../includes/footer.php'; ?>