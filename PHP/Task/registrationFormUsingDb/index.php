<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Create Account</h2>
                        <form action="connection.php" id="form" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label><br><br>
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="Enter your name">
                                <small class="form-text text-danger" id="username-error"></small>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label><br><br>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter your email">
                                <small class="form-text text-danger" id="email-error"></small>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label><br><br>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Create password">
                                <small class="form-text text-danger" id="password-error"></small>
                            </div>
                            <div class="mb-3">
                                <label for="password2" class="form-label">Re-Enter Password</label><br><br>
                                <input type="password" name="password2" id="password2" class="form-control"
                                    placeholder="Re-enter password">
                                <small class="form-text text-danger" id="password2-error"></small>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script src="formValidation.js"></script>
</body>

</html>

