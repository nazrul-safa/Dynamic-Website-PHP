<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
//Shocase
$all_services_query = "SELECT * FROM services_box";
$all_data_from_db_services_box = mysqli_query($db_connect, $all_services_query);

?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="service_box.php">Services Box</a>
        <span class="breadcrumb-item active">Add Services </span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Add Skills</h5>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card text-white bg-dark mb-3 mt-3">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">
                                    <h2 class="text-dark">Services</h2>
                                </div>

                                <div class="card-body">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($all_data_from_db_services_box as $data) :
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?= $data['id'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['services_box_title'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['services_box_des'] ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($data['status'] == 'active') :
                                                        ?>
                                                            <span class="badge badge-success">
                                                                <?= $data['status'] ?>
                                                            </span>
                                                            <a href="service_box_change.php?id=<?= $data['id'] ?>&what_to_do=deactive" class="btn btn-small btn-info">Make as Deactive</a>
                                                        <?php
                                                        else :
                                                        ?>
                                                            <span class="badge badge-danger">
                                                                <?= $data['status'] ?>
                                                            </span>
                                                            <a href="service_box_change.php?id=<?= $data['id'] ?>&what_to_do=active" class="btn btn-small btn-warning">Make as Active</a>
                                                        <?php
                                                        endif;
                                                        ?>
                                                    </td>

                                                </tr>
                                            <?php
                                            endforeach;
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

                                <div class="card-header bg-info">Add Services
                                </div>
                                <form action="service_box_post.php" method="POST">
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
                                            <label for="exampleInputPassword1">Title</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Description</label>
                                            <textarea name="des" class="form-control" rows="4"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-success "> Add Services</button>
                                </form>

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