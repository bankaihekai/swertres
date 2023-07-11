<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log-in Form</title>
    <link rel="shortcut icon" href="../img/logo.png" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="card">
        <div class="card-header d-inline-block mt-1">
            <div class="d-flex justify-content-center">
                <img src="../img/logo.png" alt="" class="img-fluid mb-3" style="width:120px">
            </div>
            <h3 class="text-center w-100">Admin</h3>
        </div>
        <div class="card-body">
            <form action="loginval.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <input type="submit" name="submit" class="btn btn-primary w-100" value="Login">
            </form>
            <div class="d-flex justify-content-end mt-2">
                <a href="../index.php" class="text-decoration-none text-secondary">Back</a>
            </div>
        </div>
        <div class="card-footer text-center">
            <small>&copy; Technical Myles</small>
        </div>
    </div>
</body>

</html>