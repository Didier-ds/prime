<?php require_once('includes/header.php') ?>
<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Primetime Home Health Services</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="revolution/css/layers.css">
    <link rel="stylesheet" href="revolution/css/settings.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--owl.carousel-->
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <!--animation-->
    <link rel="stylesheet" href="assets/animation/animate.css">
    <!--logo-->
    <link rel="icon" href="assets/image/Facvicon.png" sizes="32x32" />

    <!-- <link rel="stylesheet" href="css/intlTelInput.css"> -->
    <link rel="stylesheet" href="assets/css/style.min.css?ver23asas">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/media.min.css?ver24as">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="assets/css/datepicker.min.css">
    <!-- <link rel="stylesheet" href="css/jquery.datepick.min.css" type="text/css" media="screen" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/proweaverPhone.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/flag.min.css" type="text/css" />

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="assets/jquery.signaturepad.css" rel="stylesheet">
    <style>
        /* body { font-family: 'Muli', sans-serif; }
			::placeholder { font-family: 'Muli', sans-serif;}
			::-moz-placeholder { font-family: 'Muli', sans-serif; }
			::-webkit-input-placeholder { font-family: 'Muli', sans-serif; }
			:-ms-input-placeholder { font-family: 'Muli', sans-serif;}
			input.form_field, textarea.form_field, select.form_field { font-family: 'Muli', sans-serif;} */
        @import url('https://fonts.googleapis.com/css2?family=Sacramento&display=swap');

        body {
            font-family: 'Rubik', sans-serif;
        }

        ::placeholder {
            font-family: 'Rubik', sans-serif;
        }

        ::-moz-placeholder {
            font-family: 'Rubik', sans-serif;
        }

        ::-webkit-input-placeholder {
            font-family: 'Rubik', sans-serif;
        }

        :-ms-input-placeholder {
            font-family: 'Rubik', sans-serif;
        }

        input.form_field,
        textarea.form_field,
        select.form_field {
            font-family: 'Rubik', sans-serif;
        }


        #icon {
            position: absolute;
            padding: 7px 39px 10px 10px;
            background: #cbae2c;
            height: 60px;
            color: #fff;
            font-size: 31px;
            z-index: 20;
        }

        .fa-dollar-sign::before {
            content: "\f155";
            position: relative;
            left: 13px;
            top: 5px;
        }

        .signature_preview {
            /* border:1px solid grey;  */
            font-size: 5em;
            color: #033333;
            border-radius: 5px;
            font-family: 'Sacramento', cursive;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: .8em;
            margin: 0 auto;
            box-shadow: 0 1px 22px rgb(157 184 209 / 19%)
        }

        @media (min-width: 768px) {
            .signature_preview {
                width: 50%;
            }
        }

        body {
            font-family: Rubik;
        }

        .main.fieldbox {
            margin-bottom: 30px;
        }

        .fieldbox {
            margin: 10px 0;
        }

        .fieldheader p {
            margin: 0;
            margin-bottom: 0px;
            margin-bottom: 0px;
            background: #F1F1F1;
            padding: 8px;
            font-family: 'Jost', 'sans-serif';
            color: #333;
            text-align: center;
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 20px;
            text-transform: uppercase;
            border: 1px solid #d0d0d0;
        }

        .fieldcontent {
            padding: 20px;
            border: 3px solid #f1f1f1;
            border-top: 0;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        hr {
            color: #ccc;
        }

        .formhead {
            background: #43a9d6;
            color: white;
            text-align: center;
            font-size: 17px;
            padding: 10px;
            font-weight: bold;
            margin: 15px 0px;
            text-transform: uppercase;
        }

        .formhead span {
            text-transform: none;
            font-size: 15px;
            font-weight: normal;
        }

        @media only screen and (max-width: 850px) {

            strong,
            b {
                font-weight: bold;
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 780px) {

            strong,
            b {
                font-weight: bold;
                font-size: 16px;
            }
        }


        th {
            border: 1px solid;
        }

        #daysOfWeek {
            width: 100%;
            border: 1px solid;
            padding: 5px;
            border-collapse: collapse;
            border-spacing: 0;
            margin: 10px 0;
        }

        #daysOfWeek thead {
            padding: 0;
            margin: 0;
            text-align: center;
            border: 1px solid;
        }

        #daysOfWeek td {
            overflow: hidden;
            position: relative;
        }

        #daysOfWeek tbody td {
            border: 1px solid;
        }

        #daysOfWeek input {
            width: 100%;
            border: 0 !important;
            padding: 10px 5px;
        }

        #daysOfWeek td input+.datepick-trigger {
            position: absolute;
            z-index: 1;
            right: 5px;
            top: 90%;
        }

        .datepick-trigger {
            margin-top: -20px !important;
        }

        p.error {
            color: #f00;
            font-weight: 700;
        }

        .tile {
            text-align: center;
            font-weight: 700;
        }

        .days th {
            padding: 6px;
        }

        .firstth th {
            padding: 10px 0;
        }


        .group.singleradio td {
            display: block;
            width: 100% !important;
        }

        .pad {
            position: relative;
            cursor: url("../images/pen.cur"), crosshair;
            cursor: url("../images/pen.cur") 16 16, crosshair;
            -ms-touch-action: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            border: 1px solid #CECECE;
            height: 65px;
        }

        .clearButton {
            top: 0;
            position: absolute;
            left: 0;
            font-size: 0.75em;
            line-height: 1.375;
        }

        .sig {}

        .sig small {
            color: #f00;
            font-size: 20px;
            font-weight: bold;
        }

        input[type=checkbox] {
            transform: scale(1.5);
            -webkit-appearance: checkbox;
            -moz-appearance: checkbox;
            appearance: checkbox;
        }

        .refer input[type="text"] {
            width: 30%;
            border: none;
            border-bottom: 1px solid #000;
            font-size: 16px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="header downscrolled clearfix">
        <div id="header">
            <div id="site-header">
                <div class="logo">
                    <a href="index.php">
                        <img class="logo-a" src="assets/image/LogoDark.png" alt="image">
                    </a>
                </div>
                <!-- //mobile menu button -->
                <div class="nav-wrap">
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li>
                                <a href="index.php" title="">Home</a>
                                <!-- <ul class="sub-menu">
									<li class="active"><a href="index.php" title="">Home 01</a></li>
									<li><a href="home2.php" title="">Home 02</a></li>
								</ul>
								/.sub-menu -->
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about-us.php" title="">About Us</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.php" title="">About</a></li>
                                    <li><a href="doctor.php" title="">Doctor</a></li>
                                    <!-- <li><a href="doctor-details.php" title="">Doctor Details</a></li> -->
                                    <!-- <li><a href="pricing-table.php" title="">Our Pricing</a></li>
									<li><a href="gallery.php" title="">Gallery</a></li>
									<li><a href="faq.php" title="">FAQ</a></li>-->
                                </ul>
                                <!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="services.php" title="">Services</a>
                                <!--<ul class="sub-menu">
									<li><a href="services.php" title="">Services</a></li>
									<li><a href="service-details.php" title="">Services Details</a></li>
								</ul>
								 /.sub-menu -->
                            </li>
                            <li>
                                <a href="Resources.php" title="">Resources</a>
                                <!--<ul class="sub-menu">
									<li><a href="blog-standard.php" title="">Blog Standard</a></li>
									<li><a href="blog-details.php" title="">Blog Details</a></li>
								</ul>
								/.sub-menu-->
                            </li>
                            <li>
                                <a href="CareersForm.php" title="">Careers</a>
                            </li>
                            <li>
                                <a href="contact.php" title="">Contact us</a>
                            </li>
                        </ul>
                        <!-- /.menu -->
                    </nav>
                </div>
                <!-- /#mainnav -->
                <div class="contact">
                    <div class="top-bar-right">
                        <div class="call-us">
                            <div class="icon-call-us"></div>
                            <div class="content-call-us">
                                <p>Call Us</p>
                                <a href="tel:360-779-2228" class="font-bold text-color-title-sidebar">360-779-2228</a>
                            </div>
                        </div>
                        <!-- <div class="button-header">
							<a href="book-appointment.php" class="themesflat-button bg-accent btn-header"><span>Get Appointment</span></a>
						</div> -->
                    </div>
                </div>

                <div class="btn-menu">
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <div class="clearfix">
        <div class="wrapper">
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="115" data-mobile="20" data-smobile="20"></div>
            </div>
            <div id="contact_us_form_1" class="template_form">
                <div class="form_frame_b">
                    <div class="form_content">

                        <?php if (isset($_POST['submit'])) {
                            $applicant_id = uniqid();
                            $applicant_job_title = $_POST['Applicant_Job_Title'];
                            $firstname =  $_POST['First_Name'];
                            $lastname =  $_POST['Last_Name'];
                            $middlename = $_POST['Middle_Name'];
                            $address = $_POST['Address'];
                            $city = $_POST['City'];
                            $state =  $_POST['State'];
                            $zipcode =  $_POST['ZIP_Code'];
                            $day_phone =  $_POST['Day_Phone'];
                            $even_phone = $_POST['Evening_Phone'];
                            $email =  $_POST['Email_Address'];
                            $employment_desired =  $_POST['employment_desired'];
                             $hours_desired =  $_POST['hours_desired'];
                            $language =  $_POST['Languages_Spoken_or_Written'];
                            $registration_number = $_POST['Registration_Number_with_Department_of_Social_Services'];

                            $sql = "INSERT INTO applicant (applicant_id, applicant_job_title, firstname, lastname, middlename, day_phone, even_phone, email, language, address, city, state, zipcode, employment_desired, hours_desired, registration_number) VALUES 
                                 (:applicant_id, :applicant_job_title, :firstname, :lastname, :middlename, :address, :city, :state, :zipcode, :day_phone, :even_phone, :email, :language,:employment_desired, :hours_desired, :registration_number)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id'    => $applicant_id,
                                ':applicant_job_title'    => $applicant_job_title,
                                ':firstname'    => $firstname,
                                ':lastname'    => $lastname,
                                ':middlename'    => $middlename,
                                ':address'    => $address,
                                ':city'    => $city,
                                ':state'    => $state,
                                ':zipcode'    => $zipcode,
                                ':day_phone'    => $day_phone,
                                ':even_phone'    => $even_phone,
                                ':email'    => $email,
                                ':language'    => $language,
                                ':employment_desired' => $employment_desired,
                                ':hours_desired' => $hours_desired,
                                ':registration_number'    => $registration_number
                            ]);

                            $school_name = $_POST['High_School_Name'];
                            $school_location = $_POST['State_or_Country'];
                            $is_a_schoolGraduate = $_POST['Graduate'];
                            $collegeName = $_POST['College_Name'];
                            $collegeLocation = $_POST['State_or_Country_'];
                            $is_a_collegeGraduate = $_POST['Graduate_'];
                            $college_degree =  $_POST['Type_of_Degree'];
                            $others =  $_POST['Other_or_Licenses'];


                            $sql = "INSERT INTO education (applicant_id, school_name, school_location, is_a_schoolgraduate, collegeName, is_a_collegeGraduate, collegeLocation, college_degree, others) VALUES 
                                  (:applicant_id, :school_name, :school_location, :is_a_schoolgraduate, :collegeName, :is_a_collegeGraduate, :collegeLocation, :college_degree, :others)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([

                                ':applicant_id' => $applicant_id,
                                ':school_name' => $school_name,
                                ':school_location' => $school_location,
                                ':is_a_schoolgraduate' => $is_a_schoolGraduate,
                                ':collegeName' => $collegeName,
                                ':is_a_collegeGraduate' => $is_a_collegeGraduate,
                                ':collegeLocation' => $collegeLocation,
                                ':college_degree' => $college_degree,
                                ':others' => $others

                            ]);
                            
                            $employer_name =  $_POST['Employer_Name'];
                            $location = $_POST['Location'];
                            $employed_from = $_POST['From'];
                            $employed_to = $_POST['To'];
                            $hours_perWeek =  $_POST['Hours_per_Week'];
                            $salary_perWeek = $_POST['Salary_or_Rate_per_hour'];
                            $job_title = $_POST['Job_Title'];
                            $supervisor =  $_POST['Supervisor'];
                            $number =  $_POST['Number'];
                            $describe_work = $_POST['Describe_Work'];
                            $reason_leaving = $_POST['Reason_for_leaving'];

                            $sql = "INSERT INTO experience (applicant_id, employer_name, location, employed_from, employed_to, hours_perWeek, salary_perWeek, job_title, supervisor, number, describe_work, reason_leaving) VALUES
                                    (:applicant_id, :employer_name,:location, :employed_from, :employed_to, :hours_perWeek, :salary_perWeek, :job_title, :supervisor, :number, :describe_work, :reason_leaving)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':employer_name' => $employer_name,
                                ':location' => $location,
                                ':employed_from' => $employed_from,
                                ':employed_to' => $employed_to,
                                ':hours_perWeek' => $hours_perWeek,
                                ':salary_perWeek' => $salary_perWeek,
                                ':job_title' => $job_title,
                                ':supervisor' => $supervisor,
                                ':number' => $number,
                                ':describe_work' => $describe_work,
                                ':reason_leaving' => $reason_leaving
                            ]);

                            $employer_name =  $_POST['Employer_Name1'];
                            $location = $_POST['Location1'];
                            $employed_from = $_POST['From1'];
                            $employed_to = $_POST['To1'];
                            $hours_perWeek =  $_POST['Hours_per_Week1'];
                            $salary_perWeek = $_POST['Salary_or_Rate_per_hour1'];
                            $job_title = $_POST['Job_Title1'];
                            $supervisor =  $_POST['Supervisor1'];
                            $number =  $_POST['Number1'];
                            $describe_work = $_POST['Describe_Work1'];
                            $reason_leaving = $_POST['Reason_for_leaving1'];

                            $sql = "INSERT INTO experience (applicant_id, employer_name, location, employed_from, employed_to, hours_perWeek, salary_perWeek, job_title, supervisor, number, describe_work, reason_leaving) VALUES
                                       (:applicant_id, :employer_name,:location, :employed_from, :employed_to, :hours_perWeek, :salary_perWeek, :job_title, :supervisor, :number, :describe_work, :reason_leaving)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':employer_name' => $employer_name,
                                ':location' => $location,
                                ':employed_from' => $employed_from,
                                ':employed_to' => $employed_to,
                                ':hours_perWeek' => $hours_perWeek,
                                ':salary_perWeek' => $salary_perWeek,
                                ':job_title' => $job_title,
                                ':supervisor' => $supervisor,
                                ':number' => $number,
                                ':describe_work' => $describe_work,
                                ':reason_leaving' => $reason_leaving
                            ]);
                            $employer_name =  $_POST['Employer_Name2'];
                            $location = $_POST['Location2'];
                            $employed_from = $_POST['From2'];
                            $employed_to = $_POST['To2'];
                            $hours_perWeek =  $_POST['Hours_per_Week2'];
                            $salary_perWeek = $_POST['Salary_or_Rate_per_hour2'];
                            $job_title = $_POST['Job_Title2'];
                            $supervisor =  $_POST['Supervisor2'];
                            $number =  $_POST['Number2'];
                            $describe_work = $_POST['Describe_Work2'];
                            $reason_leaving = $_POST['Reason_for_leaving2'];

                            $sql = "INSERT INTO experience (applicant_id, employer_name, location, employed_from, employed_to, hours_perWeek, salary_perWeek, job_title, supervisor, number, describe_work, reason_leaving) VALUES
                                       (:applicant_id, :employer_name,:location, :employed_from, :employed_to, :hours_perWeek, :salary_perWeek, :job_title, :supervisor, :number, :describe_work, :reason_leaving)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':employer_name' => $employer_name,
                                ':location' => $location,
                                ':employed_from' => $employed_from,
                                ':employed_to' => $employed_to,
                                ':hours_perWeek' => $hours_perWeek,
                                ':salary_perWeek' => $salary_perWeek,
                                ':job_title' => $job_title,
                                ':supervisor' => $supervisor,
                                ':number' => $number,
                                ':describe_work' => $describe_work,
                                ':reason_leaving' => $reason_leaving
                            ]);
                            $lift_lbs =  $_POST['Can_you_lift_at_least_65_lbs'];
                            $mental_limit = $_POST['mental_limitation'];
                            $sql = "INSERT INTO health (applicant_id, lift_lbs, mental_limit) VALUES (:applicant_id, :lift_lbs, :mental_limit)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':lift_lbs' => $lift_lbs,
                                ':mental_limit' => $mental_limit
                            ]);

                            $convicted_misdeanor =  $_POST['Have_you_ever_been_convicted_of_a_misdemeanor'];
                            $convicted_felony =  $_POST['Have_you_ever_been_convicted_of_a_felony'];
                            $fingerprints = $_POST['fingerprint'];
                            $sql = "INSERT INTO criminal (applicant_id, convicted_misdeanor, convicted_felony, fingerprints) VALUES (:applicant_id, :convicted_misdeanor, :convicted_felony, :fingerprints)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':convicted_misdeanor' => $convicted_misdeanor,
                                ':convicted_felony' => $convicted_felony,

                                ':fingerprints' => $fingerprints
                            ]);

                            $name = $_POST['Name'];
                            $relationship = $_POST['Relationship'];
                            $day_phone = $_POST['Day_Phone_Number'];
                            $even_phone =  $_POST['Evening_Phone_Number'];

                            $sql = "INSERT INTO emergency (applicant_id, name, relationship, day_phone, even_phone) VALUES (:applicant_id, :name, :relationship, :day_phone, :even_phone)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':name' => "$name",
                                ':relationship' => $relationship,
                                ':day_phone' => $day_phone,
                                ':even_phone' => $even_phone
                            ]);

                            $name = $_POST['Name_'];
                            $relationship = $_POST['Relationship_'];
                            $day_phone = $_POST['Day_Phone_Number_'];
                            $even_phone =  $_POST['Evening_Phone_Number_'];

                            $sql = "INSERT INTO emergency (applicant_id, name, relationship, day_phone, even_phone) VALUES (:applicant_id, :name, :relationship, :day_phone, :even_phone)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':name' => "$name",
                                ':relationship' => $relationship,
                                ':day_phone' => $day_phone,
                                ':even_phone' => $even_phone
                            ]);

                            $name = $_POST['Name__'];
                            $relationship = $_POST['Relationship__'];
                            $day_phone = $_POST['Day_Phone_Number__'];
                            $even_phone =  $_POST['Evening_Phone_Number__'];

                            $sql = "INSERT INTO reference (applicant_id, name, relationship, day_phone, even_phone) VALUES (:applicant_id, :name, :relationship, :day_phone, :even_phone)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':name' => "$name",
                                ':relationship' => $relationship,
                                ':day_phone' => $day_phone,
                                ':even_phone' => $even_phone
                            ]);

                            $name = $_POST['Name___'];
                            $relationship = $_POST['Relationship___'];
                            $day_phone = $_POST['Day_Phone_Number___'];
                            $even_phone =  $_POST['Evening_Phone_Number___'];

                            $sql = "INSERT INTO reference (applicant_id, name, relationship, day_phone, even_phone) VALUES (:applicant_id, :name, :relationship, :day_phone, :even_phone)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':name' => "$name",
                                ':relationship' => $relationship,
                                ':day_phone' => $day_phone,
                                ':even_phone' => $even_phone
                            ]);

                            $name = $_POST['Name____'];
                            $relationship = $_POST['Relationship____'];
                            $day_phone = $_POST['Day_Phone_Number____'];
                            $even_phone =  $_POST['Evening_Phone_Number____'];

                            $sql = "INSERT INTO reference (applicant_id, name, relationship, day_phone, even_phone) VALUES (:applicant_id, :name, :relationship, :day_phone, :even_phone)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':name' => "$name",
                                ':relationship' => $relationship,
                                ':day_phone' => $day_phone,
                                ':even_phone' => $even_phone
                            ]);

                            // 	echo $name_one;
                            $name1 = $_POST['___Name_'];
                            $name2 = $_POST['___Name__'];
                            $name3 = $_POST['___Name___'];
                            $name4 = $_POST['___Name____'];
                            $name5 = $_POST['___Name_____'];
                            $sql = "INSERT INTO confidentiality (applicant_id, investigation, process, termination, rules, valid) VALUES (:applicant_id, :investigation, :process, :termination, :rules, :valid)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':investigation' => "$name1",
                                ':process' => $name2,
                                ':termination' => $name3,
                                ':rules' => $name4,
                                ':valid' => $name5
                            ]);

                            $name1 = $_POST['___Name'];
                            $date = date("F j, Y");
                            $sql = "INSERT INTO signature (applicant_id, signature, date) VALUES (:applicant_id, :signature, :date)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':applicant_id' => $applicant_id,
                                ':signature' => $name1,
                                ':date' => $date
                            ]);
                        }
                        ?>
                        <form id="submitform" name="submit" method="post" action="#">
                            <span class="required-info">* Required Information</span>
                            <div class="fieldheader">
                                <p>Personal Information</p>
                                <input type="hidden" name="Personal Information" value=":">
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Applicant Job
                                                    Title <span class="required_filed">*</span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Applicant_Job_Title" class="form_field" value="" id="Applicant_Job_Title" placeholder="Enter job title here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Type of Employment
                                                    Desired <span class="required_filed"></span></strong></label></div>
                                        <input id="Type_of_Employment_Desired" type="hidden" name="Type_of_Employment_Desired" value="">
                                        <div class="form_box_col3">
                                            <div class="group"><input type="radio" class="wskCheckbox Type_of_Employment_Desired" name="employment_desired" value="Per Diem" id="Type_of_Employment_Desired_1" /><label class="wskLabel" for="Type_of_Employment_Desired_1">Per Diem</label>
                                            </div>
                                            <div class="group">
                                                <input type="radio" class="wskCheckbox Type_of_Employment_Desired" name="employment_desired" value="Part Time" id="Type_of_Employment_Desired_2" /><label class="wskLabel" for="Type_of_Employment_Desired_2">Part Time</label>
                                            </div>

                                            <div class="group"><input type="radio" class="wskCheckbox Type_of_Employment_Desired" name="employment_desired" value="Full Time" id="Type_of_Employment_Desired_3" /><label class="wskLabel" for="Type_of_Employment_Desired_3">Full Time</label></div>
                                        </div>

                                    </div>
                                    <div class="group">
                                        <div class="field_holder animated_box" >
                                            <div class="form_label"><label class="text_uppercase"><strong>Type of Employment
                                                    Desired <span class="required_filed"></span></strong></label></div>
                                            <input type="text" name="hours_desired" class="form_field" value="" id="hours_desired" placeholder="Enter number of hours here">
                                            <span class="animated_class"></span>
                                        </div>

                                    </div> 
                            </div>
                            </div>
                            <div class="form_box">
                                <div class="form_box_col3">
                                      
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col3">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Last Name <span class="required_filed">*</span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Last_Name" class="form_field" value="" id="Last_Name" placeholder="Enter last name here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>First Name <span class="required_filed">*</span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="First_Name" class="form_field" value="" id="First_Name" placeholder="Enter first name here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Middle Name <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Middle_Name" class="form_field" value="" id="Middle_Name" placeholder="Enter middle name here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Address
                                                    (Permanent) <span class="required_filed">*</span></strong></label>
                                        </div>
                                        <div class="field_holder animated_box"><input type="text" name="Address" class="form_field" value="" id="Address" placeholder="Enter address here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col3">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>City <span class="required_filed">*</span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="City" class="form_field" value="" id="City" placeholder="Enter city here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>State <span class="required_filed">*</span></strong></label></div>
                                        <div class="select-field"><select name="State" class="form_field" id="">
                                                <option value="">Please select state.</option>
                                                <option value="Alabama">Alabama</option>
                                                <option value="Alaska">Alaska</option>
                                                <option value="Arizona">Arizona</option>
                                                <option value="Arkansas">Arkansas</option>
                                                <option value="California">California</option>
                                                <option value="Colorado">Colorado</option>
                                                <option value="Connecticut">Connecticut</option>
                                                <option value="Delaware">Delaware</option>
                                                <option value="District Of Columbia">District Of Columbia</option>
                                                <option value="Florida">Florida</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Idaho">Idaho</option>
                                                <option value="Illinois">Illinois</option>
                                                <option value="Indiana">Indiana</option>
                                                <option value="Iowa">Iowa</option>
                                                <option value="Kansas">Kansas</option>
                                                <option value="Kentucky">Kentucky</option>
                                                <option value="Louisiana">Louisiana</option>
                                                <option value="Maine">Maine</option>
                                                <option value="Maryland">Maryland</option>
                                                <option value="Massachusetts">Massachusetts</option>
                                                <option value="Michigan">Michigan</option>
                                                <option value="Minnesota">Minnesota</option>
                                                <option value="Mississippi">Mississippi</option>
                                                <option value="Missouri">Missouri</option>
                                                <option value="Montana">Montana</option>
                                                <option value="Nebraska">Nebraska</option>
                                                <option value="Nevada">Nevada</option>
                                                <option value="New Hampshire">New Hampshire</option>
                                                <option value="New Jersey">New Jersey</option>
                                                <option value="New Mexico">New Mexico</option>
                                                <option value="New York">New York</option>
                                                <option value="North Carolina">North Carolina</option>
                                                <option value="North Dakota">North Dakota</option>
                                                <option value="Ohio">Ohio</option>
                                                <option value="Oklahoma">Oklahoma</option>
                                                <option value="Oregon">Oregon</option>
                                                <option value="Pennsylvania">Pennsylvania</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Rhode Island">Rhode Island</option>
                                                <option value="South Carolina">South Carolina</option>
                                                <option value="South Dakota">South Dakota</option>
                                                <option value="Tennessee">Tennessee</option>
                                                <option value="Texas">Texas</option>
                                                <option value="Utah">Utah</option>
                                                <option value="Vermont">Vermont</option>
                                                <option value="Virgin Islands">Virgin Islands</option>
                                                <option value="Virginia">Virginia</option>
                                                <option value="Washington">Washington</option>
                                                <option value="West Virginia">West Virginia</option>
                                                <option value="Wisconsin">Wisconsin</option>
                                                <option value="Wyoming">Wyoming</option>
                                            </select></div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>ZIP Code <span class="required_filed">*</span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="ZIP_Code" class="form_field" value="" id="ZIP_Code" placeholder="Enter zip code here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Day Phone <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Day_Phone" class="form_field cphone" id="Day_Phone" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Evening Phone
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Evening_Phone" class="form_field cphone" id="Evening_Phone" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Email Address
                                                    <span class="required_filed">*</span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Email_Address" class="form_field" value="" id="Email_Address" placeholder="Enter email here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Language(s) Spoken
                                                    or Written <span class="required_filed"></span></strong></label>
                                        </div>
                                        <div class="field_holder animated_box"><input type="text" name="Languages_Spoken_or_Written" class="form_field" value="" id="Languages_Spoken_or_Written" placeholder="Enter languages here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Please provide
                                                    Registration Number with Department of Social Services <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Registration_Number_with_Department_of_Social_Services" class="form_field" value="" id="Registration_Number_with_Department_of_Social_Services" placeholder="Enter details here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fieldheader">
                                <p>Education</p>
                                <input type="hidden" name="Education" value=":">
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>High School Name
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="High_School_Name" class="form_field" value="" id="High_School_Name" placeholder="Enter school name here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>State or Country
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="State_or_Country" class="form_field" value="" id="State_or_Country" placeholder="Enter state or country here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box_col1">
                                <div class="group">
                                    <div class="form_label"><label class="text_uppercase"><strong>Graduate <span class="required_filed"></span></strong></label></div>
                                    <table class="radio" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td style='width: 50%;'><input type="radio" name="Graduate" value="Yes" id="Graduate0"><label for="Graduate0" style="font-weight:normal; color:#000;">Yes</label></td>
                                            <td style='width: 50%;'><input type="radio" name="Graduate" value="No" id="Graduate1"><label for="Graduate1" style="font-weight:normal; color:#000;">No</label></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <hr>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>College Name <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="College_Name" class="form_field" value="" id="College_Name" placeholder="Enter college name here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>State or Country
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="State_or_Country_" class="form_field" value="" id="State_or_Country_" placeholder="Enter state or country here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box_col1">
                                <div class="group">
                                    <div class="form_label"><label class="text_uppercase"><strong>Graduate <span class="required_filed"></span></strong></label></div>
                                    <table class="radio" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td style='width: 50%;'><input type="radio" name="Graduate_" value="Yes" id="Graduate_0"><label for="Graduate_0" style="font-weight:normal; color:#000;">Yes</label></td>
                                            <td style='width: 50%;'><input type="radio" name="Graduate_" value="No" id="Graduate_1"><label for="Graduate_1" style="font-weight:normal; color:#000;">No</label></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Type of Degree
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Type_of_Degree" class="form_field" value="" id="Type_of_Degree" placeholder="Enter degree here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Other or
                                                    License(s) <span class="required_filed"></span></strong></label>
                                        </div>
                                        <div class="field_holder animated_box"><input type="text" name="Other_or_Licenses" class="form_field" value="" id="Other_or_Licenses" placeholder="Enter other here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="fieldheader">
                                <p>Experience</p>
                                <input type="hidden" name="Experience" value=":">
                            </div>

                            <p>Please describe all relevant experience, including volunteer and other unpaid experience.
                                Begin with your most recent position, and describe your employment History for the past
                                five (5) years.</p>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Employer Name
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Employer_Name" class="form_field" value="" id="Employer_Name" placeholder="Enter name here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Location <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Location" class="form_field" value="" id="Location" placeholder="Enter location here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box1">
                                <div class="form_label ">
                                    <label class="text_uppercase">
                                        <strong>Dates Employed <span class="required_filed"></span></strong>
                                        <input type="hidden" name="Dates_Employed" value=":">
                                    </label>
                                </div>

                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="field_holder animated_box"><input type="text" name="From" class="form_field Date" value="" id="From" placeholder="Enter date here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="field_holder animated_box"><input type="text" name="To" class="form_field Date" value="" id="To" placeholder="Enter date here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Hours per Week
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Hours_per_Week" class="form_field" value="" id="Hours_per_Week" placeholder="Enter hours here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Salary or Rate per
                                                    hour <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"> <i id="icon" class="fas fa-dollar-sign "></i> <input type="text" name="Salary_or_Rate_per_hour" class="form_field amount" id="salary_or_rate_per_hour" placeholder="Enter salary here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Job Title <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Job_Title" class="form_field" value="" id="Job_Title" placeholder="Enter title here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Supervisor <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Supervisor" class="form_field" value="" id="Supervisor" placeholder="Enter supervisor here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Number <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Number" class="form_field" value="" id="Number" placeholder="Enter number here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Describe Work
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><textarea name="Describe_Work" class="form_field" id="Describe_Work" placeholder="Enter details here"></textarea><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Reason for leaving
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><textarea name="Reason_for_leaving" class="form_field" id="Reason_for_leaving" placeholder="Enter reason here"></textarea><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Employer Name
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Employer_Name1" class="form_field" value="" id="Employer_Name1" placeholder="Enter name here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Location <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Location1" class="form_field" value="" id="Location1" placeholder="Enter location here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box1">
                                <div class="form_label ">
                                    <label class="text_uppercase">
                                        <strong>Dates Employed <span class="required_filed"></span></strong>
                                        <input type="hidden" name="Dates Employed_" value=":">
                                    </label>
                                </div>

                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="field_holder animated_box"><input type="text" name="From1" class="form_field Date" value="" id="From1" placeholder="Enter date here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="field_holder animated_box"><input type="text" name="To1" class="form_field Date" value="" id="To1" placeholder="Enter date here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Hours per Week
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Hours_per_Week1" class="form_field" value="" id="Hours_per_Week1" placeholder="Enter hours here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Salary or Rate per
                                                    hour <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"> <i id="icon" class="fas fa-dollar-sign "></i> <input type="text" name="Salary_or_Rate_per_hour1" class="form_field amount" id="salary_or_rate_per_hour1" placeholder="Enter salary here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Job Title <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Job_Title1" class="form_field" value="" id="Job_Title1" placeholder="Enter title here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Supervisor <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Supervisor1" class="form_field" value="" id="Supervisor1" placeholder="Enter supervisor here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Number <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Number1" class="form_field" value="" id="Number1" placeholder="Enter number here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Describe Work
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><textarea name="Describe_Work1" class="form_field" id="Describe_Work1" placeholder="Enter details here"></textarea><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Reason for leaving
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><textarea name="Reason_for_leaving1" class="form_field" id="Reason_for_leaving1" placeholder="Enter reason here"></textarea><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Employer Name
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Employer_Name2" class="form_field" value="" id="Employer_Name2" placeholder="Enter name here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Location <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Location2" class="form_field" value="" id="Location2" placeholder="Enter location here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box1">
                                <div class="form_label ">
                                    <label class="text_uppercase">
                                        <strong>Dates Employed <span class="required_filed"></span></strong>
                                        <input type="hidden" name="Dates Employed__" value=":">
                                    </label>
                                </div>

                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="field_holder animated_box"><input type="text" name="From2" class="form_field Date" value="" id="From2" placeholder="Enter date here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="field_holder animated_box"><input type="text" name="To2" class="form_field Date" value="" id="To2" placeholder="Enter date here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Hours per Week
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Hours_per_Week2" class="form_field" value="" id="Hours_per_Week2" placeholder="Enter hours here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Salary or Rate per
                                                    hour <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"> <i id="icon" class="fas fa-dollar-sign "></i> <input type="text" name="Salary_or_Rate_per_hour2" class="form_field amount" id="salary_or_rate_per_hour2" placeholder="Enter salary here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Job Title <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Job_Title2" class="form_field" value="" id="Job_Title2" placeholder="Enter title here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Supervisor <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Supervisor2" class="form_field" value="" id="Supervisor2" placeholder="Enter supervisor here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Number <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Number2" class="form_field" value="" id="Number2" placeholder="Enter number here"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Describe Work
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><textarea name="Describe_Work2" class="form_field" id="Describe_Work2" placeholder="Enter details here"></textarea><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Reason for leaving
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><textarea name="Reason_for_leaving2" class="form_field" id="Reason_for_leaving2" placeholder="Enter reason here"></textarea><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="fieldheader">
                                <p>Health History</p>
                                <input type="hidden" name="Health History" value=":">
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Can you lift at
                                                    least 65 lbs? <span class="required_filed"></span></strong></label>
                                        </div>
                                        <table class="radio" border="0" cellpadding="0" cellspacing="0">
                                            <tr></tr>
                                            <tr>
                                                <td><input type="radio" name="Can_you_lift_at_least_65_lbs" value="Yes" id="Can_you_lift_at_least_65_lbs?0"><label for="Can_you_lift_at_least_65_lbs?0" style="font-weight:normal; color:#000;">Yes</label></td>
                                                <td><input type="radio" name="Can_you_lift_at_least_65_lbs" value="No" id="Can_you_lift_at_least_65_lbs?1"><label for="Can_you_lift_at_least_65_lbs?1" style="font-weight:normal; color:#000;">No</label></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Do you have any
                                                    physical or mental limitation that may interfere with your ability
                                                    to perform the essential functions of your job? <span class="required_filed"></span></strong></label></div>
                                        <table class="radio" border="0" cellpadding="0" cellspacing="0">
                                            <tr></tr>
                                            <tr>
                                                <td><input type="radio" name="mental_limitation" value="Yes" id="Do_you_have_any_physical_or_mental_limitation_that_may_interfere_with_your_ability_to_perform_the_essential_functions_of_your_job?0"><label for="Do_you_have_any_physical_or_mental_limitation_that_may_interfere_with_your_ability_to_perform_the_essential_functions_of_your_job?0" style="font-weight:normal; color:#000;">Yes</label></td>
                                                <td><input type="radio" name="mental_limitation" value="No" id="Do_you_have_any_physical_or_mental_limitation_that_may_interfere_with_your_ability_to_perform_the_essential_functions_of_your_job?1"><label for="Do_you_have_any_physical_or_mental_limitation_that_may_interfere_with_your_ability_to_perform_the_essential_functions_of_your_job?1" style="font-weight:normal; color:#000;">No</label></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box" id="toggle7">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Please describe
                                                    any accommodations that you require <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><textarea name="Accommodations" class="form_field" id="Accommodations" placeholder="Enter accommodations here"></textarea><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="fieldheader">
                                <p>Criminal History</p>
                                <input type="hidden" name="Criminal_History" value=":">
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Have you ever been
                                                    convicted of a misdemeanor? <span class="required_filed"></span></strong></label></div>
                                        <p>(other than a minor traffic violation, a marijuana offense that was more than
                                            2 years ago, or a conviction that occurred while the person was subject to
                                            the process and jurisdiction of the juvenile court)</p>
                                        <table class="radio" border="0" cellpadding="0" cellspacing="0">
                                            <tr></tr>
                                            <tr>
                                                <td><input type="radio" name="Have_you_ever_been_convicted_of_a_misdemeanor" value="Yes" id="Have_you_ever_been_convicted_of_a_misdemeanor?0"><label for="Have_you_ever_been_convicted_of_a_misdemeanor?0" style="font-weight:normal; color:#000;">Yes</label></td>
                                                <td><input type="radio" name="Have_you_ever_been_convicted_of_a_misdemeanor" value="No" id="Have_you_ever_been_convicted_of_a_misdemeanor?1"><label for="Have_you_ever_been_convicted_of_a_misdemeanor?1" style="font-weight:normal; color:#000;">No</label></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Have you ever been
                                                    convicted of a felony? <span class="required_filed"></span></strong></label></div>
                                        <p>(other than those that have been sealed, expunged or dismissed, or those that
                                            occurred while the person was subject to the process and jurisdiction of the
                                            juvenile court)</p>
                                        <table class="radio" border="0" cellpadding="0" cellspacing="0">
                                            <tr></tr>
                                            <tr>
                                                <td><input type="radio" name="Have_you_ever_been_convicted_of_a_felony" value="Yes" id="Have_you_ever_been_convicted_of_a_felony?0"><label for="Have_you_ever_been_convicted_of_a_felony?0" style="font-weight:normal; color:#000;">Yes</label></td>
                                                <td><input type="radio" name="Have_you_ever_been_convicted_of_a_felony" value="No" id="Have_you_ever_been_convicted_of_a_felony?1"><label for="Have_you_ever_been_convicted_of_a_felony?1" style="font-weight:normal; color:#000;">No</label></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box" id="toggle8">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Please describe.
                                                    Failure to admit reportable convictions will result in the
                                                    disqualification of your application. <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><textarea name="Explanation" class="form_field" id="Explanation" placeholder="Enter explanation here"></textarea><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col1">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Do you understand
                                                    that your fingerprints will be sent to the Department of Justice and
                                                    all offers of employment or continued employment will be subjected
                                                    to review of reportable criminal offenses, whether or not you have
                                                    indicated them above? <span class="required_filed"></span></strong></label></div>
                                        <table class="radio" border="0" cellpadding="0" cellspacing="0">
                                            <tr></tr>
                                            <tr>
                                                <td><input type="radio" name="fingerprint" value="Yes" id="fingerprint0"><label for="fingerprint0" style="font-weight:normal; color:#000;">Yes</label></td>
                                                <td><input type="radio" name="fingerprint" value="No" id="fingerprint1"><label for="fingerprint1" style="font-weight:normal; color:#000;">No</label></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="fieldheader">
                                <p>Emergency Information</p>
                                <input type="hidden" name="Emergency Information" value=":">
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Name <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Name" class="form_field" value="" id="Name" placeholder="Enter name here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Relationship <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Relationship" class="form_field" value="" id="Relationship" placeholder="Enter relationship here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Day Phone Number
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Day_Phone_Number" class="form_field cphone" id="Day_Phone_Number" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Evening Phone
                                                    Number <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Evening_Phone_Number" class="form_field cphone" id="Evening_Phone_Number" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Name <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Name_" class="form_field" value="" id="Name_" placeholder="Enter name here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Relationship <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Relationship_" class="form_field" value="" id="Relationship_" placeholder="Enter relationship here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Day Phone Number
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Day_Phone_Number_" class="form_field cphone" id="Day_Phone_Number_" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Evening Phone
                                                    Number <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Evening_Phone_Number_" class="form_field cphone" id="Evening_Phone_Number_" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fieldheader">
                                <p>References</p>
                                <input type="hidden" name="Emergency Information" value=":">
                            </div>
                            <p>Please provide 3 names of people who are not related or living with you.</p>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Name <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Name__" class="form_field" value="" id="Name__" placeholder="Enter name here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Relationship <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Relationship__" class="form_field" value="" id="Relationship__" placeholder="Enter relationship here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Day Phone Number
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Day_Phone_Number__" class="form_field cphone" id="Day_Phone_Number__" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Evening Phone
                                                    Number <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Evening_Phone_Number__" class="form_field cphone" id="Evening_Phone_Number__" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Name <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Name___" class="form_field" value="" id="Name___" placeholder="Enter name here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Relationship <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Relationship___" class="form_field" value="" id="Relationship___" placeholder="Enter relationship here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Day Phone Number
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Day_Phone_Number___" class="form_field cphone" id="Day_Phone_Number___" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Evening Phone
                                                    Number <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Evening_Phone_Number___" class="form_field cphone" id="Evening_Phone_Number___" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Name <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Name____" class="form_field" value="" id="Name____" placeholder="Enter name here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Relationship <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="Relationship____" class="form_field" value="" id="Relationship____" placeholder="Enter relationship here"><span class="animated_class"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Day Phone Number
                                                    <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Day_Phone_Number____" class="form_field cphone" id="Day_Phone_Number____" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Evening Phone
                                                    Number <span class="required_filed"></span></strong></label></div>
                                        <div class="field_holder animated_box">
                                            <div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div><input type="text" name="Evening_Phone_Number____" class="form_field cphone" id="Evening_Phone_Number____" placeholder="+1 (phone number)"><span class="animated_class"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->
                            <div class="fieldheader">
                                <p class="style-p">Confidentiality and Authorization</p>
                                <input type="hidden" name="Confidentiality and Authorization" value=":">
                            </div>

                            <div class="form_box">
                                <p><input type="checkbox" name="Docu01" -webkit-appearance: checkbox;> I,<input type="text" class="cstom_field_desc" name="___Name_" placeholder="Enter name here" id="___Name_">, authorize Company to verify the
                                    information I have provided and to make any investigation of my background deemed
                                    necessary as well as authorizing third parties (e.g. former employers, law
                                    enforcement organizations, financial situations, and educational situations) to
                                    provide information about me to the Company.</p>
                            </div>

                            <div class="form_box">
                                <p><input type="checkbox" name="Docu02" -webkit-appearance: checkbox;> I,<input type="text" class="cstom_field_desc" name="___Name__" placeholder="Enter name here" id="___Name__">, agree if employed by Company, to
                                    sign and comply with further agreements in order to fulfill my employment process,
                                    which may include all legaly permissible medical examinations and drug/alcohol
                                    screenings required by the company.</p>
                            </div>

                            <div class="form_box">
                                <p><input type="checkbox" name="Docu03" -webkit-appearance: checkbox;> I,<input type="text" class="cstom_field_desc" name="___Name___" placeholder="Enter name here" id="___Name___">, understand that employment with
                                    Company is at will and that either I or the company can terminate any employment and
                                    compensation with or without cause and notice at any time. I acknowledge that no
                                    representations, either oral or written, have been made to me to the contrary and
                                    that any pre-existing understandings that may contradict an at-will status of
                                    employment are canceled. </p>
                            </div>

                            <div class="form_box">
                                <p><input type="checkbox" name="Docu04" -webkit-appearance: checkbox;> I,<input type="text" class="cstom_field_desc" name="___Name____" placeholder="Enter name here" id="___Name____">, agree that in consideration of
                                    my employment, I agree to conform to the rules and policies of Company. </p>
                            </div>

                            <div class="form_box">
                                <p><input type="checkbox" name="Docu05" -webkit-appearance: checkbox;> I,<input type="text" class="cstom_field_desc" name="___Name_____" placeholder="Enter name here" id="___Name_____">, truthfully state that the
                                    information provided above is correct and valid. I have reviewed and completed all
                                    fields and materials. This information will be solely used for the purposes of
                                    Company, and whom they seem fit to contact. By signing this application, I
                                    understand that if there are any missing fields and materials or if the information
                                    provided is found to be incorrect or invalid, my application may be denied. </p>
                            </div>

                            <div class="form_box">
                                <div class="form_box_col2">
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Name <span class="required_filed">*</span></strong></label></div>
                                        <div class="field_holder animated_box"><input type="text" name="___Name" class="form_field" value="" id="sign_name" placeholder="Enter name here"><span class="animated_class"></span></div>
                                    </div>
                                    <div class="group">
                                        <div class="form_label"><label class="text_uppercase"><strong>Date <span class="required_filed"></span></strong></label></div> <input type="text" class="form_field" id="sign_time" style="background: #c2c2c2; text-align: center" name="__Date" value="<?php $date = date("F j, Y");
                                                                                                                                                                                                                                                                                                    echo $date; ?>" readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="signature_preview"><span id="sign_canvas"></span></div>

                            --> --> -->

                            <div class="form_box5 secode_box">
                                <div class="group">
                                    <div class="inner_form_box1 recapBtn">
                                        <!-- <div class="g-recaptcha"
                                            data-sitekey="6LeBUsoZAAAAAJjS3x5IOwvdBF1Qshwu_Tdtd-9j"></div> -->
                                        <div class="btn-submit"><input name="submit" type="submit" class="form_button" value="SUBMIT" /></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <div class="select-holder" data-ref="">
            <div class="search-box"><input class="searchInput" placeholder="Search a country..." />
            </div>
            <ul class="country-holder">
                <li class="" data-ccode="ad" data-country="ANDORRA" data-code="+376"><i class="ad flag"></i>ANDORRA
                    (+376)</li>
                <li class="" data-ccode="ae" data-country="UNITED ARAB EMIRATES" data-code="+971"><i class="ae flag"></i>UNITED ARAB EMIRATES (+971)</li>
                <li class="" data-ccode="af" data-country="AFGHANISTAN" data-code="+93"><i class="af flag"></i>AFGHANISTAN (+93)</li>
                <li class="" data-ccode="ag" data-country="ANTIGUA AND BARBUDA" data-code="+1268"><i class="ag flag"></i>ANTIGUA AND BARBUDA (+1268)</li>
                <li class="" data-ccode="ai" data-country="ANGUILLA" data-code="+1264"><i class="ai flag"></i>ANGUILLA
                    (+1264)</li>
                <li class="" data-ccode="al" data-country="ALBANIA" data-code="+355"><i class="al flag"></i>ALBANIA
                    (+355)</li>
                <li class="" data-ccode="am" data-country="ARMENIA" data-code="+374"><i class="am flag"></i>ARMENIA
                    (+374)</li>
                <li class="" data-ccode="an" data-country="NETHERLANDS ANTILLES" data-code="+599"><i class="an flag"></i>NETHERLANDS ANTILLES (+599)</li>
                <li class="" data-ccode="ao" data-country="ANGOLA" data-code="+244"><i class="ao flag"></i>ANGOLA (+244)
                </li>
                <li class="" data-ccode="ar" data-country="ARGENTINA" data-code="+54"><i class="ar flag"></i>ARGENTINA
                    (+54)</li>
                <li class="" data-ccode="as" data-country="AMERICAN SAMOA" data-code="+1684"><i class="as flag"></i>AMERICAN SAMOA (+1684)</li>
                <li class="" data-ccode="at" data-country="AUSTRIA" data-code="+43"><i class="at flag"></i>AUSTRIA (+43)
                </li>
                <li class="" data-ccode="au" data-country="AUSTRALIA" data-code="+61"><i class="au flag"></i>AUSTRALIA
                    (+61)</li>
                <li class="" data-ccode="aw" data-country="ARUBA" data-code="+297"><i class="aw flag"></i>ARUBA (+297)
                </li>
                <li class="" data-ccode="az" data-country="AZERBAIJAN" data-code="+994"><i class="az flag"></i>AZERBAIJAN (+994)</li>
                <li class="" data-ccode="ba" data-country="BOSNIA AND HERZEGOVINA" data-code="+387"><i class="ba flag"></i>BOSNIA AND HERZEGOVINA (+387)</li>
                <li class="" data-ccode="bb" data-country="BARBADOS" data-code="+1246"><i class="bb flag"></i>BARBADOS
                    (+1246)</li>
                <li class="" data-ccode="bd" data-country="BANGLADESH" data-code="+880"><i class="bd flag"></i>BANGLADESH (+880)</li>
                <li class="" data-ccode="be" data-country="BELGIUM" data-code="+32"><i class="be flag"></i>BELGIUM (+32)
                </li>
                <li class="" data-ccode="bf" data-country="BURKINA FASO" data-code="+226"><i class="bf flag"></i>BURKINA
                    FASO (+226)</li>
                <li class="" data-ccode="bg" data-country="BULGARIA" data-code="+359"><i class="bg flag"></i>BULGARIA
                    (+359)</li>
                <li class="" data-ccode="bh" data-country="BAHRAIN" data-code="+973"><i class="bh flag"></i>BAHRAIN
                    (+973)</li>
                <li class="" data-ccode="bi" data-country="BURUNDI" data-code="+257"><i class="bi flag"></i>BURUNDI
                    (+257)</li>
                <li class="" data-ccode="bj" data-country="BENIN" data-code="+229"><i class="bj flag"></i>BENIN (+229)
                </li>
                <li class="" data-ccode="bl" data-country="SAINT BARTHELEMY" data-code="+590"><i class="bl flag"></i>SAINT BARTHELEMY (+590)</li>
                <li class="" data-ccode="bm" data-country="BERMUDA" data-code="+1441"><i class="bm flag"></i>BERMUDA
                    (+1441)</li>
                <li class="" data-ccode="bn" data-country="BRUNEI DARUSSALAM" data-code="+673"><i class="bn flag"></i>BRUNEI DARUSSALAM (+673)</li>
                <li class="" data-ccode="bo" data-country="BOLIVIA" data-code="+591"><i class="bo flag"></i>BOLIVIA
                    (+591)</li>
                <li class="" data-ccode="br" data-country="BRAZIL" data-code="+55"><i class="br flag"></i>BRAZIL (+55)
                </li>
                <li class="" data-ccode="bs" data-country="BAHAMAS" data-code="+1242"><i class="bs flag"></i>BAHAMAS
                    (+1242)</li>
                <li class="" data-ccode="bt" data-country="BHUTAN" data-code="+975"><i class="bt flag"></i>BHUTAN (+975)
                </li>
                <li class="" data-ccode="bw" data-country="BOTSWANA" data-code="+267"><i class="bw flag"></i>BOTSWANA
                    (+267)</li>
                <li class="" data-ccode="by" data-country="BELARUS" data-code="+375"><i class="by flag"></i>BELARUS
                    (+375)</li>
                <li class="" data-ccode="bz" data-country="BELIZE" data-code="+501"><i class="bz flag"></i>BELIZE (+501)
                </li>
                <li class="" data-ccode="ca" data-country="CANADA" data-code="+1"><i class="ca flag"></i>CANADA (+1)
                </li>
                <li class="" data-ccode="cc" data-country="COCOS (KEELING) ISLANDS" data-code="+61"><i class="cc flag"></i>COCOS (KEELING) ISLANDS (+61)</li>
                <li class="" data-ccode="cd" data-country="CONGO,THE DEMOCRATIC REPUBLIC OF THE" data-code="+243"><i class="cd flag"></i>CONGO,THE DEMOCRATIC REPUBLIC OF THE (+243)</li>
                <li class="" data-ccode="cf" data-country="CENTRAL AFRICAN REPUBLIC" data-code="+236"><i class="cf flag"></i>CENTRAL AFRICAN REPUBLIC (+236)</li>
                <li class="" data-ccode="cg" data-country="CONGO" data-code="+242"><i class="cg flag"></i>CONGO (+242)
                </li>
                <li class="" data-ccode="ch" data-country="SWITZERLAND" data-code="+41"><i class="ch flag"></i>SWITZERLAND (+41)</li>
                <li class="" data-ccode="ci" data-country="COTE D IVOIRE" data-code="+225"><i class="ci flag"></i>COTE D
                    IVOIRE (+225)</li>
                <li class="" data-ccode="ck" data-country="COOK ISLANDS" data-code="+682"><i class="ck flag"></i>COOK
                    ISLANDS (+682)</li>
                <li class="" data-ccode="cl" data-country="CHILE" data-code="+56"><i class="cl flag"></i>CHILE (+56)
                </li>
                <li class="" data-ccode="cm" data-country="CAMEROON" data-code="+237"><i class="cm flag"></i>CAMEROON
                    (+237)</li>
                <li class="" data-ccode="cn" data-country="CHINA" data-code="+86"><i class="cn flag"></i>CHINA (+86)
                </li>
                <li class="" data-ccode="co" data-country="COLOMBIA" data-code="+57"><i class="co flag"></i>COLOMBIA
                    (+57)</li>
                <li class="" data-ccode="cr" data-country="COSTA RICA" data-code="+506"><i class="cr flag"></i>COSTA
                    RICA (+506)</li>
                <li class="" data-ccode="cu" data-country="CUBA" data-code="+53"><i class="cu flag"></i>CUBA (+53)</li>
                <li class="" data-ccode="cv" data-country="CAPE VERDE" data-code="+238"><i class="cv flag"></i>CAPE
                    VERDE (+238)</li>
                <li class="" data-ccode="cx" data-country="CHRISTMAS ISLAND" data-code="+61"><i class="cx flag"></i>CHRISTMAS ISLAND (+61)</li>
                <li class="" data-ccode="cy" data-country="CYPRUS" data-code="+357"><i class="cy flag"></i>CYPRUS (+357)
                </li>
                <li class="" data-ccode="cz" data-country="CZECH REPUBLIC" data-code="+420"><i class="cz flag"></i>CZECH
                    REPUBLIC (+420)</li>
                <li class="" data-ccode="de" data-country="GERMANY" data-code="+49"><i class="de flag"></i>GERMANY (+49)
                </li>
                <li class="" data-ccode="dj" data-country="DJIBOUTI" data-code="+253"><i class="dj flag"></i>DJIBOUTI
                    (+253)</li>
                <li class="" data-ccode="dk" data-country="DENMARK" data-code="+45"><i class="dk flag"></i>DENMARK (+45)
                </li>
                <li class="" data-ccode="dm" data-country="DOMINICA" data-code="+1767"><i class="dm flag"></i>DOMINICA
                    (+1767)</li>
                <li class="" data-ccode="do" data-country="DOMINICAN REPUBLIC" data-code="+1809"><i class="do flag"></i>DOMINICAN REPUBLIC (+1809)</li>
                <li class="" data-ccode="dz" data-country="ALGERIA" data-code="+213"><i class="dz flag"></i>ALGERIA
                    (+213)</li>
                <li class="" data-ccode="ec" data-country="ECUADOR" data-code="+593"><i class="ec flag"></i>ECUADOR
                    (+593)</li>
                <li class="" data-ccode="ee" data-country="ESTONIA" data-code="+372"><i class="ee flag"></i>ESTONIA
                    (+372)</li>
                <li class="" data-ccode="eg" data-country="EGYPT" data-code="+20"><i class="eg flag"></i>EGYPT (+20)
                </li>
                <li class="" data-ccode="er" data-country="ERITREA" data-code="+291"><i class="er flag"></i>ERITREA
                    (+291)</li>
                <li class="" data-ccode="es" data-country="SPAIN" data-code="+34"><i class="es flag"></i>SPAIN (+34)
                </li>
                <li class="" data-ccode="et" data-country="ETHIOPIA" data-code="+251"><i class="et flag"></i>ETHIOPIA
                    (+251)</li>
                <li class="" data-ccode="fi" data-country="FINLAND" data-code="+358"><i class="fi flag"></i>FINLAND
                    (+358)</li>
                <li class="" data-ccode="fj" data-country="FIJI" data-code="+679"><i class="fj flag"></i>FIJI (+679)
                </li>
                <li class="" data-ccode="fk" data-country="FALKLAND ISLANDS (MALVINAS)" data-code="+500"><i class="fk flag"></i>FALKLAND ISLANDS (MALVINAS) (+500)</li>
                <li class="" data-ccode="fm" data-country="MICRONESIA,FEDERATED STATES OF" data-code="+691"><i class="fm flag"></i>MICRONESIA,FEDERATED STATES OF (+691)</li>
                <li class="" data-ccode="fo" data-country="FAROE ISLANDS" data-code="+298"><i class="fo flag"></i>FAROE
                    ISLANDS (+298)</li>
                <li class="" data-ccode="fr" data-country="FRANCE" data-code="+33"><i class="fr flag"></i>FRANCE (+33)
                </li>
                <li class="" data-ccode="ga" data-country="GABON" data-code="+241"><i class="ga flag"></i>GABON (+241)
                </li>
                <li class="" data-ccode="gb" data-country="UNITED KINGDOM" data-code="+44"><i class="gb flag"></i>UNITED
                    KINGDOM (+44)</li>
                <li class="" data-ccode="gd" data-country="GRENADA" data-code="+1473"><i class="gd flag"></i>GRENADA
                    (+1473)</li>
                <li class="" data-ccode="ge" data-country="GEORGIA" data-code="+995"><i class="ge flag"></i>GEORGIA
                    (+995)</li>
                <li class="" data-ccode="gh" data-country="GHANA" data-code="+233"><i class="gh flag"></i>GHANA (+233)
                </li>
                <li class="" data-ccode="gi" data-country="GIBRALTAR" data-code="+350"><i class="gi flag"></i>GIBRALTAR
                    (+350)</li>
                <li class="" data-ccode="gl" data-country="GREENLAND" data-code="+299"><i class="gl flag"></i>GREENLAND
                    (+299)</li>
                <li class="" data-ccode="gm" data-country="GAMBIA" data-code="+220"><i class="gm flag"></i>GAMBIA (+220)
                </li>
                <li class="" data-ccode="gn" data-country="GUINEA" data-code="+224"><i class="gn flag"></i>GUINEA (+224)
                </li>
                <li class="" data-ccode="gq" data-country="EQUATORIAL GUINEA" data-code="+240"><i class="gq flag"></i>EQUATORIAL GUINEA (+240)</li>
                <li class="" data-ccode="gr" data-country="GREECE" data-code="+30"><i class="gr flag"></i>GREECE (+30)
                </li>
                <li class="" data-ccode="gg" data-country="GUERNSEY" data-code="+44"><i class="gg flag"></i>GUERNSEY
                    (+44)</li>
                <li class="" data-ccode="gt" data-country="GUATEMALA" data-code="+502"><i class="gt flag"></i>GUATEMALA
                    (+502)</li>
                <li class="" data-ccode="gu" data-country="GUAM" data-code="+1671"><i class="gu flag"></i>GUAM (+1671)
                </li>
                <li class="" data-ccode="gw" data-country="GUINEA-BISSAU" data-code="+245"><i class="gw flag"></i>GUINEA-BISSAU (+245)</li>
                <li class="" data-ccode="gy" data-country="GUYANA" data-code="+592"><i class="gy flag"></i>GUYANA (+592)
                </li>
                <li class="" data-ccode="hk" data-country="HONG KONG" data-code="+852"><i class="hk flag"></i>HONG KONG
                    (+852)</li>
                <li class="" data-ccode="hn" data-country="HONDURAS" data-code="+504"><i class="hn flag"></i>HONDURAS
                    (+504)</li>
                <li class="" data-ccode="hr" data-country="CROATIA" data-code="+385"><i class="hr flag"></i>CROATIA
                    (+385)</li>
                <li class="" data-ccode="ht" data-country="HAITI" data-code="+509"><i class="ht flag"></i>HAITI (+509)
                </li>
                <li class="" data-ccode="hu" data-country="HUNGARY" data-code="+36"><i class="hu flag"></i>HUNGARY (+36)
                </li>
                <li class="" data-ccode="id" data-country="INDONESIA" data-code="+62"><i class="id flag"></i>INDONESIA
                    (+62)</li>
                <li class="" data-ccode="ie" data-country="IRELAND" data-code="+353"><i class="ie flag"></i>IRELAND
                    (+353)</li>
                <li class="" data-ccode="il" data-country="ISRAEL" data-code="+972"><i class="il flag"></i>ISRAEL (+972)
                </li>
                <li class="" data-ccode="im" data-country="ISLE OF MAN" data-code="+44"><i class="im flag"></i>ISLE OF
                    MAN (+44)</li>
                <li class="" data-ccode="in" data-country="INDIA" data-code="+91"><i class="in flag"></i>INDIA (+91)
                </li>
                <li class="" data-ccode="iq" data-country="IRAQ" data-code="+964"><i class="iq flag"></i>IRAQ (+964)
                </li>
                <li class="" data-ccode="ir" data-country="IRAN,ISLAMIC REPUBLIC OF" data-code="+98"><i class="ir flag"></i>IRAN,ISLAMIC REPUBLIC OF (+98)</li>
                <li class="" data-ccode="is" data-country="ICELAND" data-code="+354"><i class="is flag"></i>ICELAND
                    (+354)</li>
                <li class="" data-ccode="it" data-country="ITALY" data-code="+39"><i class="it flag"></i>ITALY (+39)
                </li>
                <li class="" data-ccode="jm" data-country="JAMAICA" data-code="+1876"><i class="jm flag"></i>JAMAICA
                    (+1876)</li>
                <li class="" data-ccode="jo" data-country="JORDAN" data-code="+962"><i class="jo flag"></i>JORDAN (+962)
                </li>
                <li class="" data-ccode="jp" data-country="JAPAN" data-code="+81"><i class="jp flag"></i>JAPAN (+81)
                </li>
                <li class="" data-ccode="je" data-country="JERSEY" data-code="+44"><i class="je flag"></i>JERSEY (+44)
                </li>
                <li class="" data-ccode="ke" data-country="KENYA" data-code="+254"><i class="ke flag"></i>KENYA (+254)
                </li>
                <li class="" data-ccode="kg" data-country="KYRGYZSTAN" data-code="+996"><i class="kg flag"></i>KYRGYZSTAN (+996)</li>
                <li class="" data-ccode="kh" data-country="CAMBODIA" data-code="+855"><i class="kh flag"></i>CAMBODIA
                    (+855)</li>
                <li class="" data-ccode="ki" data-country="KIRIBATI" data-code="+686"><i class="ki flag"></i>KIRIBATI
                    (+686)</li>
                <li class="" data-ccode="km" data-country="COMOROS" data-code="+269"><i class="km flag"></i>COMOROS
                    (+269)</li>
                <li class="" data-ccode="kn" data-country="SAINT KITTS AND NEVIS" data-code="+1869"><i class="kn flag"></i>SAINT KITTS AND NEVIS (+1869)</li>
                <li class="" data-ccode="kp" data-country="KOREA DEMOCRATIC PEOPLES REPUBLIC OF" data-code="+850"><i class="kp flag"></i>KOREA DEMOCRATIC PEOPLES REPUBLIC OF (+850)</li>
                <li class="" data-ccode="kr" data-country="KOREA REPUBLIC OF" data-code="+82"><i class="kr flag"></i>KOREA REPUBLIC OF (+82)</li>
                <li class="" data-ccode="kw" data-country="KUWAIT" data-code="+965"><i class="kw flag"></i>KUWAIT (+965)
                </li>
                <li class="" data-ccode="ky" data-country="CAYMAN ISLANDS" data-code="+1345"><i class="ky flag"></i>CAYMAN ISLANDS (+1345)</li>
                <li class="" data-ccode="kz" data-country="KAZAKSTAN" data-code="+7"><i class="kz flag"></i>KAZAKSTAN
                    (+7)</li>
                <li class="" data-ccode="la" data-country="LAO PEOPLES DEMOCRATIC REPUBLIC" data-code="+856"><i class="la flag"></i>LAO PEOPLES DEMOCRATIC REPUBLIC (+856)</li>
                <li class="" data-ccode="lb" data-country="LEBANON" data-code="+961"><i class="lb flag"></i>LEBANON
                    (+961)</li>
                <li class="" data-ccode="lc" data-country="SAINT LUCIA" data-code="+1758"><i class="lc flag"></i>SAINT
                    LUCIA (+1758)</li>
                <li class="" data-ccode="li" data-country="LIECHTENSTEIN" data-code="+423"><i class="li flag"></i>LIECHTENSTEIN (+423)</li>
                <li class="" data-ccode="lk" data-country="SRI LANKA" data-code="+94"><i class="lk flag"></i>SRI LANKA
                    (+94)</li>
                <li class="" data-ccode="lr" data-country="LIBERIA" data-code="+231"><i class="lr flag"></i>LIBERIA
                    (+231)</li>
                <li class="" data-ccode="ls" data-country="LESOTHO" data-code="+266"><i class="ls flag"></i>LESOTHO
                    (+266)</li>
                <li class="" data-ccode="lt" data-country="LITHUANIA" data-code="+370"><i class="lt flag"></i>LITHUANIA
                    (+370)</li>
                <li class="" data-ccode="lu" data-country="LUXEMBOURG" data-code="+352"><i class="lu flag"></i>LUXEMBOURG (+352)</li>
                <li class="" data-ccode="lv" data-country="LATVIA" data-code="+371"><i class="lv flag"></i>LATVIA (+371)
                </li>
                <li class="" data-ccode="ly" data-country="LIBYAN ARAB JAMAHIRIYA" data-code="+218"><i class="ly flag"></i>LIBYAN ARAB JAMAHIRIYA (+218)</li>
                <li class="" data-ccode="ma" data-country="MOROCCO" data-code="+212"><i class="ma flag"></i>MOROCCO
                    (+212)</li>
                <li class="" data-ccode="mc" data-country="MONACO" data-code="+377"><i class="mc flag"></i>MONACO (+377)
                </li>
                <li class="" data-ccode="md" data-country="MOLDOVA,REPUBLIC OF" data-code="+373"><i class="md flag"></i>MOLDOVA,REPUBLIC OF (+373)</li>
                <li class="" data-ccode="me" data-country="MONTENEGRO" data-code="+382"><i class="me flag"></i>MONTENEGRO (+382)</li>
                <li class="" data-ccode="mf" data-country="SAINT MARTIN" data-code="+1599"><i class="mf flag"></i>SAINT
                    MARTIN (+1599)</li>
                <li class="" data-ccode="mg" data-country="MADAGASCAR" data-code="+261"><i class="mg flag"></i>MADAGASCAR (+261)</li>
                <li class="" data-ccode="mh" data-country="MARSHALL ISLANDS" data-code="+692"><i class="mh flag"></i>MARSHALL ISLANDS (+692)</li>
                <li class="" data-ccode="mk" data-country="MACEDONIA,THE FORMER YUGOSLAV REPUBLIC OF" data-code="+389">
                    <i class="mk flag"></i>MACEDONIA,THE FORMER YUGOSLAV REPUBLIC OF (+389)
                </li>
                <li class="" data-ccode="ml" data-country="MALI" data-code="+223"><i class="ml flag"></i>MALI (+223)
                </li>
                <li class="" data-ccode="mm" data-country="MYANMAR" data-code="+95"><i class="mm flag"></i>MYANMAR (+95)
                </li>
                <li class="" data-ccode="mn" data-country="MONGOLIA" data-code="+976"><i class="mn flag"></i>MONGOLIA
                    (+976)</li>
                <li class="" data-ccode="mo" data-country="MACAU" data-code="+853"><i class="mo flag"></i>MACAU (+853)
                </li>
                <li class="" data-ccode="mp" data-country="NORTHERN MARIANA ISLANDS" data-code="+1670"><i class="mp flag"></i>NORTHERN MARIANA ISLANDS (+1670)</li>
                <li class="" data-ccode="mr" data-country="MAURITANIA" data-code="+222"><i class="mr flag"></i>MAURITANIA (+222)</li>
                <li class="" data-ccode="ms" data-country="MONTSERRAT" data-code="+1664"><i class="ms flag"></i>MONTSERRAT (+1664)</li>
                <li class="" data-ccode="mt" data-country="MALTA" data-code="+356"><i class="mt flag"></i>MALTA (+356)
                </li>
                <li class="" data-ccode="mu" data-country="MAURITIUS" data-code="+230"><i class="mu flag"></i>MAURITIUS
                    (+230)</li>
                <li class="" data-ccode="mv" data-country="MALDIVES" data-code="+960"><i class="mv flag"></i>MALDIVES
                    (+960)</li>
                <li class="" data-ccode="mw" data-country="MALAWI" data-code="+265"><i class="mw flag"></i>MALAWI (+265)
                </li>
                <li class="" data-ccode="mx" data-country="MEXICO" data-code="+52"><i class="mx flag"></i>MEXICO (+52)
                </li>
                <li class="" data-ccode="my" data-country="MALAYSIA" data-code="+60"><i class="my flag"></i>MALAYSIA
                    (+60)</li>
                <li class="" data-ccode="mz" data-country="MOZAMBIQUE" data-code="+258"><i class="mz flag"></i>MOZAMBIQUE (+258)</li>
                <li class="" data-ccode="na" data-country="NAMIBIA" data-code="+264"><i class="na flag"></i>NAMIBIA
                    (+264)</li>
                <li class="" data-ccode="nc" data-country="NEW CALEDONIA" data-code="+687"><i class="nc flag"></i>NEW
                    CALEDONIA (+687)</li>
                <li class="" data-ccode="ne" data-country="NIGER" data-code="+227"><i class="ne flag"></i>NIGER (+227)
                </li>
                <li class="" data-ccode="ng" data-country="NIGERIA" data-code="+234"><i class="ng flag"></i>NIGERIA
                    (+234)</li>
                <li class="" data-ccode="ni" data-country="NICARAGUA" data-code="+505"><i class="ni flag"></i>NICARAGUA
                    (+505)</li>
                <li class="" data-ccode="nl" data-country="NETHERLANDS" data-code="+31"><i class="nl flag"></i>NETHERLANDS (+31)</li>
                <li class="" data-ccode="no" data-country="NORWAY" data-code="+47"><i class="no flag"></i>NORWAY (+47)
                </li>
                <li class="" data-ccode="np" data-country="NEPAL" data-code="+977"><i class="np flag"></i>NEPAL (+977)
                </li>
                <li class="" data-ccode="nr" data-country="NAURU" data-code="+674"><i class="nr flag"></i>NAURU (+674)
                </li>
                <li class="" data-ccode="nu" data-country="NIUE" data-code="+683"><i class="nu flag"></i>NIUE (+683)
                </li>
                <li class="" data-ccode="nz" data-country="NEW ZEALAND" data-code="+64"><i class="nz flag"></i>NEW
                    ZEALAND (+64)</li>
                <li class="" data-ccode="om" data-country="OMAN" data-code="+968"><i class="om flag"></i>OMAN (+968)
                </li>
                <li class="" data-ccode="pa" data-country="PANAMA" data-code="+507"><i class="pa flag"></i>PANAMA (+507)
                </li>
                <li class="" data-ccode="pe" data-country="PERU" data-code="+51"><i class="pe flag"></i>PERU (+51)</li>
                <li class="" data-ccode="pf" data-country="FRENCH POLYNESIA" data-code="+689"><i class="pf flag"></i>FRENCH POLYNESIA (+689)</li>
                <li class="" data-ccode="pg" data-country="PAPUA NEW GUINEA" data-code="+675"><i class="pg flag"></i>PAPUA NEW GUINEA (+675)</li>
                <li class="" data-ccode="ph" data-country="PHILIPPINES" data-code="+63"><i class="ph flag"></i>PHILIPPINES (+63)</li>
                <li class="" data-ccode="pk" data-country="PAKISTAN" data-code="+92"><i class="pk flag"></i>PAKISTAN
                    (+92)</li>
                <li class="" data-ccode="pl" data-country="POLAND" data-code="+48"><i class="pl flag"></i>POLAND (+48)
                </li>
                <li class="" data-ccode="pm" data-country="SAINT PIERRE AND MIQUELON" data-code="+508"><i class="pm flag"></i>SAINT PIERRE AND MIQUELON (+508)</li>
                <li class="" data-ccode="pn" data-country="PITCAIRN" data-code="+870"><i class="pn flag"></i>PITCAIRN
                    (+870)</li>
                <li class="" data-ccode="pr" data-country="PUERTO RICO" data-code="+1"><i class="pr flag"></i>PUERTO
                    RICO (+1)</li>
                <li class="" data-ccode="pt" data-country="PORTUGAL" data-code="+351"><i class="pt flag"></i>PORTUGAL
                    (+351)</li>
                <li class="" data-ccode="pw" data-country="PALAU" data-code="+680"><i class="pw flag"></i>PALAU (+680)
                </li>
                <li class="" data-ccode="py" data-country="PARAGUAY" data-code="+595"><i class="py flag"></i>PARAGUAY
                    (+595)</li>
                <li class="" data-ccode="qa" data-country="QATAR" data-code="+974"><i class="qa flag"></i>QATAR (+974)
                </li>
                <li class="" data-ccode="ro" data-country="ROMANIA" data-code="+40"><i class="ro flag"></i>ROMANIA (+40)
                </li>
                <li class="" data-ccode="rs" data-country="SERBIA" data-code="+381"><i class="rs flag"></i>SERBIA (+381)
                </li>
                <li class="" data-ccode="ru" data-country="RUSSIAN FEDERATION" data-code="+7"><i class="ru flag"></i>RUSSIAN FEDERATION (+7)</li>
                <li class="" data-ccode="rw" data-country="RWANDA" data-code="+250"><i class="rw flag"></i>RWANDA (+250)
                </li>
                <li class="" data-ccode="sa" data-country="SAUDI ARABIA" data-code="+966"><i class="sa flag"></i>SAUDI
                    ARABIA (+966)</li>
                <li class="" data-ccode="sb" data-country="SOLOMON ISLANDS" data-code="+677"><i class="sb flag"></i>SOLOMON ISLANDS (+677)</li>
                <li class="" data-ccode="sc" data-country="SEYCHELLES" data-code="+248"><i class="sc flag"></i>SEYCHELLES (+248)</li>
                <li class="" data-ccode="sd" data-country="SUDAN" data-code="+249"><i class="sd flag"></i>SUDAN (+249)
                </li>
                <li class="" data-ccode="se" data-country="SWEDEN" data-code="+46"><i class="se flag"></i>SWEDEN (+46)
                </li>
                <li class="" data-ccode="sg" data-country="SINGAPORE" data-code="+65"><i class="sg flag"></i>SINGAPORE
                    (+65)</li>
                <li class="" data-ccode="sh" data-country="SAINT HELENA" data-code="+290"><i class="sh flag"></i>SAINT
                    HELENA (+290)</li>
                <li class="" data-ccode="si" data-country="SLOVENIA" data-code="+386"><i class="si flag"></i>SLOVENIA
                    (+386)</li>
                <li class="" data-ccode="sk" data-country="SLOVAKIA" data-code="+421"><i class="sk flag"></i>SLOVAKIA
                    (+421)</li>
                <li class="" data-ccode="sl" data-country="SIERRA LEONE" data-code="+232"><i class="sl flag"></i>SIERRA
                    LEONE (+232)</li>
                <li class="" data-ccode="sm" data-country="SAN MARINO" data-code="+378"><i class="sm flag"></i>SAN
                    MARINO (+378)</li>
                <li class="" data-ccode="sn" data-country="SENEGAL" data-code="+221"><i class="sn flag"></i>SENEGAL
                    (+221)</li>
                <li class="" data-ccode="so" data-country="SOMALIA" data-code="+252"><i class="so flag"></i>SOMALIA
                    (+252)</li>
                <li class="" data-ccode="sr" data-country="SURINAME" data-code="+597"><i class="sr flag"></i>SURINAME
                    (+597)</li>
                <li class="" data-ccode="st" data-country="SAO TOME AND PRINCIPE" data-code="+239"><i class="st flag"></i>SAO TOME AND PRINCIPE (+239)</li>
                <li class="" data-ccode="sv" data-country="EL SALVADOR" data-code="+503"><i class="sv flag"></i>EL
                    SALVADOR (+503)</li>
                <li class="" data-ccode="sy" data-country="SYRIAN ARAB REPUBLIC" data-code="+963"><i class="sy flag"></i>SYRIAN ARAB REPUBLIC (+963)</li>
                <li class="" data-ccode="sz" data-country="SWAZILAND" data-code="+268"><i class="sz flag"></i>SWAZILAND
                    (+268)</li>
                <li class="" data-ccode="tc" data-country="TURKS AND CAICOS ISLANDS" data-code="+1649"><i class="tc flag"></i>TURKS AND CAICOS ISLANDS (+1649)</li>
                <li class="" data-ccode="td" data-country="CHAD" data-code="+235"><i class="td flag"></i>CHAD (+235)
                </li>
                <li class="" data-ccode="tg" data-country="TOGO" data-code="+228"><i class="tg flag"></i>TOGO (+228)
                </li>
                <li class="" data-ccode="th" data-country="THAILAND" data-code="+66"><i class="th flag"></i>THAILAND
                    (+66)</li>
                <li class="" data-ccode="tj" data-country="TAJIKISTAN" data-code="+992"><i class="tj flag"></i>TAJIKISTAN (+992)</li>
                <li class="" data-ccode="tk" data-country="TOKELAU" data-code="+690"><i class="tk flag"></i>TOKELAU
                    (+690)</li>
                <li class="" data-ccode="tl" data-country="TIMOR-LESTE" data-code="+670"><i class="tl flag"></i>TIMOR-LESTE (+670)</li>
                <li class="" data-ccode="tm" data-country="TURKMENISTAN" data-code="+993"><i class="tm flag"></i>TURKMENISTAN (+993)</li>
                <li class="" data-ccode="tn" data-country="TUNISIA" data-code="+216"><i class="tn flag"></i>TUNISIA
                    (+216)</li>
                <li class="" data-ccode="to" data-country="TONGA" data-code="+676"><i class="to flag"></i>TONGA (+676)
                </li>
                <li class="" data-ccode="tr" data-country="TURKEY" data-code="+90"><i class="tr flag"></i>TURKEY (+90)
                </li>
                <li class="" data-ccode="tt" data-country="TRINIDAD AND TOBAGO" data-code="+1868"><i class="tt flag"></i>TRINIDAD AND TOBAGO (+1868)</li>
                <li class="" data-ccode="tv" data-country="TUVALU" data-code="+688"><i class="tv flag"></i>TUVALU (+688)
                </li>
                <li class="" data-ccode="tw" data-country="TAIWAN,PROVINCE OF CHINA" data-code="+886"><i class="tw flag"></i>TAIWAN,PROVINCE OF CHINA (+886)</li>
                <li class="" data-ccode="tz" data-country="TANZANIA,UNITED REPUBLIC OF" data-code="+255"><i class="tz flag"></i>TANZANIA,UNITED REPUBLIC OF (+255)</li>
                <li class="" data-ccode="ua" data-country="UKRAINE" data-code="+380"><i class="ua flag"></i>UKRAINE
                    (+380)</li>
                <li class="" data-ccode="ug" data-country="UGANDA" data-code="+256"><i class="ug flag"></i>UGANDA (+256)
                </li>
                <li class="" data-ccode="us" data-country="UNITED STATES" data-code="+1"><i class="us flag"></i>UNITED
                    STATES (+1)</li>
                <li class="" data-ccode="uy" data-country="URUGUAY" data-code="+598"><i class="uy flag"></i>URUGUAY
                    (+598)</li>
                <li class="" data-ccode="uz" data-country="UZBEKISTAN" data-code="+998"><i class="uz flag"></i>UZBEKISTAN (+998)</li>
                <li class="" data-ccode="va" data-country="HOLY SEE (VATICAN CITY STATE)" data-code="+39"><i class="va flag"></i>HOLY SEE (VATICAN CITY STATE) (+39)</li>
                <li class="" data-ccode="vc" data-country="SAINT VINCENT AND THE GRENADINES" data-code="+1784"><i class="vc flag"></i>SAINT VINCENT AND THE GRENADINES (+1784)</li>
                <li class="" data-ccode="ve" data-country="VENEZUELA" data-code="+58"><i class="ve flag"></i>VENEZUELA
                    (+58)</li>
                <li class="" data-ccode="vg" data-country="VIRGIN ISLANDS,BRITISH" data-code="+1284"><i class="vg flag"></i>VIRGIN ISLANDS,BRITISH (+1284)</li>
                <li class="" data-ccode="vi" data-country="VIRGIN ISLANDS,U.S." data-code="+1340"><i class="vi flag"></i>VIRGIN ISLANDS,U.S. (+1340)</li>
                <li class="" data-ccode="vn" data-country="VIET NAM" data-code="+84"><i class="vn flag"></i>VIET NAM
                    (+84)</li>
                <li class="" data-ccode="vu" data-country="VANUATU" data-code="+678"><i class="vu flag"></i>VANUATU
                    (+678)</li>
                <li class="" data-ccode="wf" data-country="WALLIS AND FUTUNA" data-code="+681"><i class="wf flag"></i>WALLIS AND FUTUNA (+681)</li>
                <li class="" data-ccode="ws" data-country="SAMOA" data-code="+685"><i class="ws flag"></i>SAMOA (+685)
                </li>
                <li class="" data-ccode="xk" data-country="KOSOVO" data-code="+381"><i class="xk flag"></i>KOSOVO (+381)
                </li>
                <li class="" data-ccode="ye" data-country="YEMEN" data-code="+967"><i class="ye flag"></i>YEMEN (+967)
                </li>
                <li class="" data-ccode="yt" data-country="MAYOTTE" data-code="+262"><i class="yt flag"></i>MAYOTTE
                    (+262)</li>
                <li class="" data-ccode="za" data-country="SOUTH AFRICA" data-code="+27"><i class="za flag"></i>SOUTH
                    AFRICA (+27)</li>
                <li class="" data-ccode="zm" data-country="ZAMBIA" data-code="+260"><i class="zm flag"></i>ZAMBIA (+260)
                </li>
                <li class="" data-ccode="zw" data-country="ZIMBABWE" data-code="+263"><i class="zw flag"></i>ZIMBABWE
                    (+263)</li>
            </ul>
        </div>
    </div>
    </div>
    <!-- <div class="selectfirst"><p>Select a country first.</p></div>	 -->


    <footer id="footer">
        <div class="container foot-container-main ">
            <div class="row">
                <div class="col-12">
                    <div class="box-list-footer">
                        <div class="box-list box-contact">
                            <div class="title-footer text-color-white title-contact">Contact Us</div>
                            <ul class="one-half first">
                                <li>
                                    <span><i class="fas fa-map-marker-alt flat-icon-footer "></i></span>
                                    <span>9894 Bissonnet Street, Suite 110 <br> Houston, TX 77036.</span>
                                </li>
                                <li>
                                    <span><i class="fa fa-phone-alt flat-icon-footer"></i></span>
                                    <span><a href="tel:713-977-7721">713-977-7721</a></span>
                                </li>
                                <li>
                                    <span><i class="fas fa-envelope flat-icon-footer"></i></span>
                                    <span><a href="mailto:yourmail.@gmail.com">yourmail.@gmail.com</a></span>
                                </li>
                            </ul><!-- /.one-half -->
                        </div><!-- /.widget-services -->

                        <div class="box-list box-useful">
                            <div class="title-footer text-color-white"><a>Useful Link</a></div>
                            <ul class="one-half first">
                                <li><a href="about-us.php" title=""><span><i class="fa fa-square"></i></span>About
                                        Us</a></li>
                                <li><a href="doctor.php" title=""><span><i class="fa fa-square"></i></span>Team</a>
                                </li>
                                <!-- <li><a href="about-us.php" title=""><span><i class="fa fa-square"></i></span>Testomonial</a></li> -->
                                <li><a href="services.php" title=""><span><i class="fa fa-square"></i></span>Services</a></li>
                            </ul><!-- /.one-half -->
                        </div><!-- /.widget-services -->

                        <div class="footer-bottom">
                            <div class="container foot-container">
                                <div class="row footer-row">
                                    <div class="logo-bottom">
                                        <a href="">
                                            <img src="./assets/image/Logolight.png" alt="image">
                                        </a>
                                    </div>
                                    <h3 class="copyright">
                                        © Primetime Home Health Services | all rights reserved
                                    </h3>
                                    <ul class="list-icon-bottom">
                                        <li class="bottom-icon-active  "><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="bottom-icon-style "><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                                        <li class="bottom-icon-style "><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                                        <li class="bottom-icon-style "><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/.footer-bottom-->
    </footer>

    <div class="button-go-top">
        <a href="#" title="" class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="javascript/jquery-validate.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>
    <!-- Revolution Slider -->
    <script type="text/javascript" src="javascript/rev-slider.js"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/slider_v1.js"></script>
    <script type="text/javascript" src="revolution/js/slider_v2.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!--animation-->
    <script src="assets/animation/wow.min.js"></script>
    <script src="javascript/animation.js"></script>
    <!--owl.carousel-->
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="owlcarousel/carousel.js"></script>
    <!--Form javascript-->
    <script src="javascript/proweaverPhone.js"></script>
    <script src="javascript/datepicker.js"></script>
    <script src="javascript/plugins.min.js"></script>
    <script src="javascript/jquery.mask.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // validate signup form on keyup and submit
            $("#submitform").validate({
                rules: {
                    Applicant_Job_Title: "required",
                    First_Name: "required",
                    Last_Name: "required",
                    Address: "required",
                    City: "required",
                    State: "required",
                    ZIP_Code: "required",
                    Email_Address: {
                        required: true,
                        email: true
                    },
                    Docu01: "required",
                    Docu02: "required",
                    Docu03: "required",
                    Docu04: "required",
                    Docu05: "required",
                    ___Name: "required",
                    secode: "required"
                },
                messages: {
                    Applicant_Job_Title: "",
                    First_Name: "",
                    Last_Name: "",
                    Address: "",
                    City: "",
                    State: "",
                    ZIP_Code: "",
                    Email_Address: "",
                    Docu01: "",
                    Docu02: "",
                    Docu03: "",
                    Docu04: "",
                    Docu05: "",
                    ___Name: "",
                    secode: ""
                }
            });


            // f

            $("input").keypress(function(event) {
                if (grecaptcha.getResponse() == "") {
                    var $recaptcha = document.querySelector('#g-recaptcha-response');
                    $recaptcha.setAttribute("required", "required");
                    $('.g-recaptcha').addClass('errors').attr('id', 'recaptcha');
                }
            });


            $('.Date').datepicker();
            $('.Date').attr('autocomplete', 'off');

        });

        $("#toggle7, #toggle8").hide();

        $("input[name='Have_you_ever_been_convicted_of_a_felony?']").change(function() {
            if ($(this).val() == "Yes") {
                $("#toggle8").fadeIn();
                $("#toggle8").find(':input').attr('disabled', false);
            } else {
                $("#toggle8").fadeOut();
                $("#toggle8").find(':input').attr('disabled', 'disabled');
            }
        });

        $("input[name='mental_limitation']")
            .change(function() {
                if ($(this).val() == "Yes") {
                    $("#toggle7").fadeIn();
                    $("#toggle7").find(':input').attr('disabled', false);
                } else {
                    $("#toggle7").fadeOut();
                    $("#toggle7").find(':input').attr('disabled', 'disabled');
                }
            });

        $("#toggle1").find(':input').attr('disabled', 'disabled');
        $("#toggle2").find(':input').attr('disabled', 'disabled');
        $("#toggle3").find(':input').attr('disabled', 'disabled');

        $("#toggle4").find(':input').attr('disabled', 'disabled');
        $("#toggle5").find(':input').attr('disabled', 'disabled');
        $("#toggle6").find(':input').attr('disabled', 'disabled');

        $("#Type_of_Employment_Desired_1").change(function() {
            if ($(this).is(':checked')) {
                $("#toggle1").find(':input').attr('disabled', false);
                $("#toggle4").find(':input').attr('disabled', false);
            } else {
                $("#toggle1").find(':input').attr('disabled', 'disabled');
                $("#toggle4").find(':input').attr('disabled', 'disabled');
            }
        });

        $("#Type_of_Employment_Desired_2").change(function() {
            if ($(this).is(':checked')) {
                $("#toggle2").find(':input').attr('disabled', false);
                $("#toggle5").find(':input').attr('disabled', false);
            } else {
                $("#toggle2").find(':input').attr('disabled', 'disabled');
                $("#toggle5").find(':input').attr('disabled', 'disabled');
            }
        });

        $("#Type_of_Employment_Desired_3").change(function() {
            if ($(this).is(':checked')) {
                $("#toggle3").find(':input').attr('disabled', false);
                $("#toggle6").find(':input').attr('disabled', false);
            } else {
                $("#toggle3").find(':input').attr('disabled', 'disabled');
                $("#toggle6").find(':input').attr('disabled', 'disabled');
            }
        });
        $(function() {
            $('.Date, .date').datepicker({
                autoHide: true,
                zIndex: 2048,
            });
        });

        checkboxValues('Type_of_Employment_Desired');

        function checkboxValues(inputAttrName) {
            var inputAttrName = inputAttrName;
            var inputHidden = $('input[name="' + inputAttrName + '"]').attr('value');
            var checkedValues = '';
            var checkboxClass = $('input.' + inputAttrName + '');

            $.each(checkboxClass, function(index) {
                $(this).on('change', function() {
                    var x = $(this).attr('value') + ', ';
                    if ($(this).is(':checked')) {
                        inputHidden += x;
                        checkedValues = inputHidden.replace(/,\s*$/, "");
                        $('input[name="' + inputAttrName + '"]').attr('value', checkedValues);
                    } else {
                        inputHidden = inputHidden.replace(x, '');
                        checkedValues = inputHidden.replace(/,\s*$/, "");
                        $('input[name="' + inputAttrName + '"]').attr('value', checkedValues);
                    }
                });
            });
        }
    </script>
    <script>
        let sign_name = document.getElementById("sign_name")
        const sign_date = document.getElementById("sign_date")
        const sign_canvas = document.getElementById("sign_canvas")
        const sign_in = () => {
            sign_canvas.innHTML = sign_name.value
        }
        sign_name.addEventListener('input', () => {
            sign_canvas.innerHTML = sign_name.value;
            sign_date = Date().t
        })
    </script>
</body>

</html>