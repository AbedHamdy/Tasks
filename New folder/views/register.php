<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Page</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <?php include("../layout/navbar.php") ?>
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-4">Register</h4>
                            <form action="../controller/CreateUserController.php" method="POST">
                                <!-- Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name">
                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                </div>
                                <!-- Salary -->
                                <div class="mb-3">
                                    <label for="salary" class="form-label">Salary</label>
                                    <input type="number" class="form-control" name="salary" id="salary" placeholder="Enter your salary">
                                </div>
                                <!-- Gender -->
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" name="gender" id="gender">
                                        <option value="" disabled selected>Select your gender</option>
                                        <option value="male" selected>Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                                <div class="text-center mt-3">
                                    <small>Already have an account? <a href="./login.php">Login</a></small>
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
