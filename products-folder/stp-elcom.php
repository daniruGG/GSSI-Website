<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STP-ELCOM | GSSI Enterprise</title>
    <!-- CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- FOOTER ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- LOGO IMG FOR TITLE BAR -->
    <link rel="icon" type="images/icon" href="../img/logo2.png">
</head>

<body>
    <!-- Navbar  -->
    <?php include_once("products-nav.php"); ?>
    <!-- END NAVBAR -->

    <!-- Wrapper container -->
    <div class="container pb-5" style="padding-top:6rem">
        <div class="row">
            <div class="col my-auto">
                <img src="img/stp-elcom.png" class="gallery-item img-thumbnail" alt="img" style="cursor: pointer; min-width: 350px;">
                <!-- Modal -->
                <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <img src="img/stp-elcom.png" class="modal-img" alt="modal img" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h1 class="mb-3">STP-ELCOM</h1>
                <p class="lead"><u>ALL-IN-ONE</u> WASTEWATER TREATMENT EQUIPMENT</p>
                <ul>
                    <li class="lead my-2">Optimum Suspended Solid Removal</li>
                    <li class="lead my-2">Effective Sludge Production</li>
                    <li class="lead my-2">Clear and Odorless Output</li>
                    <li class="lead my-2">Energy Efficient</li>
                    <li class="lead my-2">Expandable Design and Smaller Footprint</li>
                    <li class="lead my-2">Lesser Concrete Tanks</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mb-5 pb-3 text-center">
        <a href="../products.php" role="button" class="btn btn-secondary">Go back to products</a>
    </div>

    <!-- FOOTER -->
    <?php include_once("products-footer.php"); ?>
    <!-- END FOOTER -->

    <!-- ION ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
    <script src="../js/bootstrap.js"></script>
    <!-- MAIN JS -->
    <script src="../js/main.js"></script>
</body>

</html>