<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
$select_profile_pic_query = "SELECT about_img FROM about_img";
$select_profile_pic = mysqli_query($db_connect, $select_profile_pic_query);
$after_assoc = mysqli_fetch_assoc($select_profile_pic);
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Safa</a>
        <a class="breadcrumb-item" href="dashbord.php">Dashbord</a>
        <span class="breadcrumb-item active">About Image</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>About image</h5>
            <div class="row">
                <div class="col-6 m-auto">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-mb-3">

                            <div class="card-header bg-info">
                                <h2 class="text-dark"><?= $_SESSION['name_from_database']; ?></h2>
                            </div>
                            <div class="card-body">
                                <div class="text-center">

                                    <img class="border" width="200" src="img/about_img/<?= $after_assoc['about_img'] ?>" alt="Not found">
                                    <?php

                                    if (mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['about_img'] != "default.png") :
                                    ?>
                                        <br>
                                        <a style="mt-3px" href="about_img_delete_post.php?pic_name=<?= $after_assoc['about_img'] ?> " class="btn btn-danger">Delete Now</a>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                                <form action="about_img_post.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New profile photo </label>
                                        <input type="file" class="form-control" name="about_img">
                                        <?php
                                        if (isset($_SESSION['status'])) {
                                        ?>
                                            <div class="alert alert-success">
                                                <?php
                                                echo $_SESSION['status'];
                                                unset($_SESSION['status']);
                                                ?>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_SESSION['del'])) {
                                        ?>
                                            <div class="alert alert-danger">
                                                <?php
                                                echo $_SESSION['del'];
                                                unset($_SESSION['del']);
                                                ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <button type="submit" class="btn btn-success ">Change Profile photo</button>

                                </form>
                                <?php
                                if (isset($_SESSION['profile_photo_change'])) {
                                ?>
                                    <div class="alert alert-success mt-5">

                                        <?php
                                        echo $_SESSION['profile_photo_change'];
                                        unset($_SESSION['profile_photo_change']);
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div>

<?php
include_once 'includes/footer-starlight.php';
?>