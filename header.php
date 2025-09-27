<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body >

    <div class="col-12 container-fluid header ">
        <div class="row mt-0 mb-0">

            <div class="offset-lg-0 col-12 col-lg-4 align-self-start mt-4">

            <?php
            session_start();

            if(isset($_SESSION["u"])){
                $data = $_SESSION["u"];
                ?>
                <span class="font-weight-bold fw-bold  text-dark"><b><h4>&nbsp &nbsp Hi <?php echo $data["fname"]; ?>  <?php echo $data[ "lname"]; ?>.</h4></b></span>    
               
                <?php

            }else{
                ?>
                <a href="index.php" class="text-danger font-weight-bold fw-bold"><h4>Sign In or Register</h4></a>
                
                <?php
            }
            
            ?>


            </div>

            <div class="col-12 col-lg-4 offset-lg-4 fs-4 ms-6 mt-4" style="text-align: center;">
               
                <div class="row">
                
                      
                    


                    <div class="col-12 col-lg-2 mt-0" onclick="window.location='home.php';">
                       <button class="btn btn-dark"> <span class="text-start fw-bold">Home</span></button>
                    </div>

                    <div class="col-12 col-lg-5 dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            My DRodX Store
                        </button>
                        <ul class="dropdown-menu">
                
                            
                            <li><a class="dropdown-item" href="myProducts.php">My Products</a></li>
                            <li><a class="dropdown-item" href="watchlist.php">Watchlist</a></li>
                            <li><a class="dropdown-item" href="purchasingHistory.php">Purchase History</a></li>
                            <li><a class="dropdown-item" href="messages.php">Messages</a></li>
                            <li><a class="dropdown-item" href="#" onclick="contactAdmin();">Contact Admin</a></li>
                        </ul>
                    </div>
                    
                    
                    <div class="col-1 col-lg-1 ms-1 ms-lg-0 mt-0 cart-icon" onclick="window.location='cart.php';">
                    </div>
                    
                    
                    <div class="col-2 col-lg-4 " onclick="window.location='userProfile.php';">
                       <button class="btn btn-danger"> <span class="text-start fw-bold"><i class="fa fa-user"></i> My Account</span></button>
                    </div>
                <div>
                <span class="offset-4 text-lg-start fw-bold">Help and Contact</span>
                <button  class=" offset-1 col-3 col-lg-3 mt-1 btn btn-outline-warning"><span class="text-lg-start fw-bold signout" href="index.php" onclick="signout();">Signout</span></button>
                </span> 
                   
               
                   </div>
                        
           
                    
                
                
                    <!-- msg modal -->
                    <div class="modal " tabindex="-1" id="contactAdmin">
                        <div class="modal-dialog ">
                            <div class="modal-content home">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contact Admin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body overflow-scroll">
                                    <!-- received -->
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="col-8 rounded bg-dark">
                                                <div class="row">
                                                    <div class="col-12 pt-2">
                                                        <span class="text-white fw-bold fs-4">Hello there!!!</span>
                                                    </div>
                                                    <div class="col-12 text-end pb-2">
                                                        <span class="text-white fs-6">2024-06-25 00:00:00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- received -->
                                    <!-- sent -->
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="offset-4 col-8 rounded bg-secondary">
                                                <div class="row">
                                                    <div class="col-12 pt-2">
                                                        <span class="text-white fw-bold fs-4">Hello there!!!</span>
                                                    </div>
                                                    <div class="col-12 text-end pb-2">
                                                        <span class="text-white fs-6">2024-06-25 00:00:00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sent -->
                                </div>
                                <div class="modal-footer">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="msgtxt" />
                                            </div>
                                            <div class="col-3 d-grid">
                                                <button type="button" class="btn btn-primary" onclick="sendAdminMsg();">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->

                </div>
            </div>

        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>