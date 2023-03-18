<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | GSSI Enterprise</title>
    <!--MAIN HEAD -->
    <?php include_once("includes/head.php") ?>

</head>

<body>
    <!-- NAVBAR -->
    <?php include_once("includes/main-nav.php"); ?>
    <!-- END NAVBAR -->

    <!-- Wrapper container -->
    <div class="container pb-5" style="padding-top:6rem">
        <div class="row">
            <div class="col-md-12 pb-2 mb-4 text-center">
                <h1 style="color:#145889">Contact Us</h1>
                <p>Got questions? We'd love to hear from you.<strong> If you have any questions</strong>, please
                    fill up the form below or you can reach us through email or phone and we'll get back to you as soon as
                    possible.
                </p>
            </div>
        </div>
        <?php
        session_start();
        if (isset($_SESSION['status'])) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['status']; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            unset($_SESSION['status']);
        }
        ?>
        <div class="row">
            <div class="col-sm">
                <form action="send-email.php" method="POST" id="form">
                    <div class="form-group">
                        <!-- Name input -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name" required />
                        </div>

                        <!-- Email address input -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email Address" required />
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <!-- Message input -->
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" name="message" type="text" placeholder="Message" style="height: 10rem;" required></textarea>
                    </div>

                    <input type="hidden" name="subject" id="subject" value="New Inquiry From GSSI Website">

                    <!-- Form submit button -->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-md g-recaptcha" type="submit" data-sitekey="6Lenh2YkAAAAAKUa5PchLN0ZKVc2msC28_uMEhlB" data-callback="onSubmit" data-action="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-sm">
                <h3 class="pb-3">Contact</h3>
                <h4 class="lead">EMAIL</h4>
                <p class="text-muted pb-3">gssi_enterprise@yahoo.com</p>
                <h4 class="lead">PHONE</h4>
                <p class="text-muted pb-3">(02) 8395 4623 / (02) 8293 8026 <br> (0991) 843 0220 <br> (0928) 955 3939
                    <br> (0926) 752 6438
                </p>
                <h4 class="lead">ADDRESS</h4>
                <p class="text-muted pb-3">Block 17, Lot 12 Armal Village, Sta.Ana, Taytay, Rizal</p>
            </div>
            <div class="col-sm">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482.72789317840204!2d121.11334402313203!3d14.552103972591505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7ad7ebd3c8b%3A0x910223ac36b48f9f!2sArmal%20Village%20Neighborhood%20Association%20Inc.!5e0!3m2!1sen!2sph!4v1677237638222!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include_once("includes/main-footer.php"); ?>
    <!-- END FOOTER -->

    <!-- ION ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- GOOGLE CAPTCHA V3 -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("form").submit();
        }
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>