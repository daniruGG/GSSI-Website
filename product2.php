<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | GSSI Enterprise</title>
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/variables.css">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- FOOTER ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- LOGO IMG FOR TITLE BAR -->
    <link rel="icon" type="images/icon" href="img/logo2.png">
</head>

<body>
    <!-- NAVBAR -->
    <?php include_once("includes/main-nav.php"); ?>
    <!-- END NAVBAR -->

    <!-- Wrapper container -->
    <div class="container pb-5" style="padding-top:6rem;">
        <div class="row">
            <div class="col-md-12 pb-2 text-center">
                <h1 style="color:#145889">Products</h1>
            </div>
        </div>
        <div class="row">
            <!-- ELECTROCOAGULATION WASTE WATER TREATMENT SOLUTION -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/electrocoagulation.php">
                    <img src="product/img/electrocoagulation.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/electrocoagulation.php" role="button" class="text-uppercase btn btn-link">electrocoagulation wastewater treatment solution
                </a>
            </div>
            <!-- STP-ELCOM -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/stp-elcom.php">
                    <img src="product/img/stp-elcom.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/stp-elcom.php" role="button" class="text-uppercase btn btn-link">stp-elcom</a>
            </div>
            <!-- DUCTING AND ACCESSORIES -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/ducting-and-accessories.php">
                    <img src="product/img/ducting-and-accessories.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/ducting-and-accessories.php" role="button" class="text-uppercase btn btn-link">ducting
                    and accessories
                </a>
            </div>
            <!-- SOLAR POWER GENERATOR -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/solar-power-generator.php">
                    <img src="product/img/solar-power-generator.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/solar-power-generator.php" role="button" class="text-uppercase btn btn-link">solar
                    power generator</a>
            </div>
            <!-- SOLAR PUMP -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/solar-pump.php">
                    <img src="product/img/solar-pump.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/solar-pump.php" role="button" class="text-uppercase btn btn-link">solar pump</a>
            </div>
        </div>
        <div class="text-center py-4">
            <div class="custom-pagination">
                <a href="product.php" class="prev">Previous</a>
                <a href="product.php">1</a>
                <a href="product2.php" class="active">2</a>
                <a href="#" tabindex="-1" class="next page-link disabled text-secondary">Next</a>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <?php include_once("includes/main-footer.php"); ?>
    <!-- END FOOTER -->

    <!-- ION ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>