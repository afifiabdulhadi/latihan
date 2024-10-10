<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .forgot-password-container {
            padding: 30px; /* Padding for the form */
            border-radius: 8px; /* Rounded corners */
            background-color: #f8f9fa; /* Light background for contrast */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
        }
        .bg-danger {
            color: white; /* Text color for better visibility */
        }
        h2 {
            margin-bottom: 20px; /* Space below the heading */
        }
        button {
            width: 100%; /* Full width button */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 forgot-password-container">
            <h2 class="text-center bg-danger">Lupa Kata Sandi</h2>
            <form action="reset_password.php" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Link Reset</button>
            </form>
            <div class="text-center mt-3">
                <a href="login.php">Kembali ke Login</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
