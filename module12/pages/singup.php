<?php include '../includes/header.php';?>

<div class="container mt-5">
    <h2>Sign Up</h2>
    <form action="">
        <div>
            <label for="Name:">Name:</label>
            <input type="text" class="form-control" id="Name" name="Name" required>
        </div>
        <div>
            <label for="Email:">Email:</label>
            <input type="email" class="form-control" id="Email" name="Email" required>
        </div>
        <div>
            <label for="Password:">Password:</label>
            <input type="password" class="form-control" id="Password" name="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>

<?php include '../includes/footer.php'; ?>