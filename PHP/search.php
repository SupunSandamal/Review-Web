<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <link rel="stylesheet" href="../CSS/phone.css">
</head>
<?php
include "../HTML/navbar.html";
include "./conn.php";
?>

<body class="bodyco">

    <div class="container-fluid pata">
        <div class="row mt-6">
            <h1 class="hedp"><b>Best in Dekstop</b></h1>
            <div class="col">
                <h2 class="hed">"Read reviews. Write reviews. Find products you can trust."</h2>
            </div>
            <div class="col">
                <div class="container screan">
                    <form class="bar" method="post">
                        <i class="fas fa-search success"></i>
                        <input type="text" class="bare" placeholder="Enter key" name="key">
                        <button type="submit" class="btn btn-outline-dark " style="padding: 10px 30px; border-radius: 50px;" name="search">Search</button>
                    </form><br><br><br>
                </div>
            </div>
        </div>
    </div>

    <!-- col -->

    <div class="container ">
        <div class="row mt-3">
            <div class="col-4">
                <div class="row">
                    <div class="card" style="height: 620px">
                        <div class="card-body">
                            <h2 class="card-title text-center tcolor">Rewiew</h2>
                            <hr>
                            <label for="exampleFormControlInput1" class="form-label mt-4">Dekstop model</label>

                            <input class="form-control" type="text" placeholder="Phone model" aria-label="Phone model">
                            <label for="exampleFormControlInput1" class="form-label mt-3">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            <label for="exampleFormControlTextarea1" class="form-label mt-3">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <div class="input-group mt-3">
                                <label for="exampleFormControlInput1" class="form-label">Image
                                    <input type="file" class="form-control mt-1" id="inputGroupFile02"></label>
                                <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
                            </div>
                            <button type="submit" class="btn btn-outline-success mt-5">Submit</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col ms-2">
                <div class="row ">
                    <!-- <div class="card-group main"> -->
                    <div class="card scrol">
                        <div class="card-body">

                            <?php
                            $search_key = "";

                            if (isset($_POST['search'])) {
                                $search_key = $_POST['key'];
                            }

                            // $sql = "SELECT * FROM `item` WHERE `title` LIKE :keyword";
                            $sql = "SELECT * FROM item JOIN review USING(item_id) JOIN category USING(cate_id) JOIN user USING(user_id) WHERE item_name LIKE '%$search_key%';";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <div class="recard">
                                        <div class="card">
                                            <div class="card-header border-success">
                                                <h1 class="bphone tcolor"><?= $row['item_name'] ?></h1>
                                            </div>
                                            <div class="container card-header bg-transparent border-success bphone">
                                                <img src="../Image/profile.jpg" class="user">
                                                <h6 class="pro"><?= $row['user_name'] ?></h6>
                                            </div>
                                            <div class="card-body text-dark">
                                                <p class="card-text"><?= $row['review_text'] ?></p>
                                            </div>
                                            <img src="../Image/about.jpg" class="img-thumbnail" alt="..." width="80" height="80">
                                        </div>
                                    </div>

                            <?php
                                }
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php

    include "../HTML/footer.html";

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/45c1fc2fb4.js" crossorigin="anonymous"></script>

</body>

</html>