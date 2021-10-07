<?php require_once('./includes/header.php'); ?>

    <body class="nav-fixed">
        <?php require_once('./includes/top-navbar.php'); ?>
        

        <!--Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php 
                    $curr_page = basename(__FILE__);
                    require_once("./includes/left-sidebar.php");
                ?>
            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="activity"></i></div>
                                    <span>Dashboard</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Table-->
                    <div class="container-fluid mt-n10">

                    <!--Card Primary-->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <p>All Posts</p>
                                    <?php 
                                        $sql = "SELECT * FROM applicant";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $post_count = $stmt->rowCount();
                                    ?>
                                    <p><?php echo $post_count; ?></p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="all-post.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <p>Users</p>
                                    <?php 
                                        $sql = "SELECT * FROM users";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $user_count = $stmt->rowCount();
                                    ?>
                                    <p><?php echo $user_count; ?></p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="users.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Card Primary-->

                        <div class="card mb-4">
                            <div class="card-header">Most Popular Posts:</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Job Title</th>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Middlename</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Zipcode</th>
                                                <th>Day_phone</th>
                                                <th>Even_phone</th>
                                                <th>Email</th>
                                                <th>Language</th>
                                                <th>registration_number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM applicant ";
                                                $stmt = $pdo->prepare($sql);
                                                $stmt->execute();
                                                while($applicant = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                    // post_id, post_title, post_views, post_image, post_date, post_author, post_category_id, category_name
                                                    $applicant_id = $applicant['applicant_id'];
                                                    $applicant_job_title = $applicant['applicant_job_title'];
                                                    $firstname = $applicant['firstname'];
                                                    $lastname = $applicant['lastname'];
                                                    $middlename = $applicant['middlename'];
                                                    $address = $applicant['address'];
                                                    $city = $applicant['city'];
                                                    $state = $applicant['state'];
                                                    $zipcode = $applicant['zipcode'];
                                                    $day_phone = $applicant['day_phone'];
                                                    $even_phone = $applicant['even_phone'];
                                                    $email = $applicant['email'];
                                                    $language = $applicant['language'];
                                                    $registration_number = $applicant['registration_number'];
                                                     ?>
                                                        <tr>
                                                            <td><?php echo $applicant_id; ?></td>
                                                            <td>
                                                                <a href="./details.php?applicant_id=<?php echo $applicant_id; ?>" target="_blank">
                                                                    <?php echo $applicant_job_title; ?>
                                                                </a>
                                                            </td>
                                                            <td><?php echo $firstname; ?></td>
                                                            <td><?php echo $lastname; ?></td>
                                                            <td><?php echo $middlename; ?></td>
                                                            <td><?php echo $address; ?></td>
                                                            <td><?php echo $city; ?></td>
                                                            <td><?php echo $state; ?></td>
                                                            <td><?php echo $zipcode; ?></td>
                                                            <td><?php echo $day_phone; ?></td>
                                                            <td><?php echo $even_phone; ?></td>
                                                            <td><?php echo $email; ?></td>
                                                            <td><?php echo $language; ?></td>
                                                            <td><?php echo $registration_number; ?></td>
                                                            
                                                        </tr> 
                                                <?php }
                                            ?>
                                                 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Table-->

                </main>


<?php require_once('./includes/footer.php'); ?>