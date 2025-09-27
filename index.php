<?php

include "connection.php";

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DRodX Store</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class=" main-bodyimg">

    <div class="container-fluid  ">
        <div class="row align-content-center">

            <!-- header -->


           

            <!-- header -->
            <!-- content -->
            <div class="col-12 p-4 container-fluid  ">
                <div class="row">

                    <!-- signupbox -->
                    <!-- Registration 3 - Bootstrap Brain Component -->
                    <section class="p-1 p-md-1 p-xl-1" id="signUpBox">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6 bsb-tpl-bg-platinum">

                                    <h1 class="m-0">Welcome!
                                        <img class="img-fluid rounded mx-auto my-4" loading="lazy" src="resource/logo.svg" width="245" height="80">
                                        <img class="img-fluid rounded mx-auto my-2" loading="lazy" src="resource/car1.jpg" width="800" height="200">
                                    </h1>
                                    <p class="mb-0">Not a member yet? <a href="#!" class="link-secondary text-decoration-none">Register now</a></p>
                                    <div class="row">
                                        <div class="col-12">
                                            <hr class="mt-3 mb-4 border-secondary-subtle">

                                        </div>
                                        <div class="col-6">
                                            <p class="mt-1 mb-1">Or sign in with</p>
                                            <div class="d-flex gap-3 flex-column flex-xl-row">
                                                <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                                    </svg>
                                                    <span class="ms-2 fs-6">Google</span>
                                                </a>
                                                <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                    </svg>
                                                    <span class="ms-2 fs-6">Facebook</span>
                                                </a>
                                                <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                                    </svg>
                                                    <span class="ms-2 fs-6">Twitter</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-md-6 bsb-tpl-bg-lotion bgcolor">
                                    <div class="p-3 p-md-4 p-xl-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <h2 class="h1">Registration to DrodX</h2>
                                                    <h3 class="fs-6 fw-normal text-secondary m-1">Enter your details to register</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-none" id="msgdiv">
                                            <div class="alert alert-danger" role="alert" id="msg"></div>
                                        </div>
                                        <form action="#!">
                                            <div class="row gy-3 gy-md-3 overflow-hidden">
                                                <div class="col-6">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" class="form-control" placeholder="ex:- Kasun" id="fname" />
                                                </div>

                                                <div class="col-6">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" placeholder="ex:- Perera" id="lname" />
                                                </div>

                                                <div class="col-12">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" placeholder="ex:- name@gmail.com" id="email" />
                                                </div>

                                                <div class="col-12">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" class="form-control" placeholder="ex:- **********" id="password" />
                                                </div>

                                                <div class="col-6">
                                                    <label class="form-label">Mobile</label>
                                                    <input type="text" class="form-control" placeholder="ex:- 0771234568" id="mobile" />
                                                </div>

                                                <div class="col-6">
                                                    <label class="form-label">Gender</label>
                                                    <select class="form-control" id="gender">

                                                        <?php

                                                        $rs = Database::search("SELECT * FROM `gender`");
                                                        $num = $rs->num_rows;

                                                        for ($x = 0; $x < $num; $x++) {
                                                            $data = $rs->fetch_assoc();
                                                        ?>

                                                            <option value="<?php echo $data["gender_id"]; ?>">
                                                                <?php echo $data["gender_name"]; ?>
                                                            </option>

                                                        <?php
                                                        }

                                                        ?>

                                                    </select>
                                                </div>

                                              
                                                <div class="g-recaptcha" data-sitekey="6LfRQgEqAAAAAASWE0V-M-ZWX9oYua_0o8UVjCjZ"></div>
                                                <div class="col-12 col-lg-6 d-grid">
                                                    <button class="btn btn-primary" onclick="signup();">Sign Up</button>
                                                </div>

                                                <div class="col-12 col-lg-6 d-grid">
                                                    <button class="btn btn-dark" onclick="changeView();">Already have an account? Sign In</button>
                                                </div>



                                            </div>
                                        </form>



                                    </div>
                                </div>








                            </div>
                        </div>
                    </section>
                    <!-- signupbox -->






                    <!-- signinbox -->


                    <div class="col-6 col-lg-12 d-none" id="signInBox">
                        <section class="vh-200">
                            <div class="row g-2">
                                <div class="container py-5 h-100">
                                    <div class="row d-flex justify-content-center align-items-center h-100">
                                        <div class="col col-xl-10">
                                            <div class="card" style="border-radius: 1rem;">
                                                <div class="row g-0">
                                                    <div class="col-md-6 col-lg-5 d-none d-md-block">

                                                        <img class="img-fluid rounded mx-auto my-2 img-fluid" loading="lazy" style="border-radius: 1rem 0 0 1rem;" src="resource/car1.jpg" width="800" height="200">
                                                        <img class="img-fluid rounded mx-auto my-2 img-fluid" loading="lazy" style="border-radius: 1rem 0 0 1rem;" src="resource/logo.svg" width="500" height="200">

                                                    </div>
                                                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                                        <div class="card-body p-6 p-lg-6 text-black">

                                                            <div>

                                                                <div class="d-flex align-items-center mb-2 pb-1  ">

                                                                    <span class=" offset-lg-2 h1 fw-bold mb-0">Sign In</span>
                                                                </div>
                                                                <div class="col-12 d-none" id="msgdiv1">
                                                                    <div class="alert alert-danger" role="alert" id="msg1">

                                                                    </div>
                                                                </div>

                                                                <?php
                                                                $email = "";
                                                                $password = "";

                                                                if (isset($_COOKIE["email"])) {
                                                                    $email = $_COOKIE["email"];
                                                                }

                                                                if (isset($_COOKIE["password"])) {
                                                                    $password = $_COOKIE["password"];
                                                                }
                                                                ?>

                                                                <div class="col-12">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="email" class="form-control" id="email2" value="<?php echo $email; ?>" />
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Password</label>
                                                                    <input type="password" class="form-control" id="password2" value="<?php echo $password; ?>" />
                                                                </div>
                                                                <div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="rememberme" />
                                                                        <label class="form-check-label">Remember Me</label>
                                                                        <a class="offset-lg-7" href="#" class=" link-primary" onclick="forgotPassword();">Forgot Password?</a>
                                                                    </div>


                                                                </div>
                                                                <div>
                                                                    <button class="col-6 btn btn-primary" onclick="signin();">Sign In</button>
                                                                    <button class=" btn btn-warning" onclick="changeView();">  &nbspNew to DRodX Store? Join Now. &nbsp</button>
                                                                </div>

                                                                <div class="col-11 d-grid">
                                                                    <a href="adminSignin.php" class="btn btn-dark">Go to Admin Login</a>
                                                                </div>



                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>



                    <!-- signinbox -->
                </div>
            </div>


            <!-- content -->

            <!-- modal -->
            <div class="modal" tabindex="-1" id="fpmodal">
                <div class="modal-dialog ">
                    <div class="modal-content home">
                        <div class="modal-header">
                            <h5 class="modal-title">Forgot Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body ">

                            <div class="row g-3">

                                <div class="col-6">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="np" />
                                        <button id="npb" class="btn btn-outline-secondary" type="button" onclick="showPassword1();">Show</button>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Re-type Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="rnp" />
                                        <button id="rnpb" class="btn btn-outline-secondary" type="button" onclick="showPassword2();">Show</button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Verification Code</label>
                                    <input type="text" class="form-control" id="vcode" />
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

            <!-- footer -->
            <div class="col-12 fixed-bottom d-none d-lg-block">
                <p class="text-center">&copy; 2024 DRodX.lk || All Rights Reserved</p>
            </div>
            <!-- footer -->




        </div>

    </div>


    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>