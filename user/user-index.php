<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../img/logo.png" />

    <title>Home</title>

    <script src="https://kit.fontawesome.com/fcde2d5511.js" crossorigin="anonymous"></script>
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
                    <a class="nav-link  text-center" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-2">
        <div class="">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs mb-3 d-flex justify-content-between" id="ex-with-icons" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="main-link nav-link active" id="ex-with-icons-tab-1" data-bs-toggle="pill" href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1" aria-selected="true">
                        <i class="fas fa-money-bill-wave fa-fw me-2"></i>Bet
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="main-link nav-link" id="ex-with-icons-tab-2" data-bs-toggle="pill" href="#ex-with-icons-tabs-2" role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false">
                        <i class="fas fa-history fa-fw me-2"></i>History
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="main-link nav-link" id="ex-with-icons-tab-3" data-bs-toggle="pill" href="#ex-with-icons-tabs-3" role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false">
                        <i class="fas fa-search fa-fw me-2"></i>Search
                    </a>
                </li>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex-with-icons-content">
                <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
                    <div class="">
                        <!-- <section class="d-flex justify-content-center">
                            <button id="add-transaction-btn" class="btn btn-primary">Add Transaction</button>
                        </section> -->
                        <!-- <section id="transaction-form" class="mt-3" style="display: none;"> -->
                        <section id="transaction-form" class="mt-3">

                            <div class="card mt-4 border-none">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span id="total-bets"><b>Total Bets:</b> 1</span>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <div class="pe-2">
                                                <a href="user-index.php" class="btn btn-primary">
                                                    <i class="fas fa-sync-alt"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0)" class="add-more-form btn btn-primary">Add Bet</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <form action="#" method="POST">
                                        <div class="main-form mt-3 d-flex justify-content-center">
                                            <table>
                                                <tr>
                                                    <th colspan="4" class="text-center">Customer Name</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input type="text" name="firstname" class="form-control" placeholder="Firstname" required>
                                                    </td>
                                                    <td colspan="2">
                                                        <input type="text" name="lastname" class="form-control" placeholder="Lastname" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">&nbsp;</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th>Number</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Remove</th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="text" name="number[]" class="form-control" required placeholder="000-999" maxlength="3">
                                                    </td>
                                                    <td>
                                                        <select name="type[]" class="form-control user-inputs" required>
                                                            <option value="Straight">Straight</option>
                                                            <option value="Ramble">Ramble</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="amount[]" class="form-control" required placeholder="&#8369; 0.0">
                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr>
                                                <tbody class="paste-new-forms">

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="text-end">Total: &#8369;</td>
                                                        <td class="text-start">
                                                            <span class="d-flex align-items-center">
                                                                <input type="text" class="form-control user-inputs" id="total-amount" name="total-amount" value="0.00" disabled>
                                                            </span>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tfoot>

                                            </table>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-center">
                                            <div class="">
                                                <button type="submit" name="save_multiple_data" id="save_multiple_data" class="btn btn-success">Save Bet</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </section>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
                    <h4>History</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla nisi velit, at consectetur enim rutrum in. Nullam vehicula massa ipsum.</p>
                </div>
                <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel" aria-labelledby="ex-with-icons-tab-3">
                    <h4>Search</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla nisi velit, at consectetur enim rutrum in. Nullam vehicula massa ipsum.</p>
                </div>
            </div>
            <!-- Tabs content -->
        </div>
    </div>

    <div class="modal fade" id="homeModal" tabindex="-1" role="dialog" aria-labelledby="homeModalLabel" aria-hidden="true">
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

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>