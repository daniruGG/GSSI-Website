<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | GSSI Enterprise</title>
    <!--MAIN HEAD -->
    <?php include_once("includes/head.php") ?>

</head>

<body>
    <!-- NAVBAR -->
    <?php include_once("includes/main-nav.php"); ?>
    <!-- END NAVBAR -->

    <main id="main" style="margin-top: 6rem;">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pb-4 text-center">
                        <h1 style="color:#145889">Projects</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm" data-aos="fade-up">
                        <!-- START 1ST PROJECT -->
                        <div class="d-md-flex post-entry-2 half">
                            <a class="me-4 thumbnail" role="button" data-bs-toggle="modal" data-bs-target="#arrow-plastic">
                                <picture>
                                    <source srcset="img/projects/arrow-plastic-industries1.webp" type="image/webp">
                                    <img src="img/projects/arrow-plastic-industries1.jpg" alt="arrow plastic industries" class="d-block w-100" style="width: 640px; height: 360px;">
                                </picture>
                            </a>
                            <div class="d-flex flex-column justify-content-between w-100">
                                <div>
                                    <h3>
                                        <a class="text-primary text-decoration-none" role="button" data-bs-toggle="modal" data-bs-target="#arrow-plastic">
                                            ARROW PLASTIC INDUSTRIES
                                        </a>
                                    </h3>
                                    <p class="lead">Location: <strong class="fw-bold">Parañaque City</strong></p>
                                    <p class="lead">Our Role: <strong class="fw-bold">Main Contractor</strong></p>
                                    <p class="lead m-0">What we did:</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">STP ELECTRO-COAGULATION SYSTEM INSTALLATION
                                        </li>
                                        <li class="list-group-item"></li>
                                    </ul>
                                </div>

                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="img/logo2.png" alt="img">
                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">GSSI Enterprise</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal modal-lg fade" id="arrow-plastic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header flex-column align-items-start">
                                            <h5 class="modal-title fw-bold text-primary" id="exampleModalLabel">ARROW
                                                PLASTIC INDUSTRIES
                                            </h5>
                                            <p class="lead text-muted m-0">2023</p>
                                        </div>
                                        <div class="modal-body">
                                            <!-- CAROUSEL -->
                                            <div id="arrow-plastic-captions" class="carousel slide mb-2 " data-bs-ride="false">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#arrow-plastic-captions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#arrow-plastic-captions" data-bs-slide-to="1" aria-label="Slide 2"></button>

                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <picture>
                                                            <source srcset="img/projects/arrow-plastic-industries1.webp" type="image/webp">
                                                            <img src="img/projects/arrow-plastic-industries1.jpg" alt="arrow plastic industries" class="d-block w-100" style="max-height: 450px; height: 450px;">
                                                        </picture>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <picture>
                                                            <source srcset="img/projects/arrow-plastic-industries2.webp" type="image/webp">
                                                            <img src="img/projects/arrow-plastic-industries2.jpg" alt="arrow plastic industries" class="d-block w-100" style="max-height: 450px; height: 450px;">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#arrow-plastic-captions" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#arrow-plastic-captions" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div> <!-- END CAROUSEL -->
                                        </div>
                                        <div class="modal-footer flex-column align-items-start">
                                            <div>
                                                <p class="lead">Location: <strong class="fw-bold">Parañaque
                                                        City</strong>
                                                </p>

                                                <p class="lead">Our Role: <strong class="fw-bold">Main
                                                        Contractor</strong></p>
                                                <p class="lead m-0">What we did:</p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">STP ELECTRO-COAGULATION SYSTEM
                                                        INSTALLATION
                                                    </li>
                                                    <li class="list-group-item"></li>
                                                </ul>
                                            </div>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- END 1ST PROJECT -->
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <div class="text-center py-4">
        <div class="custom-pagination">
            <a href="projects-2.php" class="prev">Previous</a>
            <a href="projects.php">1</a>
            <a href="projects-2.php">2</a>
            <a href="projects-3.php">3</a>
            <a href="projects-4.php" class="active">4</a>
            <a href="#" class="next page-link disabled text-secondary" tabindex="-1">Next</a>
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
    <!-- FADE LIBRARY - AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>

</html>