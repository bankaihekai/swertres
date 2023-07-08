<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../img/logo.png" />

    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark p-2">
        <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
            <img src="../img/logo.png" alt="" style="width:30px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-center" aria-current="page" href="user-index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-center" href="#" data-bs-toggle="modal" data-bs-target="#homeModal">Cashier Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-center" href="#">Transaction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-center" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>

    <div class="container">
        <h3>Main Content</h3>
        <p>hello testing swertres home page hello</p>
    </div>

    <div class="modal fade" id="homeModal" tabindex="-1" role="dialog" aria-labelledby="homeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="homeModalLabel">About Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <table>
                            <tr>
                                <td>
                                    <ol>
                                        <li>Cashier Profile Info</li>
                                        <li>Can Read, Update</li>
                                    </ol>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
