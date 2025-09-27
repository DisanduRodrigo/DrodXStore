<?php

session_start();
include "connection.php";

if (isset($_SESSION["au"])) {

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Admin Panel | DRodX Store</title>

        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css" />

        <link rel="icon" href="resource/logo.svg" />
    </head>

    <body >

        <div class="container-fluid home">
            <div class="row">

                <div class="col-12 bg-dark">
                    <div class="row">
                        <div class="col-12 col-lg-2 text-center my-6">
                            <label class="form-label fs-4 fw-bold text-white">Total Active Time</label>
                        </div>
                        <div class="col-12 col-lg-10 text-center my-3">

                            <?php

                            $start_date = new DateTime("2024-06-25 19:00:00");

                            $tdate = new DateTime();
                            $tz = new DateTimeZone("Asia/Colombo");
                            $tdate->setTimezone($tz);
                            $end_date = new DateTime($tdate->format("Y-m-d H:i:s"));

                            $difference = $end_date->diff($start_date);

                            ?>

                            <label class="form-label fs-4 fw-bold text-warning">
                                <?php
                                echo $difference->format('%Y') . " Years " . $difference->format('%m') . " Months " .
                                    $difference->format('%d') . " Days " . $difference->format('%H') . " Hours " .
                                    $difference->format('%i') . " Minutes " . $difference->format('%s') . " Seconds";
                                ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class=" col-12 p-2 ">
                    <section >

                        <div class="container  ">
                            <div class="row ">
                                <div class=" col-12 col-md-3 bsb-tpl-bg-platinum bg-dark ">
                                    <div class="row g-1 text-center">

                                        <div class="col-12 ">
                                            <h4 class="text-white"><?php echo $_SESSION["au"]["fname"] . " " . $_SESSION["au"]["lname"]; ?></h4>
                                            <hr class="border border-1 border-white" />
                                        </div>
                                        <div class="nav flex-column nav-pills me-3 mt-3" role="tablist" aria-orientation="vertical">
                                            <nav class="nav flex-column">
                                                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                                                <a class="nav-link" href="manageUsers.php">Manage Users</a>
                                                <a class="nav-link" href="manageProducts.php">Manage Products</a>
                                            </nav>
                                        </div>
                                        <div class="col-12 mt-5">
                                            <hr class="border border-1 border-white" />
                                            <a href="sellingHistory.php">
                                                <h4 class="text-white fw-bold n" href="sellingHistory.php">Selling History</h4>
                                            </a>
                                            <hr class="border border-1 border-white" />
                                        </div>

                                    </div>
                                </div>


                                <div class="offset-lg-1 col-12 col-md-8 bsb-tpl-bg-lotion">
                                    <div class="row">

                                        <div class="text-white fw-bold mb-1 mt-3">
                                            <h2 class="fw-bold">Dashboard</h2>
                                        </div>
                                        <div class="col-12">
                                            <hr />
                                        </div>



                                        <div class="col-6 col-lg-4 px-1 shadow">
                                            <div class="row g-1">
                                                <div class=" single-promo promo1 col-12   text-white text-center rounded" style="height: 100px;">
                                                    <br />
                                                    <span class=" single-promo fs-4 fw-bold">Daily Earnings</span>

                                                    <?php

                                                    $today = date("Y-m-d");
                                                    $thismonth = date("m");
                                                    $thisyear = date("Y");

                                                    $a = "0";
                                                    $b = "0";
                                                    $c = "0";
                                                    $e = "0";
                                                    $f = "0";

                                                    $invoice_rs = Database::search("SELECT * FROM `invoice`");
                                                    $invoice_num = $invoice_rs->num_rows;

                                                    for ($x = 0; $x < $invoice_num; $x++) {
                                                        $invoice_data = $invoice_rs->fetch_assoc();

                                                        $f = $f + $invoice_data["qty"]; //total qty

                                                        $d = $invoice_data["date"];
                                                        $splitDate = explode(" ", $d); //separate the date from time
                                                        $pdate = $splitDate["0"]; //sold date

                                                        if ($pdate == $today) {
                                                            $a = $a + $invoice_data["total"];
                                                            $c = $c + $invoice_data["qty"];
                                                        }

                                                        $splitMonth = explode("-", $pdate); //separate date as year,month & day
                                                        $pyear = $splitMonth["0"]; //year
                                                        $pmonth = $splitMonth["1"]; //month

                                                        if ($pyear == $thisyear) {
                                                            if ($pmonth == $thismonth) {
                                                                $b = $b + $invoice_data["total"];
                                                                $e = $e + $invoice_data["qty"];
                                                            }
                                                        }
                                                    }

                                                    ?>

                                                    <br />
                                                    <span class="fs-5">Rs. <?php echo $a; ?> .00</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-lg-4 px-1">
                                            <div class="row g-1">
                                                <div class="col-12 single-promo promo1 text-black text-center rounded" style="height: 100px;">
                                                    <br />
                                                    <span class="fs-4 fw-bold">Monthly Earnings</span>
                                                    <br />

                                                    <span class="fs-5">Rs. <?php echo $b; ?> .00</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-lg-4 px-1">
                                            <div class="row g-1">
                                                <div class="col-12 single-promo promo2 text-white text-center rounded" style="height: 100px;">
                                                    <br />
                                                    <span class="fs-4 fw-bold">Today Sellings</span>
                                                    <br />
                                                    <span class="fs-5"><?php echo $c; ?> Items</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-lg-4 px-1">
                                            <div class="row g-1">
                                                <div class="col-12 single-promo promo3 text-white text-center rounded" style="height: 100px;">
                                                    <br />
                                                    <span class="fs-4 fw-bold">Monthly Sellings</span>
                                                    <br />
                                                    <span class="fs-5"><?php echo $e; ?> Items</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-lg-4 px-1">
                                            <div class="row g-1">
                                                <div class="col-12 single-promo promo4 text-white text-center rounded" style="height: 100px;">
                                                    <br />
                                                    <span class="fs-4 fw-bold">Total Sellings</span>
                                                    <br />
                                                    <span class="fs-5"><?php echo $f; ?> Items</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-lg-4 px-1 shadow">
                                            <div class="row g-1">
                                                <div class="col-12 single-promo promo5 text-white text-center rounded" style="height: 100px;">
                                                    <br />
                                                    <span class="fs-4 fw-bold">Total Engagements</span>
                                                    <br />
                                                    <?php
                                                    $user_rs = Database::search("SELECT * FROM `user`");
                                                    $user_num = $user_rs->num_rows;
                                                    ?>
                                                    <span class="fs-5"><?php echo $user_num; ?> Members</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr />
                                </div>



                            </div>



                        </div>

                    </section>

                </div>

            </div>
        </div>
        <?php include "footer.php"; ?>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
    </body>

    </html>

<?php

} else {
    echo ("You are not a valid user.");
}

?>