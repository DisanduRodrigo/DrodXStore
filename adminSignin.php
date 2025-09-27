<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin SignIn | DRodX Store</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body class="admin-bodyimg container-fluid">

    <div class="   container-fluid justify-content-center">
        <div class="row align-content-center">

            <div class="col-12">
                <div class="row">

                    <div class="col-12 logo"></div>
                    <div class="col-12">
                        <p class="text-center title01 text-white mb-5">Hi, Welcome to DRodX Store Admins.</p>
                    </div>
                    <div class="col-12 p-5">
                        <div class="row">


                            <div class="offset-lg-3 col-12 col-lg-6     mt-5 d-block bgcolor">
                                <div class="row g-3">

                                    <div class="col-12">
                                        <p class=" offset-lg-3 title02">Sign In to your Account.</p>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="ex : name@gmail.com" id="e" />
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid">
                                        <button class="btn btn-primary" onclick="adminVerification();">Send Verification Code</button>
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid">
                                        <button class="btn btn-warning"  onclick="window.location='index.php';">Back to Customer Log In</button>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>



            <!--  -->

            <div class="modal" tabindex="-1" id="verificationModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Admin Verification</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Enter Your Verification Code</label>
                            <input type="text" class="form-control" id="vcode">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="verify();">Verify</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->


            <div class=" fixed-bottom text-center">
                <p>&copy; 2024 DRodX Store.lk | All Rights Reserved</p>
            </div>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>