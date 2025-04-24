
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Registrácia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
<style>
    body {
        background-color: #111;
        color: #f90;
        font-family: Arial, sans-serif;
    }
    .card {
        background-color: #222;
        border: 1px solid #f90;
    }
    .form-label {
        color: #f90;
    }
    .btn-primary {
        background-color: #f90;
        border-color: #f90;
        color: #000;
    }
    .btn-primary:hover {
        background-color: #e68a00;
        border-color: #e68a00;
    }
    .btn-success {
        background-color: #f90;
        border-color: #f90;
        color: #000;
    }
    .btn-success:hover {
        background-color: #e68a00;
        border-color: #e68a00;
    }
    a {
        color: #ffcc66;
    }
</style>

</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4" style="color: orange;">Registrácia</h3>
            <form action="register_process.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Emailová adresa</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Heslo</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Registrovať sa</button>
            </form>
            <p class="text-center mt-3" style="color: orange;">
                Máte už účet? <a href="login.php">Prihláste sa</a>
            </p>
        </div>
    </div>
</body>
</html>
