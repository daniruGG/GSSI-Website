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
    <div class="container pb-5" style="padding-top:6rem">
        <div class="row">
            <div class="col-md-12 pb-2 text-center">
                <h1 style="color:#145889">Products</h1>
            </div>
        </div>
        <div class="row">
            <!-- KATALOX LIGHT -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/katalox-light.php">
                    <img src="product/img/katalox-light4.PNG" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/katalox-light.php" role="button" class="text-uppercase btn btn-link">katalox
                    light
                </a>
            </div>
            <!-- ISOFT DESCALER -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/isoft-descaler.php">
                    <img src="product/img/isoft-descaler2.PNG" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/isoft-descaler.php" role="button" class="text-uppercase btn btn-link">isoft
                    descaler</a>
            </div>
            <!-- VERTICAL OIL SEPARATOR -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/vertical-oil-separator.php">
                    <img src="product/img/vertical-oil-separator.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/vertical-oil-separator.php" role="button" class="text-uppercase btn btn-link">vertical
                    oil
                    separator</a>
            </div>
            <!-- OIL SLUDGE TREATMENT SYSTEM -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/oil-sludge-treatment-system.php">
                    <img src="product/img/oil-sludge-treatment-system.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/oil-sludge-treatment-system.php" role="button" class="text-uppercase btn btn-link">oil
                    sludge treatment system</a>
            </div>
            <!-- SMALL/LARGE FOOD WASTE STRAINER -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/small-large-food-waste-strainer.php" class="d-flex">
                    <img src="product/img/small-food-waste-strainer.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/small-large-food-waste-strainer.php" role="button" class="text-uppercase btn btn-link">small/large food waste strainer</a>
            </div>
            <!-- PACKAGED TYPE FIRE PUMP SYSTEM -->
            <div class="col-6 col-md-4 text-center my-4">
                <a href="product/packaged-type-fire-pump-system.php">
                    <img src="product/img/packaged-type-fire-pump-system.png" alt="img" class="mx-auto" style="max-height: 200px;">
                </a>
                <a href="product/packaged-type-fire-pump-system.php" role="button" class="text-uppercase btn btn-link">packaged type fire pump system</a>
            </div>
        </div>

        <div class="text-center py-4">
            <div class="custom-pagination">
                <a href="#" class="prev page-link disabled text-secondary" tabindex="-1">Previous</a>
                <a href="product.php" class="active">1</a>
                <a href="product2.php">2</a>
                <a href="product2.php" class="next">Next</a>
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