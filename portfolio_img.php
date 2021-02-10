<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
$all_tes_query_img = "SELECT * FROM portfolio_img";
$all_data_from_db_portfolio_img = mysqli_query($db_connect, $all_tes_query_img);

$all_tes_query_img_animation = "SELECT * FROM portfolio_img_animation";
$all_data_from_db_portfolio_img_animation = mysqli_query($db_connect, $all_tes_query_img_animation);

?>
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="portfolio_img.php">Portfolio Images</a>
        <span class="breadcrumb-item active">Portfolio Image </span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Portfolio Image</h5>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card text-white bg-dark mb-3 ">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">
                                    <h4 class="text-dark">Portfolio Image</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Portfolio Image</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($all_data_from_db_portfolio_img as $data) :
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?= $data['id'] ?>
                                                    </td>
                                                    <td>
                                                        <img src="img/portfolio_img/<?= $data['img'] ?>" alt="" style="width: 100px;">
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($data['status'] == 'active') :
                                                        ?>
                                                            <span class="badge badge-success">
                                                                <?= $data['status'] ?>
                                                            </span>
                                                            <a href="portfolio_img_change.php?id=<?= $data['id'] ?>&what_to_do=deactive" class="btn btn-small btn-info">Deactive</a>
                                                        <?php
                                                        else :
                                                        ?>
                                                            <span class="badge badge-danger">
                                                                <?= $data['status'] ?>
                                                            </span>
                                                            <a href="portfolio_img_change.php?id=<?= $data['id'] ?>&what_to_do=active" class="btn btn-small btn-warning">Active</a>
                                                        <?php
                                                        endif;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="portfolio_img_delete.php?id=<?= $data['id'] ?>" class="btn btn-small btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php
                                            endforeach;
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
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card text-white bg-dark mb-3 mt-3">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">Add Portfolio Images
                                </div>
                                <form action="portfolio_img_post.php" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <?php
                                        if (isset($_SESSION['status'])) :
                                        ?>
                                            <div class="alert alert-success">
                                                <?= $_SESSION['status'] ?>
                                                <?php
                                                unset($_SESSION['status']);
                                                ?>
                                            </div>
                                        <?php
                                        endif;
                                        ?>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">New Portfolio Images </label>
                                            <input type="file" class="form-control" name="portfolio_img">
                                        </div>

                                        <button type="submit" class="btn btn-success "> Add Portfolio Images</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card text-white bg-dark mb-3 ">
                        <div class="card-mb-3">

                            <div class="card-header bg-info">
                                <h4 class="text-dark">Portfolio Animation Image</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Portfolio Animation Image</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($all_data_from_db_portfolio_img_animation as $data_animation) :
                                        ?>
                                            <tr>
                                                <td>
                                                    <?= $data_animation['id'] ?>
                                                </td>
                                                <td>
                                                    <img src="img/portfolio_img/animation/<?= $data_animation['img_animation'] ?>" alt="" style="width: 100px;">
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($data_animation['status'] == 'active') :
                                                    ?>
                                                        <span class="badge badge-success">
                                                            <?= $data_animation['status'] ?>
                                                        </span>
                                                        <a href="portfolio_img_animation_change.php?id=<?= $data_animation['id'] ?>&what_to_do=deactive" class="btn btn-small btn-info">Deactive</a>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <span class="badge badge-danger">
                                                            <?= $data_animation['status'] ?>
                                                        </span>
                                                        <a href="portfolio_img_animation_change.php?id=<?= $data_animation['id'] ?>&what_to_do=active" class="btn btn-small btn-warning">Active</a>
                                                    <?php
                                                    endif;
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="portfolio_img_animation_delete.php?id=<?= $data_animation['id'] ?>" class="btn btn-small btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        if (isset($_SESSION['animation'])) {
                                        ?>
                                            <div class="alert alert-danger">
                                                <?php
                                                echo $_SESSION['animation'];
                                                unset($_SESSION['animation']);
                                                ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card text-white bg-dark mb-3 mt-3">
                        <div class="card-mb-3">

                            <div class="card-header bg-info">Add Portfolio Animation Images
                            </div>
                            <form action="portfolio_animation_post.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['animationn'])) :
                                    ?>
                                        <div class="alert alert-success">
                                            <?= $_SESSION['animationn'] ?>
                                            <?php
                                            unset($_SESSION['animationn']);
                                            ?>
                                        </div>
                                    <?php
                                    endif;
                                    ?>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Portfolio Images Animation </label>
                                        <input type="file" class="form-control" name="portfolio_animation_img">
                                    </div>

                                    <button type="submit" class="btn btn-success "> Add Portfolio Animation Images </button>
                            </form>
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