<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge,chrome=1.0,safari">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../img/logo.png" />

    <title>Swertres</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .animate-fade {
            animation: fadeIn 1s ease-in-out;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var container = document.querySelector(".container");
            container.classList.add("animate-fade");
        });
    </script>
</head>

<body>
    <div class="card">
        <div class="card-header d-inline-block mt-1">
            <div class="d-flex justify-content-center">
                <img src="../img/logo.png" alt="" class="img-fluid mb-3" style="width:120px">
            </div>
            <h3 class="text-center w-100">User Login</h3>
        </div>
        <div class="card-body">
            <form action="login.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary w-100" value="Login">
            </form>
            <div class="d-flex justify-content-end">
                <span>Don't have an account yet? Click <a href="register.php">here</a></span>
            </div>
        </div>
        <div class="card-footer text-center">
            &copy; Technical Myles
        </div>
    </div>
</body>

</html>
