<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
//Shocase
$all_services_query = "SELECT * FROM services_skills";
$all_data_from_db_services_skills = mysqli_query($db_connect, $all_services_query);

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
                                    <h2 class="text-dark">Services Skills</h2>
                                </div>

                                <div class="card-body">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Data value</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Change Data value</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($all_data_from_db_services_skills as $data) :
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?= $data['id'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['skills_title'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['data_value'] ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($data['status'] == 'active') :
                                                        ?>
                                                            <span class="badge badge-success">
                                                                <?= $data['status'] ?>
                                                            </span>
                                                            <a href="service_skills_change.php?id=<?= $data['id'] ?>&what_to_do=deactive" class="btn btn-small btn-info">Make as Deactive</a>
                                                        <?php
                                                        else :
                                                        ?>
                                                            <span class="badge badge-danger">
                                                                <?= $data['status'] ?>
                                                            </span>
                                                            <a href="service_skills_change.php?id=<?= $data['id'] ?>&what_to_do=active" class="btn btn-small btn-warning">Make as Active</a>
                                                        <?php
                                                        endif;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <form action="skills_value_post.php?id=<?= $data['id'] ?>" method="POST">

                                                            <input type="number" name="vol" min="0" max="100">
                                                            <input type="submit">
                                                        </form>

                                                    </td>

                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>
                                            <?php
                                            if (isset($_SESSION['value_change'])) {
                                            ?>
                                                <div class="alert alert-success">
                                                    <?php
                                                    echo $_SESSION['value_change'];
                                                    unset($_SESSION['value_change']);
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

                                <div class="card-header bg-info">Add Skills
                                </div>
                                <form action="service_skills_post.php" method="POST">
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
                                            <label for="exampleInputPassword1">Skills Title</label>
                                            <input type="text" class="form-control" name="skills_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Data Value</label>
                                            <input type="number" class="form-control" name="data_value">
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