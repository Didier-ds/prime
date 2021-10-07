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
                    <div class="page-header pb-6 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="activity"></i></div>
                                    <span>Applicant</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Table-->
                    <?php
                        if (isset($_GET['applicant_id'])) {
                            $applicant_id =  $_GET['applicant_id'];
                            $sql = "SELECT * FROM applicant WHERE applicant_id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                'id' => $applicant_id
                            ]);
                            $post_count = $stmt->rowCount();
                            if($post_count > 0){
                            $applicant = $stmt->fetch(PDO::FETCH_ASSOC);
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
                            }

                            $sql = "SELECT * FROM education WHERE applicant_id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                'id' => $applicant_id
                            ]);
                            $post_count = $stmt->rowCount();
                            if($post_count > 0){
                                $education = $stmt->fetch(PDO::FETCH_ASSOC);
                                $school_name = $education['school_name'];
                                $school_location = $education['school_location'];
                                $is_a_schoolGraduate = $education['is_a_schoolGraduate'];
                                $college_name = $education['collegeName'];
                                $college_location = $education['school_location'];
                                $is_a_collegeGraduate = $education['is_a_collegeGraduate'];
                                $college_degree = $education['college_degree'];
                                $others = $education['others'];
                            }
                            else {}
                            $sql = "SELECT * FROM health WHERE applicant_id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                'id' => $applicant_id
                            ]);
                            $post_count = $stmt->rowCount();
                            if($post_count > 0){
                            $health = $stmt->fetch(PDO::FETCH_ASSOC);
                            $lift_lbs = $health['lift_lbs'];
                            $mental_limit = $health['mental_limit'];
                            }
                            else {}
                            $sql = "SELECT * FROM confidentiality WHERE applicant_id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                'id' => $applicant_id
                            ]);
                            $post_count = $stmt->rowCount();
                            if($post_count > 0){
                            $confidentiality = $stmt->fetch(PDO::FETCH_ASSOC);
                            $investigation = $confidentiality['investigation'];
                            $process = $confidentiality['process'];
                            $termination = $confidentiality['termination'];
                            $rules = $confidentiality['rules'];
                            $valid = $confidentiality['valid'];
                            }
                            else {
                                $investigation = '';
                            $process = '';
                            $termination = '';
                            $rules = '';
                            $valid = '';
                            }

                            $sql = "SELECT * FROM criminal WHERE applicant_id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                'id' => $applicant_id
                            ]);
                            $post_count = $stmt->rowCount();
                            if($post_count > 0){
                            $criminal = $stmt->fetch(PDO::FETCH_ASSOC);
                            $convicted_misdeanor = $criminal['convicted_misdeanor'];
                            $convicted_felony = $criminal['convicted_felony'];
                            $fingerprints = $criminal['fingerprints'];
                            }
                            else {}
                            $sql = "SELECT * FROM signature WHERE applicant_id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                'id' => $applicant_id
                            ]);
                            $post_count = $stmt->rowCount();
                            if($post_count > 0){
                            $signature = $stmt->fetch(PDO::FETCH_ASSOC);
                            $signature_ = $signature['signature'];
                            $date = $signature['date'];
                            }
                            else {}
                        }
                    ?>
                    <!--Card Primary-->
                            <p>First Name: <?php echo $firstname ?></p>
                            <p>Last Name: <?php echo $lastname ?></p>
                            <p>Middlename: <?php echo $middlename?></p>
                            <p>Job Title: <?php echo $applicant_job_title ?></p>
                            <p>Address: <?php echo $address?></p>
                            <p>City: <?php echo $city ?></p>
                            <p>State: <?php echo $state ?></p>
                            <p>Zipcode: <?php echo $zipcode ?></p>
                            <p>Day Phone: <?php echo $day_phone ?></p>
                            <p>Even Phone: <?php echo $even_phone ?></p>
                            <p>email: <?php echo $email ?></p>
                            <p>Language: <?php echo $language ?></p>
                            <p>Registration Number: <?php echo $registration_number ?></p>
                            <p>I <?php echo $investigation ?>  authorize Company to verify the information I have provided and to make any investigation of my background deemed necessary as well as authorizing third parties (e.g. former employers, law enforcement organizations, financial situations, and educational situations) to provide information about me to the Company.</p>
                            <p>I <?php echo $process ?> agree if employed by Company, to sign and comply with further agreements in order to fulfill my employment process, which may include all legaly permissible medical examinations and drug/alcohol screenings required by the company.</p>
                            <p>I <?php echo $termination ?> understand that employment with Company is at will and that either I or the company can terminate any employment and compensation with or without cause and notice at any time. I acknowledge that no representations, either oral or written, have been made to me to the contrary and that any pre-existing understandings that may contradict an at-will status of employment are canceled.</p>
                            <p>I <?php echo $rules ?> agree that in consideration of my employment, I agree to conform to the rules and policies of Company.</p>
                            <p>I <?php echo $valid ?> truthfully state that the information provided above is correct and valid. I have reviewed and completed all fields and materials. This information will be solely used for the purposes of Company, and whom they seem fit to contact. By signing this application, I understand that if there are any missing fields and materials or if the information provided is found to be incorrect or invalid, my application may be denied.</p>
                            <h2>Signature</h2>
                            
                            <div class="signature_preview" ><span  id="sign_canvas"><?php echo $signature_ ?></span></div>
                            <p><?php echo $date ?></p>

                        <div class="card mb-4">
                            <div class="card-header">Emergency:</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>relationship</th>
                                                <th>day_phone</th>
                                                <th>even_phone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM emergency WHERE applicant_id = :id";
                                                $stmt = $pdo->prepare($sql);
                                                $stmt->execute([
                                                    'id' => $applicant_id
                                                ]);
                                                while($emergency = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                    // post_id, post_title, post_views, post_image, post_date, post_author, post_category_id, category_name
                                                    $name = $emergency['name'];
                                                    $relationship = $emergency['relationship'];
                                                    $day_phone = $emergency['day_phone'];
                                                    $even_phone = $emergency['even_phone'];
                                                     ?>
                                                        <tr>
                                                            <td><?php echo $name; ?></td>
                                                            <td><?php echo $relationship; ?></td>
                                                            <td><?php echo $day_phone; ?></td>
                                                            <td><?php echo $even_phone; ?></td>
                                                        </tr> 
                                                <?php }
                                            ?>
                                                 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">Reference:</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>relationship</th>
                                                <th>day_phone</th>
                                                <th>even_phone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM reference WHERE applicant_id = :id";
                                                $stmt = $pdo->prepare($sql);
                                                $stmt->execute([
                                                    'id' => $applicant_id
                                                ]);
                                                while($reference = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                    // post_id, post_title, post_views, post_image, post_date, post_author, post_category_id, category_name
                                                    $name = $reference['name'];
                                                    $relationship = $reference['relationship'];
                                                    $day_phone = $reference['day_phone'];
                                                    $even_phone = $reference['even_phone'];
                                                     ?>
                                                        <tr>
                                                            <td><?php echo $name; ?></td>
                                                            <td><?php echo $relationship; ?></td>
                                                            <td><?php echo $day_phone; ?></td>
                                                            <td><?php echo $even_phone; ?></td>
                                                        </tr> 
                                                <?php }
                                            ?>
                                                 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">Experience:</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Employed From</th>
                                                <th>Employed To</th>
                                                <th>Hours Perweek</th>
                                                <th>Salary perWeek</th>
                                                <th>Job title</th>
                                                <th>Supervisor</th>
                                                <th>Number</th>
                                                <th>Describe Work</th>
                                                <th>Reason for leaving</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM experience WHERE applicant_id = :id";
                                                $stmt = $pdo->prepare($sql);
                                                $stmt->execute([
                                                    'id' => $applicant_id
                                                ]);
                                                while($experience = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                    // post_id, post_title, post_views, post_image, post_date, post_author, post_category_id, category_name
                                                    $name = $experience['employer_name'];
                                                    $location = $experience['location'];
                                                    $employed_from = $experience['employed_from'];
                                                    $employed_to = $experience['employed_to'];
                                                    $hours_perWeek = $experience['hours_perWeek'];
                                                    $salary_perWeek = $experience['salary_perWeek'];
                                                    $job_title = $experience['job_title'];
                                                    $supervisor = $experience['supervisor'];
                                                    $number = $experience['number'];
                                                    $describe_work = $experience['describe_work'];
                                                    $reason_leaving = $experience['reason_leaving'];
                                                     ?>
                                                        <tr>
                                                            <td><?php echo $name; ?></td>
                                                           
                                                   <td><?php echo  $location?></td> 
                                                   <td><?php echo $employed_from?></td> 
                                                   <td><?php echo $employed_to ?></td> 
                                                   <td><?php echo $hours_perWeek?></td> 
                                                   <td><?php echo $salary_perWeek?></td>  
                                                   <td><?php echo $job_title?></td> 
                                                   <td><?php echo $supervisor?></td> 
                                                   <td><?php echo $number?></td>  
                                                   <td><?php echo $describe_work?></td> 
                                                   <td><?php echo $reason_leaving?></td>
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
             </div>
        </div>

<?php require_once('./includes/footer.php'); ?>