<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | GSSI Enterprise</title>
    <!--MAIN HEAD -->
    <?php include_once("includes/head.php") ?>
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
                <a href="products/electrocoagulation.php">
                    <img src="products/img/electrocoagulation.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="products/electrocoagulation.php" role="button" class="text-uppercase btn btn-link">electrocoagulation wastewater treatment solution
                </a>
            </div>
            <!-- STP-ELCOM -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="products/stp-elcom.php">
                    <img src="products/img/stp-elcom.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="products/stp-elcom.php" role="button" class="text-uppercase btn btn-link">stp-elcom</a>
            </div>
            <!-- DUCTING AND ACCESSORIES -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="products/ducting-and-accessories.php">
                    <img src="products/img/ducting-and-accessories.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="products/ducting-and-accessories.php" role="button" class="text-uppercase btn btn-link">ducting
                    and accessories
                </a>
            </div>
            <!-- SOLAR POWER GENERATOR -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="products/solar-power-generator.php">
                    <img src="products/img/solar-power-generator.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="products/solar-power-generator.php" role="button" class="text-uppercase btn btn-link">solar
                    power generator</a>
            </div>
            <!-- SOLAR PUMP -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="products/solar-pump.php">
                    <img src="products/img/solar-pump.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="products/solar-pump.php" role="button" class="text-uppercase btn btn-link">solar pump</a>
            </div>
            <!-- VERTICAL OIL SEPARATOR -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="products/vertical-oil-separator.php">
                    <img src="products/img/vertical-oil-separator.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="products/vertical-oil-separator.php" role="button" class="text-uppercase btn btn-link">vertical
                    oil separator</a>
            </div>
        </div>
        <div class="text-center py-4">
            <div class="custom-pagination">
                <a href="products.php" class="prev">Previous</a>
                <a href="products.php">1</a>
                <a href="products-2.php" class="active">2</a>
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