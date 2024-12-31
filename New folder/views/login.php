<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
    <?php include("../layout/navbar.php") ?>
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-4">Login</h4>
                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                                </div>
                                <div class="d-grid mb-3">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="text-center">
                                    <small>Don't have an account? <a href="./register.php">Sign up</a></small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
