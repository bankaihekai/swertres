<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge,chrome=1.0,safari">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log-in Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

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
    <div class="container vh-100 w-100">
        <div class="row justify-content-center h-100">
            <div class="card">
                <div class="card-header d-inline-block mt-1">
                    <div class="d-flex justify-content-center">
                        <img src="../img/logo.png" alt="" class="img-fluid mb-3" style="width:120px">
                    </div>
                    <h3 class="text-center w-100">Admin Login</h3>
                </div>
                <div class="card-body">
                    <form action="loginval.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary w-100" value="Login">
                    </form>
                    <?php
                    if (isset($_GET['message'])) {
                        echo $_GET['message'];
                    }
                    ?>
                </div>
                <div class="card-footer text-center">
                    <small>
                        &copy; Technical Myles</small>
                </div>
            </div>
        </div>
    </div>
</body>

</html>