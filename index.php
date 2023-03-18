<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSSI Enterprise</title>
    <!--MAIN HEAD -->
    <?php include_once("includes/head.php") ?>
    <!-- BING SEO -->
    <meta name="msvalidate.01" content="49336B49C627FD244C545BD2F092720B" />
</head>

<body>
    <!-- NAVBAR -->
    <?php include_once("includes/main-nav.php"); ?>
    <!-- END NAVBAR -->

    <!-- CAROUSEL -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <picture>
                    <source srcset="img/meeting.webp" type="image/webp">
                    <img src="img/meeting.jpg" class="d-block w-100 darker-image" alt="img" style="max-height: 700px;">
                </picture>
                <div class="carousel-caption d-md-block">
                    <h1>Green System Solution and Innovation</h1>
                    <p>Green System Solution and Innovation</p>
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source srcset="img/solar-panel.webp" type="image/webp">
                    <img src="img/solar-panel.jpg" class="d-block w-100 darker-image" alt="img" style="max-height: 700px;">
                </picture>
                <div class="carousel-caption d-md-block">
                    <h1>Green System Solution and Innovation</h1>
                    <p>Green System Solution and Innovation</p>
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source srcset="img/sewage-treatment-plant.webp" type="image/webp">
                    <img src="img/sewage-treatment-plant.jpg" class="d-block w-100 darker-image" alt="img" style="max-height: 700px;">
                </picture>
                <div class="carousel-caption d-md-block">
                    <h1>Green System Solution and Innovation</h1>
                    <p>Green System Solution and Innovation</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> <!-- END CAROUSEL -->

    <!-- WHAT WE DO -->
    <section class="container my-5">
        <h2 class="text-center mx-auto" style="color:#145889">What We Do</h2>
        <hr class="mx-auto h-hr">
        <div class="what-we-do-grid">
            <div class="what-we-do-box">
                <img src="img/what-we-do-1.png" alt="img" class="w-100 rounded mx-auto mb-2 gallery-item" role="button">
                <!-- Modal -->
                <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <img src="img/what-we-do-1.png" class="modal-img mx-auto" alt="modal img" style="width:100%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class=" what-we-do-box d-flex align-items-center mb-2">
                <p> <strong>GSSI ENTERPRISE</strong> is committed to helping the small company that needs a solution in
                    wastewater
                    management, sewage treatment plant and potable water facility by combining both
                    conventional
                    and advanced technologies. Our system is simple yet very effective in treating the wastewater
                    through
                    the application of CASPAM (Conventional Activated Sludge Process Anaerobic Microbes). Using this
                    method
                    means the World that we live in is safe so that our children and the next generation will still
                    experience the beauty of the Earth.</p>
            </div>
            <div class="what-we-do-box d-flex align-items-center mt-2">
                <p> <strong>Our</strong> potable water is using a revolutionary filtration system which is
                    called
                    Nucleation Assisted
                    Crystallization (NAC). It is a Catalytic process that converts Ca and Mg into harmless
                    micro-crystals.
                    It provides the best quality healthy water without the addition of Sodium or Phosphates. With this
                    technology, we make our environment Clean & Green.</p>
            </div>
            <div class="what-we-do-box">
                <img src="img/what-we-do-2.jpg" alt="img" class="w-100 rounded mx-auto mt-2 gallery-item" role="button" style="max-height: 20rem;">
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <?php include_once("includes/main-footer.php"); ?>
    <!-- END FOOTER -->

    <!-- ION ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>