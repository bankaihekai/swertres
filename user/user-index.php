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
                    <div>
                        <section class="d-flex justify-content-center">
                            <button id="add-transaction-btn" class="btn btn-primary">Add Transaction</button>
                        </section>
                        <section id="transaction-form" class="mt-3" style="display: none;">
                            <p>agayyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy</p>
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

    <script>
        var addTransactionBtn = document.getElementById('add-transaction-btn');
        var transactionForm = document.getElementById('transaction-form');

        addTransactionBtn.addEventListener('click', function() {
            if (transactionForm.style.display === 'none') {
                transactionForm.style.display = 'block';
                addTransactionBtn.classList.remove('btn-primary');
                addTransactionBtn.classList.add('btn-danger');
                addTransactionBtn.textContent = 'Close Transaction';
            } else {
                transactionForm.style.display = 'none';
                addTransactionBtn.classList.remove('btn-danger');
                addTransactionBtn.classList.add('btn-primary');
                addTransactionBtn.textContent = 'Add Transaction';
            }
        });
    </script>
</body>

</html>