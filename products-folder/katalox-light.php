<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalox Light | GSSI Enterprise</title>
    <!-- CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
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

    <img src="img/katalox-light.PNG" class="w-100 mt-5 pt-2">
    <div class="main-grid my-2">
        <div class="katalox-box">
            <h1 class="text-success">Filtration of</h1>
            <ul class="ps-5">
                <li class="mb-2">Less than 3 micron</li>
                <li class="mb-2">Suspended solids</li>
                <li class="mb-2">Sediments</li>
                <li class="mb-2">Turbidity</li>
                <li class="mb-2">Organics</li>
                <li class="mb-2">Color</li>
                <li class="mb-2">Odor</li>
            </ul>
        </div>
        <div class="katalox-box">
            <h1 class="text-success">Removal of</h1>
            <ul class="ps-5">
                <li class="mb-2">Iron</li>
                <li class="mb-2">Manganese</li>
                <li class="mb-2">Hydrogen Sulfide</li>
                <li class="mb-2">Arsenic</li>
                <li class="mb-2">Radium</li>
                <li class="mb-2">Heavy Metals</li>
                <li class="mb-2">Radionuclides</li>
            </ul>
        </div>
        <div class="katalox-box">
            <h1 class="text-success">Advantages</h1>
            <ul class="ps-5">
                <li class="mb-2">High content MnO<sub>2</sub> coating (10%)</li>
                <li class="mb-2">Very High Surface Area</li>
                <li class="mb-2">Contains NO Crystalline Silica</li>
                <li class="mb-2">Light Weight - providing significant savings on backwash water</li>
                <li class="mb-2">Higher Filtration rates</li>
                <li class="mb-2">Filtration of sand, sediment and suspended solids, down to 3 micron
                </li>
                <li class="mb-2">High efficiency removal capacity of Iron, Manganese and Hydrogen
                    sulfide</li>
                <li class="mb-2">Effective reduction of Arsenic, Zinc, Copper, Lead, Radium, Uranium,
                    radionuclides
                    and other
                    heavy metals</li>
                <li class="mb-2">Media replacement every 7 - 10 years</li>
                <li class="mb-2">No disinfection by-product</li>
                <li class="mb-2">No mandatory KMnO<sub>4</sub> chlorine or chlorine dioxide dosing</li>
                <li class="mb-2">Low operational costs</li>
                <li class="mb-2">Unique product, unmatched by our competitors</li>
            </ul>
        </div>
        <div class="katalox-box grid-col-span-2">
            <div class="d-grid katalox-img-grid">
                <img src="img/katalox-light1.PNG" alt="img" class="gallery-item rounded border border-2 border-dark katalox-img po" role="button">
                <img src="img/katalox-light2.PNG" alt="img" class="gallery-item rounded border border-2 border-dark katalox-img" role="button">
                <img src="img/katalox-light3.PNG" alt="img" class="gallery-item rounded border border-2 border-dark katalox-img grid-col-span-2" role="button">
                <img src="img/katalox-light4.PNG" alt="img" class="gallery-item h-100 rounded border border-2 border-dark katalox-img" role="button">
                <img src="img/katalox-light5.PNG" alt="img" class="gallery-item h-100 rounded border border-2 border-dark katalox-img" role="button">
            </div>
            <!-- Modal -->
            <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <img src="#" class="modal-img" alt="modal img" style="width:100%">
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-2">
            <a class="btn btn-primary" href="../PDFs/KL_Brochure_NEW_ver_1.1.pdf">Download Full Brochure</a>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include_once("products-footer.php"); ?>
    <!-- END FOOTER -->


    <!-- ION ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>