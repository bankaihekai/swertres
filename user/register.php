<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../img/logo.png" />

    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

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

            var form = document.querySelector("form");
            form.addEventListener("submit", function(event) {
                var mobileNumberInput = document.getElementById("mnumber");
                var mobileNumber = mobileNumberInput.value;

                if (!/^09\d{9}$/.test(mobileNumber)) {
                    event.preventDefault();
                    alert("Mobile number must start with 09 and have a maximum of 11 digits.");
                }
            });
        });
    </script>
</head>

<body>
    <div class="card">
        <div class="card-header d-inline-block mt-1">
            <div class="d-flex justify-content-center">
                <img src="../img/logo.png" alt="" class="img-fluid mb-3" style="width:120px">
            </div>
            <h3 class="text-center w-100">Registration Form</h3>
        </div>
        <div class="card-body">
            <form action="login.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" id="fname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" id="lname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="mnumber" class="form-label">Mobile Number</label>
                    <input type="text" id="mnumber" class="form-control" placeholder="09xxxxxxxxxxx">
                </div>
                <input type="submit" class="btn btn-primary w-100" value="Sign-up">
                <div class="text-end">
                    Go back to <a href="login.php">Login</a>
                </div>
            </form>
        </div>
        <div class="card-footer text-center">
            <small>&copy; Technical Myles</small>
        </div>
    </div>
</body>

</html>