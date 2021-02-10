<?php
session_start();
require_once 'includes/db.php';

//About General setting Start
//Owener Name
$owner_name_selcet_query = "SELECT setting_value FROM about_setting WHERE setting_name='Name' ";
$owner_name_from_about_setting = mysqli_query($db_connect, $owner_name_selcet_query);
$asoc_name = mysqli_fetch_assoc($owner_name_from_about_setting)['setting_value'];


//owner DES

$owner_des_selcet_query = "SELECT setting_value FROM about_setting WHERE setting_name='Description' ";
$owner_des_from_about_setting = mysqli_query($db_connect, $owner_des_selcet_query);
$asoc_des = mysqli_fetch_assoc($owner_des_from_about_setting)['setting_value'];


//Owener Birthday
$owner_bday_selcet_query = "SELECT setting_value FROM about_setting WHERE setting_name='Birthday' ";
$owner_bday_from_about_setting = mysqli_query($db_connect, $owner_bday_selcet_query);
$asoc_bday = mysqli_fetch_assoc($owner_bday_from_about_setting)['setting_value'];

//owner Location

$owner_loc_selcet_query = "SELECT setting_value FROM about_setting WHERE setting_name='Location' ";
$owner_loc_from_about_setting = mysqli_query($db_connect, $owner_loc_selcet_query);
$asoc_loc = mysqli_fetch_assoc($owner_loc_from_about_setting)['setting_value'];

//Owener study
$owner_study_selcet_query = "SELECT setting_value FROM about_setting WHERE setting_name='Study' ";
$owner_study_from_about_setting = mysqli_query($db_connect, $owner_study_selcet_query);
$asoc_study = mysqli_fetch_assoc($owner_study_from_about_setting)['setting_value'];

//owner Mail

$owner_mail_selcet_query = "SELECT setting_value FROM about_setting WHERE setting_name='Mail' ";
$owner_mail_from_about_setting = mysqli_query($db_connect, $owner_mail_selcet_query);
$asoc_mail = mysqli_fetch_assoc($owner_mail_from_about_setting)['setting_value'];


//Owener age
$owner_age_selcet_query = "SELECT setting_value FROM about_setting WHERE setting_name='Age' ";
$owner_age_from_about_setting = mysqli_query($db_connect, $owner_age_selcet_query);
$asoc_age = mysqli_fetch_assoc($owner_age_from_about_setting)['setting_value'];

//owner Interesting

$owner_int_selcet_query = "SELECT setting_value FROM about_setting WHERE setting_name='Interest' ";
$owner_int_from_about_setting = mysqli_query($db_connect, $owner_int_selcet_query);
$asoc_int = mysqli_fetch_assoc($owner_int_from_about_setting)['setting_value'];

//Owener Degree
$owner_degree_selcet_query = "SELECT setting_value FROM about_setting WHERE setting_name='Degree' ";
$owner_degree_from_about_setting = mysqli_query($db_connect, $owner_degree_selcet_query);
$asoc_degree = mysqli_fetch_assoc($owner_degree_from_about_setting)['setting_value'];

//owner Phone

$owner_phone_selcet_query = "SELECT setting_value FROM about_setting WHERE setting_name='Phone' ";
$owner_phone_from_about_setting = mysqli_query($db_connect, $owner_phone_selcet_query);
$asoc_phone = mysqli_fetch_assoc($owner_phone_from_about_setting)['setting_value'];

//About General setting End

//Services General setting Start
//Services Title
$services_title_selcet_query = "SELECT setting_value FROM services_setting WHERE setting_name='Services_Title' ";
$services_title_from_about_setting = mysqli_query($db_connect, $services_title_selcet_query);
$asoc_services_title = mysqli_fetch_assoc($services_title_from_about_setting)['setting_value'];

//Services Description

$services_des_selcet_query = "SELECT setting_value FROM services_setting WHERE setting_name='Services_Description' ";
$services_des_from_about_setting = mysqli_query($db_connect, $services_des_selcet_query);
$asoc_services_des = mysqli_fetch_assoc($services_des_from_about_setting)['setting_value'];

//Services General setting End

//Portfolio General setting Start

//Portfolio Description

$portfolio_description_selcet_query = "SELECT setting_value FROM portfolio_setting WHERE setting_name='Portfolio_Description' ";
$portfolio_description_from_portfolio_setting = mysqli_query($db_connect, $portfolio_description_selcet_query);
$asoc_portfolio_description = mysqli_fetch_assoc($portfolio_description_from_portfolio_setting)['setting_value'];

//Portfolio Designation
$portfolio_owner_designation_selcet_query = "SELECT setting_value FROM portfolio_setting WHERE setting_name='Portfolio_Owner_Designation' ";
$portfolio_owner_designation_from_portfolio_setting = mysqli_query($db_connect, $portfolio_owner_designation_selcet_query);
$asoc_portfolio_owner_designation = mysqli_fetch_assoc($portfolio_owner_designation_from_portfolio_setting)['setting_value'];

//Porfolio General setting End

//Portfolio Images add Saart
$all_tes_query = "SELECT * FROM portfolio_img WHERE status= 'active'  ORDER BY id ASC ";
$all_data_from_db_portfolio_img = mysqli_query($db_connect, $all_tes_query);

//Portfolio Animation Images add Saart
$all_tes_query_animation = "SELECT * FROM portfolio_img_animation WHERE status= 'active'  ORDER BY id ASC";
$all_data_from_db_portfolio_animation_img = mysqli_query($db_connect, $all_tes_query_animation);


//About Images add Saart
$select_profile_pic_query = "SELECT about_img FROM about_img";
$select_profile_pic = mysqli_query($db_connect, $select_profile_pic_query);
$after_assoc_about_img = mysqli_fetch_assoc($select_profile_pic);


?>

<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->

<head>

    <!--BootStrap Start Point -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--BootStrap start End Point -->


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        .jquery-ripples {
            position: relative;
            z-index: 0;
        }
    </style>



    <meta name="description" content="My portfolio">
    <meta name="author" content="Marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?= $asoc_name ?></title>

    <!-- STYLES -->

    <link href="new-css/css.css" rel="stylesheet">
    <link href="new-css/css(1).css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="new-css/plugins.css">
    <link rel="stylesheet" type="text/css" href="new-css/stylem.css">

    <!-- /STYLES -->

    <link rel="shortcut icon" type="images/png" href="images/favicon.png">

    <style type="text/css" id="#jarallax-clip-0">
        #jarallax-container-0 {
            clip: rect(0 989px 586px 0);
            clip: rect(0, 989px, 586px, 0);
        }
    </style>
    <style type="text/css" id="#jarallax-clip-1">
        #jarallax-container-1 {
            clip: rect(0 989px 685px 0);
            clip: rect(0, 989px, 685px, 0);
        }
    </style>
</head>

<body>

    <!-- PRELOADER -->
    <div class="arlo_tm_preloader loaded">
        <div class="spinner_wrap">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /PRELOADER -->


    <!-- WRAPPER ALL -->
    <div class="arlo_tm_all_wrap">
        <div class="wrapper_inner">
            <div class="arlo_tm_popup_news scrollable" tabindex="5000" style="height: 635px; overflow: hidden; outline: none;">
                <a class="closer" href="#">Close</a>
                <div class="container">
                    <div class="news_inner"></div>
                </div>
            </div>

            <!-- Topbar -->
            <div class="arlo_tm_topbar">
                <div class="topbar_inner">
                    <div class="container">
                        <div class="topbar_in">
                            <div class="logo">
                                <a href="#"><img src="images/logo-2.png" alt="" height="20%" width="20%"></a>
                            </div>

                            <div class="trigger">
                                <a href="#">
                                    <span class="menu" style="border:3px solid black;box-shadow: 3px 3px;border-top-left-radius: 7px;">Menu</span>
                                    <span class="close" style="border:3px solid black;box-shadow: 3px 3px;border-top-left-radius: 7px;">Close</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <div class="container">
                        <div class="dropdown_inner">
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#experience">Education & Experience</a></li>
                                <li><a href="#projects">Project Work</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Topbar -->

            <!-- LEFTPART -->
            <div class="arlo_tm_leftpart">
                <div class="inner">
                    <div class="logo">
                        <a class="dark" href="#"><img src="images/logo-2.png" alt=""></a>
                        <a class="light" href="#"><img src="images/logo-2.png" alt=""></a>
                    </div>
                    <div class="menu scrollable" tabindex="5001" style="height: 334px; overflow: hidden; outline: none;">
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#experience">Education & Experience</a></li>
                            <li><a href="#projects">Project Work</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <div class="social">
                            <ul>
                                <li><a href="https://www.facebook.com/nazrul.islam.safa#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/nazrul-islam-safa-7450a2102/#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://github.com/nazrul-safa#"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://wa.link/17mdfu#"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://www.instagram.com/nazrul.safa#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="resize">
                        <a href="#"><span></span></a>
                    </div>
                </div>
            </div>

            <!-- /LEFTPART -->

            <!-- RIGHTPART -->
            <div class="arlo_tm_rightpart">
                <div class="rightpart_inner">

                    <!-- HERO -->
                    <div class="arlo_tm_section" id="home">
                        <div class="arlo_tm_hero_header">
                            <div class="hero_image jarallax" data-img-url="images/back.jpg" data-speed="0" style="background-image: none; z-index: 0; background-attachment: scroll; background-size: auto;" data-jarallax-original-styles="background-image: url(&quot;img/slider/6.jpg&quot;);">
                                <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;">
                                    <div style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; background-image: url(&quot;/arlo_1/img/slider/6.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1041.78px; height: 586px; overflow: hidden; pointer-events: none; margin-left: 333.611px; margin-top: 0px; visibility: visible; transform: translate3d(0px, 0px, 0px);">

                                    </div>
                                </div>
                            </div>
                            <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="989" height="586"></canvas></div>
                            <div class="overlay"></div>
                            <div class="hero_content">
                                <div class="image_wrap">
                                    <img src="" alt="">
                                    <div class="main" data-img-url="images/p61.png" style="background-image: url(&quot;images/p61.png&quot;);">

                                    </div>
                                </div>
                                <div class="name_holder">
                                    <h3>Nazrul <span>Islam Safa</span></h3>
                                </div>
                                <div class="text_typing">
                                    <p>I'm a <span class="arlo_tm_animation_text_word">
                                            <!-- Typed Animate in init.js.download there is this part -->
                                        </span><span class="typed-cursor"></span></p>
                                </div>
                            </div>
                            <div class="arlo_tm_arrow_wrap bounce anchor">
                                <a href="#about"><i class="fa fa-angle-double-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /HERO -->

                    <!-- ABOUT -->
                    <div class="arlo_tm_section" id="about">
                        <div class="arlo_tm_about_wrap_all">
                            <div class="arlo_tm_about">
                                <div class="container">
                                    <div class="arlo_title_holder">
                                        <span>Main Info</span>
                                        <h3>About Me</h3>

                                    </div>
                                    <div class="about_inner">

                                        <div class="leftbox">
                                            <div class="about_image_wrap parallax" data-relative-input="true" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                                                <div class="image layer" data-depth="0.1" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                                    <img src="images/550x650.jpg" alt="">
                                                    <?$after_assoc_about_img['about_img']?>
                                                    <div class="inner" data-img-url="img/about_img/<?= $after_assoc_about_img['about_img'] ?>" style="border:8px solid #000000;""background-image: url(&quot;images/p8.png&quot;);"></div>
                                                </div>
                                                <div class="border layer" data-depth="0.2" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                                                    <img src="images/550x650.jpg" alt="">
                                                    <div class="inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rightbox">


                                            <div class="text">
                                                <p>Hi! My name is <span><?= $asoc_name ?></span>. <?= $asoc_des ?></p>
                                            </div>
                                            <div class="about_short_contact_wrap">
                                                <ul>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced-svg">
                                                            <g>
                                                                <g>
                                                                    <path d="M32,271.692v192c0,17.664,14.368,32,32,32h160v-224H32z"></path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M480,143.692H378.752c7.264-4.96,13.504-9.888,17.856-14.304c25.824-25.952,25.824-68.192,0-94.144    c-25.088-25.28-68.8-25.216-93.856,0c-13.888,13.92-50.688,70.592-45.6,108.448h-2.304c5.056-37.856-31.744-94.528-45.6-108.448    c-25.088-25.216-68.8-25.216-93.856,0C89.6,61.196,89.6,103.436,115.36,129.388c4.384,4.416,10.624,9.344,17.888,14.304H32    c-17.632,0-32,14.368-32,32v48c0,8.832,7.168,16,16,16h208v-64h64v64h208c8.832,0,16-7.168,16-16v-48    C512,158.06,497.664,143.692,480,143.692z M222.112,142.636c0,0-1.344,1.056-5.92,1.056c-22.112,0-64.32-22.976-78.112-36.864    c-13.408-13.504-13.408-35.52,0-49.024c6.496-6.528,15.104-10.112,24.256-10.112c9.12,0,17.728,3.584,24.224,10.112    C208.128,79.5,229.568,134.924,222.112,142.636z M295.776,143.692c-4.544,0-5.888-1.024-5.888-1.056    c-7.456-7.712,13.984-63.136,35.552-84.832c12.896-13.024,35.456-13.088,48.48,0c13.44,13.504,13.44,35.52,0,49.024    C360.128,120.716,317.92,143.692,295.776,143.692z"></path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M288,271.692v224h160c17.664,0,32-14.336,32-32v-192H288z"></path>
                                                                </g>
                                                            </g>

                                                        </svg>
                                                        <span><label>Birthday:</label><?= $asoc_bday ?></span>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="511.634px" height="511.634px" viewBox="0 0 511.634 511.634" style="enable-background:new 0 0 511.634 511.634;" xml:space="preserve" class="svg replaced-svg">
                                                            <g>
                                                                <path d="M482.513,83.942c-7.225-7.233-15.797-10.85-25.694-10.85h-36.541v-27.41c0-12.56-4.477-23.315-13.422-32.261   C397.906,4.475,387.157,0,374.591,0h-18.268c-12.565,0-23.318,4.475-32.264,13.422c-8.949,8.945-13.422,19.701-13.422,32.261v27.41   h-109.63v-27.41c0-12.56-4.475-23.315-13.422-32.261C178.64,4.475,167.886,0,155.321,0H137.05   c-12.562,0-23.317,4.475-32.264,13.422c-8.945,8.945-13.421,19.701-13.421,32.261v27.41H54.823c-9.9,0-18.464,3.617-25.697,10.85   c-7.233,7.232-10.85,15.8-10.85,25.697v365.453c0,9.89,3.617,18.456,10.85,25.693c7.232,7.231,15.796,10.849,25.697,10.849h401.989   c9.897,0,18.47-3.617,25.694-10.849c7.234-7.234,10.852-15.804,10.852-25.693V109.639   C493.357,99.739,489.743,91.175,482.513,83.942z M137.047,475.088H54.823v-82.23h82.224V475.088z M137.047,374.59H54.823v-91.358   h82.224V374.59z M137.047,264.951H54.823v-82.223h82.224V264.951z M130.627,134.333c-1.809-1.809-2.712-3.946-2.712-6.423V45.686   c0-2.474,0.903-4.617,2.712-6.423c1.809-1.809,3.946-2.712,6.423-2.712h18.271c2.474,0,4.617,0.903,6.423,2.712   c1.809,1.807,2.714,3.949,2.714,6.423v82.224c0,2.478-0.909,4.615-2.714,6.423c-1.807,1.809-3.946,2.712-6.423,2.712H137.05   C134.576,137.046,132.436,136.142,130.627,134.333z M246.683,475.088h-91.365v-82.23h91.365V475.088z M246.683,374.59h-91.365   v-91.358h91.365V374.59z M246.683,264.951h-91.365v-82.223h91.365V264.951z M356.323,475.088h-91.364v-82.23h91.364V475.088z    M356.323,374.59h-91.364v-91.358h91.364V374.59z M356.323,264.951h-91.364v-82.223h91.364V264.951z M349.896,134.333   c-1.807-1.809-2.707-3.946-2.707-6.423V45.686c0-2.474,0.9-4.617,2.707-6.423c1.808-1.809,3.949-2.712,6.427-2.712h18.268   c2.478,0,4.617,0.903,6.427,2.712c1.808,1.807,2.707,3.949,2.707,6.423v82.224c0,2.478-0.903,4.615-2.707,6.423   c-1.807,1.809-3.949,2.712-6.427,2.712h-18.268C353.846,137.046,351.697,136.142,349.896,134.333z M456.812,475.088h-82.228v-82.23   h82.228V475.088z M456.812,374.59h-82.228v-91.358h82.228V374.59z M456.812,264.951h-82.228v-82.223h82.228V264.951z"></path>
                                                            </g>

                                                        </svg>
                                                        <span><label>Age:</label> <?= $asoc_age ?></span>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced-svg">
                                                            <g>
                                                                <g>
                                                                    <path d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035    c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719    c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z"></path>
                                                                </g>
                                                            </g>

                                                        </svg>
                                                        <span><label>Location:</label> <a class="href_location" href="#"><?= $asoc_loc ?></a></span>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="512pt" viewBox="0 -104 512.00085 512" width="512pt" class="svg replaced-svg">
                                                            <path d="m510.296875 225.53125-34.320313-145.84375c-9.242187-39.289062-45.457031-79.6875-100.605468-79.6875h-238.738282c-40.363281 0-87.980468 26.003906-100.609374 79.6875l-34.320313 145.84375c-9.316406 39.589844 20.734375 77.570312 61.457031 77.570312 17.304688 0 33.582032-9.21875 42.476563-24.050781l26.4375-44.054687c4.519531-7.539063 12.785156-12.21875 21.574219-12.21875h204.699218c8.789063 0 17.058594 4.683594 21.578125 12.222656l26.433594 44.046875c8.898437 14.835937 25.175781 24.054687 42.5 24.054687 40.660156 0 70.761719-37.941406 61.4375-77.570312zm-318.554687-99.144531h-17.132813v17.132812c0 8.28125-6.714844 14.996094-15 14.996094-8.28125 0-14.996094-6.714844-14.996094-14.996094v-17.132812h-17.132812c-8.28125 0-14.996094-6.714844-14.996094-14.996094 0-8.285156 6.714844-15 14.996094-15h17.132812v-17.132813c0-8.28125 6.714844-14.996093 14.996094-14.996093 8.285156 0 15 6.714843 15 14.996093v17.132813h17.132813c8.28125 0 14.996093 6.714844 14.996093 15 0 8.28125-6.714843 14.996094-14.996093 14.996094zm128.515624 0c-8.277343 0-14.996093-6.71875-14.996093-14.996094 0-8.28125 6.722656-15 14.996093-15 8.28125 0 15 6.71875 15 15 0 8.277344-6.71875 14.996094-15 14.996094zm32.132813 32.128906c-8.277344 0-15-6.71875-15-14.996094 0-8.277343 6.722656-15 15-15s14.996094 6.722657 14.996094 15c0 8.277344-6.71875 14.996094-14.996094 14.996094zm0-64.257813c-8.277344 0-15-6.71875-15-15 0-8.277343 6.722656-14.996093 15-14.996093s14.996094 6.71875 14.996094 14.996093c0 8.28125-6.71875 15-14.996094 15zm32.128906 32.128907c-8.277343 0-15-6.71875-15-14.996094 0-8.28125 6.722657-15 15-15 8.277344 0 14.996094 6.71875 14.996094 15 0 8.277344-6.71875 14.996094-14.996094 14.996094zm0 0" fill-rule="evenodd"></path>
                                                        </svg>
                                                        <span><label>Interests:</label><?= $asoc_int ?></span>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced-svg">
                                                            <g>
                                                                <g>
                                                                    <path d="M256,0c-49.629,0-90,41.371-90,91c0,49.629,40.371,90,90,90c49.629,0,90-40.371,90-90C346,41.371,305.629,0,256,0z"></path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M286,181h-30h-30c-21.158,0-41.603,5.469-60.19,14.773c31.569,8.518,61.293,20.786,90.19,37.372    c28.898-16.586,58.621-28.854,90.19-37.372C327.603,186.469,307.158,181,286,181z"></path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M482,271c-16.569,0-30,13.431-30,30v60c0,16.567,13.431,30,30,30c16.569,0,30-13.433,30-30v-60    C512,284.431,498.569,271,482,271z"></path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M30,271c-16.569,0-30,13.431-30,30v60c0,16.567,13.431,30,30,30c16.569,0,30-13.433,30-30v-60    C60,284.431,46.569,271,30,271z"></path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M45,211c-8.291,0-15,6.709-15,15v15c33.091,0,60,26.909,60,60v60c0,33.091-26.909,60-60,60v15c0,8.291,6.709,15,15,15    c76.901,0,138.39,24.286,196,61V259.594C183.13,226.414,120.903,211,45,211z"></path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M482,241v-15c0-8.291-6.709-15-15-15c-75.903,0-138.13,15.414-196,48.594V512c57.61-36.714,119.099-61,196-61    c8.291,0,15-6.709,15-15v-15c-33.091,0-60-26.909-60-60v-60C422,267.909,448.909,241,482,241z"></path>
                                                                </g>
                                                            </g>

                                                        </svg>
                                                        <span><label>Study:</label> <a class="#" href="http://www.northsouth.edu/#"><?= $asoc_study ?></a></span>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="791.803px" height="791.803px" viewBox="0 0 791.803 791.803" style="enable-background:new 0 0 791.803 791.803;" xml:space="preserve" class="svg replaced-svg">
                                                            <g>
                                                                <path d="M395.904,475.016l-236.203-72.7v71.524v49.896c0,56.133,105.787,101.644,236.274,101.644   c130.48,0,236.285-45.511,236.285-101.644c0-0.442-0.145-0.886-0.154-1.318V402.316L395.904,475.016z"></path>
                                                                <path d="M0,318.734l84.383,30.185l7.191-15.401l31-2.635l4.42,4.599l-26.601,6.308l-3.877,11.475   c-0.007,0-60.087,125.604-51.263,187.05c0,0,37.502,22.37,74.988,0l9.962-168v-13.984l55.8-12.588l-3.941,9.705l-41.604,13.529   l19.242,6.874l236.203,72.7l236.201-72.7l159.699-57.116l-395.9-152.313L0,318.734z"></path>
                                                            </g>

                                                        </svg>
                                                        <span><label>Degree:</label> <?= $asoc_degree ?></span>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="550.795px" height="550.795px" viewBox="0 0 550.795 550.795" style="enable-background:new 0 0 550.795 550.795;" xml:space="preserve" class="svg replaced-svg">
                                                            <g>
                                                                <g>
                                                                    <path d="M501.613,491.782c12.381,0,23.109-4.088,32.229-12.16L377.793,323.567c-3.744,2.681-7.373,5.288-10.801,7.767    c-11.678,8.604-21.156,15.318-28.434,20.129c-7.277,4.822-16.959,9.737-29.045,14.755c-12.094,5.024-23.361,7.528-33.813,7.528    h-0.306h-0.306c-10.453,0-21.72-2.503-33.813-7.528c-12.093-5.018-21.775-9.933-29.045-14.755    c-7.277-4.811-16.75-11.524-28.434-20.129c-3.256-2.387-6.867-5.006-10.771-7.809L16.946,479.622    c9.119,8.072,19.854,12.16,32.234,12.16H501.613z"></path>
                                                                    <path d="M31.047,225.299C19.37,217.514,9.015,208.598,0,198.555V435.98l137.541-137.541    C110.025,279.229,74.572,254.877,31.047,225.299z"></path>
                                                                    <path d="M520.059,225.299c-41.865,28.336-77.447,52.73-106.75,73.195l137.486,137.492V198.555    C541.98,208.396,531.736,217.306,520.059,225.299z"></path>
                                                                    <path d="M501.613,59.013H49.181c-15.784,0-27.919,5.33-36.42,15.979C4.253,85.646,0.006,98.97,0.006,114.949    c0,12.907,5.636,26.892,16.903,41.959c11.267,15.061,23.256,26.891,35.961,35.496c6.965,4.921,27.969,19.523,63.012,43.801    c18.917,13.109,35.368,24.535,49.505,34.395c12.05,8.396,22.442,15.667,31.022,21.701c0.985,0.691,2.534,1.799,4.59,3.269    c2.215,1.591,5.018,3.61,8.476,6.107c6.659,4.816,12.191,8.709,16.597,11.683c4.4,2.975,9.731,6.298,15.985,9.988    c6.249,3.685,12.143,6.456,17.675,8.299c5.533,1.842,10.655,2.766,15.367,2.766h0.306h0.306c4.711,0,9.834-0.924,15.368-2.766    c5.531-1.843,11.42-4.608,17.674-8.299c6.248-3.69,11.572-7.02,15.986-9.988c4.406-2.974,9.938-6.866,16.598-11.683    c3.451-2.497,6.254-4.517,8.469-6.102c2.057-1.476,3.605-2.577,4.596-3.274c6.684-4.651,17.1-11.892,31.104-21.616    c25.482-17.705,63.01-43.764,112.742-78.281c14.957-10.447,27.453-23.054,37.496-37.803c10.025-14.749,15.051-30.22,15.051-46.408    c0-13.525-4.873-25.098-14.598-34.737C526.461,63.829,514.932,59.013,501.613,59.013z"></path>
                                                                </g>
                                                            </g>

                                                        </svg>
                                                        <span><label>Mail:</label> <a href="mailto:example@gmail.com"><?= $asoc_mail ?></a></span>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="348.077px" height="348.077px" viewBox="0 0 348.077 348.077" style="enable-background:new 0 0 348.077 348.077;" xml:space="preserve" class="svg replaced-svg">
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M340.273,275.083l-53.755-53.761c-10.707-10.664-28.438-10.34-39.518,0.744l-27.082,27.076     c-1.711-0.943-3.482-1.928-5.344-2.973c-17.102-9.476-40.509-22.464-65.14-47.113c-24.704-24.701-37.704-48.144-47.209-65.257     c-1.003-1.813-1.964-3.561-2.913-5.221l18.176-18.149l8.936-8.947c11.097-11.1,11.403-28.826,0.721-39.521L73.39,8.194     C62.708-2.486,44.969-2.162,33.872,8.938l-15.15,15.237l0.414,0.411c-5.08,6.482-9.325,13.958-12.484,22.02     C3.74,54.28,1.927,61.603,1.098,68.941C-6,127.785,20.89,181.564,93.866,254.541c100.875,100.868,182.167,93.248,185.674,92.876     c7.638-0.913,14.958-2.738,22.397-5.627c7.992-3.122,15.463-7.361,21.941-12.43l0.331,0.294l15.348-15.029     C350.631,303.527,350.95,285.795,340.273,275.083z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>

                                                        </svg>
                                                        <span><label>Phone:</label> <a href="tel:+77 022 177 05 05"><?= $asoc_phone ?></a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buttons">

                                                <ul>
                                                    <li><a href="cv.pdf" download="cv.pdf"><span>Download CV</span></a></li>
                                                    <li><a href="#contact"><span>Send Message</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /ABOUT -->

                    <!-- SERVICES QUERY -->
                    <?php
                    $select_query = "SELECT * FROM services_box WHERE status= 'active'  ORDER BY id ASC LIMIT 8";
                    $db_query_box =  mysqli_query($db_connect, $select_query);


                    $select_query_skills = "SELECT * FROM services_skills WHERE status= 'active'  ORDER BY id ASC LIMIT 8";
                    $db_query_skills =  mysqli_query($db_connect, $select_query_skills);
                    ?>


                    <!-- SERVICES -->
                    <div class="arlo_tm_section" id="services">
                        <div class="arlo_tm_services">
                            <div class="container">
                                <div class="arlo_title_holder">
                                    <span>What I Do</span>
                                    <h3>Services</h3>
                                </div>
                                <div class="service_inner">
                                    <?php
                                    foreach ($db_query_box as $service_box) :
                                    ?>
                                        <ul>
                                            <li>
                                                <div class="inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 467.765 467.765" height="512" viewBox="0 0 467.765 467.765" width="512" class="svg replaced-svg">
                                                        <path d="m146.175 87.707-146.175 146.176 146.175 146.175 41.34-41.34-104.834-104.835 104.834-104.836z"></path>
                                                        <path d="m321.59 87.707-41.34 41.34 104.834 104.836-104.834 104.834 41.34 41.34 146.175-146.175z"></path>
                                                    </svg>
                                                    <h3><?= $service_box['services_box_title'] ?></h3>
                                                    <p><?= $service_box['services_box_des'] ?></p>
                                                </div>
                                            </li>

                                        </ul>
                                    <?php
                                    endforeach;
                                    ?>
                                    <div class="arlo_tm_progress_wrap">
                                        <div class="progress_wrap_inner">
                                            <div class="left">
                                                <div class="main_title">
                                                    <h3>In a <span>short time</span>, <?= $asoc_services_title ?></h3>
                                                </div>
                                                <div class="text">
                                                    <p><?= $asoc_services_des ?></p>
                                                </div>
                                            </div>


                                            <div class="right">
                                                <?php
                                                foreach ($db_query_skills as $service_skills) :

                                                ?>
                                                    <div class="arlo_progress">
                                                        <div class="progress_inner" data-value=" <?= $service_skills['data_value'] ?>" data-color="#5FCB71">
                                                            <span><span class="label"><?= $service_skills['skills_title'] ?></span><span class="number"> <?= $service_skills['data_value'] ?>%</span></span>
                                                            <div class="background">
                                                                <div class="bar open">
                                                                    <div class="bar_in" style="width:  <?= $service_skills['data_value'] ?>%; background-color: rgb(95, 203, 113);"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                <?php
                                                endforeach
                                                ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /SERVICES -->

                        <!-- PORTFOLIO -->
                        <div class="arlo_tm_section" id="portfolio">
                            <div class="arlo_tm_portfolio">
                                <div class="container">
                                    <div class="arlo_title_holder">
                                        <span>Creative Works</span>
                                        <h3>Portfolio</h3>
                                    </div>
                                    <div class="portfolio_inner">
                                        <div class="arlo_tm_portfolio_titles" style="left: 106px; top: 610px;">Popup Image<span class="work__cat">Image</span></div>
                                        <div class="portfolio_filter">
                                            <ul>
                                                <li><a href="#" class="current" data-filter="*">All</a></li>
                                                <li><a href="#" data-filter=".video">Video</a></li>
                                                <li><a href="#" data-filter=".animation">Animation</a></li>
                                                <li><a href="#" data-filter=".image">Image</a></li>
                                            </ul>
                                        </div>
                                        <div class="portfolio_list">
                                            <ul class="gallery_zoom">
                                                <li class="video">
                                                    <div class="inner">
                                                        <div class="entry arlo_tm_portfolio_animation_wrap" data-title="Popup Video" data-category="Video">
                                                            <a class="popup-youtube" href="images/Demo.mp4#">
                                                                <img src="images/vdologo.png" alt="">
                                                                <div class="main_image" data-img-url="img/portfolio/1.jpg" style="background-image: url(&quot;img/portfolio/1.jpg&quot;);"></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="video">
                                                    <div class="inner">
                                                        <div class="entry arlo_tm_portfolio_animation_wrap" data-title="Popup Video" data-category="Video">
                                                            <a class="popup-youtube" href="images/v.mp4#">
                                                                <img src="images/vdologo.png" alt="">
                                                                <div class="main_image" data-img-url="img/portfolio/1.jpg" style="background-image: url(&quot;img/portfolio/1.jpg&quot;);"></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php
                                                foreach ($all_data_from_db_portfolio_animation_img as $animation_img_from_db) :
                                                ?>

                                                    <li class="animation">
                                                        <div class="inner">
                                                            <div class="entry arlo_tm_portfolio_animation_wrap" data-title="Animate Image" data-category="Animation">
                                                                <a class="zoom" href="#">
                                                                    <img src="img/portfolio_img/animation/<?= $animation_img_from_db['img_animation'] ?>" alt="">
                                                                    <div class="main_image" data-img-url="img/portfolio/8.webp" style="background-image: url(&quot;img/portfolio/8.webp&quot;);"></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php
                                                endforeach;
                                                ?>
                                                <?php
                                                foreach ($all_data_from_db_portfolio_img as $img_from_db) :
                                                ?>

                                                    <li class="image">
                                                        <div class="inner">
                                                            <div class="entry arlo_tm_portfolio_animation_wrap" data-title="Popup Image" data-category="Image">
                                                                <a class="zoom" href="#">
                                                                    <img src="img/portfolio_img/<?= $img_from_db['img'] ?>" alt="">
                                                                    <div class="main_image" data-img-url="img/portfolio/2.jpg" style="background-image: url(&quot;img/portfolio/2.jpg&quot;);"></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php
                                                endforeach;
                                                ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /PORTFOLIO -->

                        <!-- TESTIMONIAL -->
                        <div class="arlo_tm_section">
                            <div class="arlo_tm_testimonial">
                                <div class="testimonial_inner">
                                    <div class="testimonial_bg">
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="testimonial_content">
                                        <div class="container">
                                            <div class="content_inner">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" class="svg replaced-svg">
                                                        <g>
                                                            <g id="right_x5F_quote_x5F_alt">
                                                                <g>
                                                                    <polygon style="fill:#5FCB71;" points="0,4 0,28 12,16 12,4    "></polygon>
                                                                    <polygon style="fill:#5FCB71;" points="20,4 20,28 32,16 32,4    "></polygon>
                                                                </g>
                                                            </g>
                                                        </g>

                                                    </svg>
                                                </div>
                                                <div class="texts">
                                                    <p><?= $asoc_portfolio_description ?></p>
                                                    <div class="author">
                                                        <div class="image">
                                                            <div class="main" data-img-url="img/about/2.jpg" style="background-image: url(&quot;img/about/2.jpg&quot;);"></div>
                                                        </div>
                                                        <div class="job">
                                                            <h3><?= $asoc_name ?></h3>
                                                            <span><?= $asoc_portfolio_owner_designation ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /TESTIMONIAL -->
                        <!--Dynamic Select query for education and experience -->
                        <?php
                        $select_query_education = "SELECT * FROM education WHERE status= 'active'  ORDER BY id ASC LIMIT 8";
                        $db_query_education =  mysqli_query($db_connect, $select_query_education);
                        ?>
                        <?php
                        $select_query_education = "SELECT * FROM experience WHERE status= 'active'  ORDER BY id ASC LIMIT 8";
                        $db_query_experience =  mysqli_query($db_connect, $select_query_education);
                        ?>




                        <!-- TIMELINE -->
                        <div class="arlo_tm_section" id="experience">
                            <div class="arlo_tm_timeline">
                                <div class="container">
                                    <div class="arlo_title_holder">
                                        <span>Working Process</span>
                                        <h3>Education & Experience</h3>
                                    </div>
                                    <div class="timeline_inner">
                                        <div class="left">
                                            <ul>
                                                <?php
                                                foreach ($db_query_education as $education) :
                                                ?>
                                                    <li>
                                                        <div class="inner">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve" class="svg replaced-svg">
                                                                <g>
                                                                    <path d="M47.374,46.125c-4.482-1.975-7.068-3.614-11.768-5.162c-0.351-0.115-0.77-0.34-0.909-0.611   c-0.382-0.725-0.65-1.496-0.922-2.262c-0.173-0.486-0.326-0.945-0.95-1.18c-0.167-0.062-0.32-0.344-0.316-0.524   c0.032-1.772-0.598-3.061,0.18-3.757c1.417-1.273,1.095-2.834,1.804-3.607c0.708-0.772,2.462-6.253,2.126-6.958   c-0.336-0.702-1.521-0.373-1.245-0.714c1.09-1.344,1.426-4.059,1.37-6.285c0.194,0.403,0.301,0.841,0.301,1.32v0.461l6.937-4.508   L25,0L6.021,12.336l1.715,1.114v2.496c-0.329,0.084-0.578,0.368-0.578,0.723c0,0.275,0.156,0.509,0.379,0.642L6.02,25.955h3.799   L8.3,17.311c0.222-0.132,0.377-0.366,0.377-0.642c0-0.355-0.249-0.639-0.577-0.723v-2.258l4.856,3.156v-0.303   c0.036,0.451,0.102,0.916,0.212,1.399c0.375,1.644,1.098,1.542,1.684,3.406c0.009,0.028,0.001,0.065,0.001,0.098v0.1   c-0.046,0.212-0.216,0.451-0.359,0.49c-0.697,0.193-0.714,0.577-0.62,1.074c0.065,0.342,0.598,2.884,0.906,3.794   c0.232,0.677,0.681,1.315,0.805,2.005c0.25,1.376,0.842,2.573,1.923,3.61c0.179,0.174,0.313,0.461,0.293,0.686   c-0.084,1.061-0.209,2.12-0.376,3.171c-0.033,0.208-0.286,0.511-0.491,0.549c-0.819,0.147-0.946,0.688-1.141,1.237   c-0.259,0.723-0.535,1.445-0.86,2.145c-0.103,0.219-0.356,0.445-0.606,0.541c-1.457,0.547-2.94,1.047-4.408,1.575   c-1.561,0.567-5.697,3.103-7.233,3.81c-0.903,0.418-0.4,3.77-0.4,3.77c17.865,0,27.484,0,45.347,0   C47.633,50,48.27,46.521,47.374,46.125z"></path>
                                                                </g>

                                                            </svg>
                                                            <p class="year"><?= $education['year_start'] ?> - <?= $education['year_end'] ?></p>
                                                            <h3 class="title"><?= $education['title'] ?></h3>
                                                            <p class="text"><?= $education['des'] ?></p>
                                                        </div>
                                                    </li>
                                                <?php
                                                endforeach;
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="right">
                                            <ul>
                                                <?php
                                                foreach ($db_query_experience as $experience) :
                                                ?>
                                                    <li>
                                                        <div class="inner">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -31 512 512" class="svg replaced-svg">
                                                                <path d="m211 240h90v30h-90zm0 0"></path>
                                                                <path d="m415.378906 270h-84.378906v15c0 8.289062-6.710938 15-15 15h-120c-8.289062 0-15-6.710938-15-15v-15h-84.378906c-19.394532 0-36.546875-12.363281-42.6875-30.761719l-53.933594-161.828125v327.589844c0 24.8125 20.1875 45 45 45h422c24.8125 0 45-20.1875 45-45v-327.578125l-53.9375 161.816406c-6.136719 18.398438-23.289062 30.761719-42.683594 30.761719zm0 0"></path>
                                                                <path d="m316 0h-120c-24.8125 0-45 20.1875-45 45v15h-125.191406l56.574218 169.746094c2.050782 6.136718 7.777344 10.253906 14.238282 10.253906h84.378906v-15c0-8.289062 6.710938-15 15-15h120c8.289062 0 15 6.710938 15 15v15h84.378906c6.460938 0 12.1875-4.117188 14.238282-10.253906l56.578124-169.746094h-125.195312v-15c0-24.8125-20.1875-45-45-45zm-135 60v-15c0-8.277344 6.722656-15 15-15h120c8.277344 0 15 6.722656 15 15v15zm0 0"></path>
                                                            </svg>
                                                            <p class="year"> <?= $experience['year_start'] ?> - <?= $experience['year_end'] ?></p>
                                                            <h3 class="title"> <?= $experience['title'] ?> </h3>
                                                            <p class="text"><?= $experience['des'] ?> </p>
                                                        </div>
                                                    </li>
                                                <?php
                                                endforeach;
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /TIMELINE -->


                        <!-- NEWS -->
                        <div class="arlo_tm_section" id="projects">
                            <div class="arlo_tm_news">
                                <div class="container">
                                    <div class="arlo_title_holder">
                                        <span>Creative Work</span>
                                        <h3>Project Work</h3>
                                    </div>
                                    <div class="news_inner" id>
                                        <ul>
                                            <li>
                                                <div class="inner">
                                                    <div class="image">
                                                        <img class="larger" src="images/project/111.png" alt="Front-pic">
                                                        <img class="smaller" src="images/project/vision11.jpg" alt="Inner-pic">
                                                        <a class="link" href="project1.html#"></a>
                                                    </div>
                                                    <div class="details">
                                                        <div class="date">
                                                            <p>December 01, 2019 by Group Work</p>
                                                        </div>
                                                        <h3 class="title"><a href="project1.html#">Computer vision based vehicle Detecting, Tracking and Counting System.</a></h3>
                                                    </div>
                                                    <div class="full_des">

                                                        <h3>Project Credit:</h3><br>
                                                        Md Nazrul Islam Safa<br>
                                                        Md Akif Arshad Chowdhury<br>
                                                        Devodyuti Aich<br>
                                                        Debraj Saha Dipta<br>
                                                        Nazmus Shahadat<br>
                                                        <h2><u>Project Report</u></h2>
                                                        <p>

                                                            1. Introduction <br>
                                                            In this days the government of Bangladesh is highly emphasizing the digitalization of every field of human life. So it is time when we take our traffic system on a digital level. For this, we came up with an idea of creating a system which will record traffic load on roads and give this information to human to control the traffic system of road.<br>
                                                            2. Description of the project <br>
                                                            In our country, we find that traffic police manually controls vehicles on the road. He waves his hand to start or stop a signal. Sometimes he stops a signal for so long a creates a huge traffic line as he doesn’t know the proper amount of vehicle running on the road at that time. So it often happens that he has stopped a signal so long thinking there is less vehicle on that road rather than others, but in actual that road has flooded with traffic. So here, we are creating a software project which will take footages from surveillance cameras installed by DMP, then detect vehicle and count them. The system takes recorded video footages as input and then detects the vehicles. These detected vehicles are classified into five groups such as Car, Bus, CNG, Pickup, and Truck. After detecting the vehicles, the sytem counts them and categorize in particular groups. The vehicles are counted when they reaches a certain margin of the road. If they enters into the margin line, then the vehicles are counted in for particular group. Thus the system creates certain data of that road at any particular time, which will help humans to make further decisions.<br>

                                                            3. Purpose of Project <br>
                                                            As we know, information is the strongest weapon in the modern world. This project gives us the information on roads which we need to make decision how to manage traffic flow. It creates data which can be used in further decision makaing in how to control traffic, which type of materials should be used to build a road so that it can take the heavy load of vehicles etc.<br>

                                                            4. Introduction:<br>
                                                            In this project we have used so many tool <br>
                                                            1) Computer vision annotation tool (CVAT)<br>
                                                            2) Docker<br>
                                                            3) Tensorflow<br>
                                                            4) YOLO v2<br>
                                                            5) CUDA<br>
                                                            6) Python<br>
                                                            7) Open CV<br>

                                                            5. Description:<br>
                                                            CVAT annotation tool:<br>
                                                            Computer Vision Annotation Tool (CVAT) is an open-source tool for annotating digital images
                                                            and videos. The main function of the application is to provide users with convenient annotation
                                                            instruments. <br>
                                                            CVAT is a browser-based application for both individuals and teams that supports different work
                                                            scenarios. The main tasks of supervised machine learning can be divided into three groups:<br>
                                                            1. Object detection<br>
                                                            2. Image classification<br>
                                                            3. Image segmentation<br>
                                                            Data annotation in CVAT starts by creating an annotation task with the following instructions:<br>
                                                            1. Name a task<br>
                                                            2. Specify labels and their attributes<br>
                                                            3. Choose files to download<br>

                                                            We have marked five labels Bus, Truck, Car, CNG, and Pickup. Datasets are loaded from the
                                                            local file system or a mounted file system inside a container. A task can include one image
                                                            archive, one video, a set or a catalog of images from shared storage.<br>


                                                            6. CVAT label creation & video upload into annotation tool.<br>

                                                            Then we press the Submit button, and it will be added into the list of annotation tasks. Each link inside the Jobs section corresponds to one segment. We can use four shapes to annotate images: boxes, polygons, polylines, and points.
                                                            When we download annotations from Computer Vision Annotation Tool (CVAT) we can choose one of several data formats. We selected PASCAL VOC annotation format for our project.
                                                            <br>

                                                            7. Video annotation<br>
                                                            There are two modes in CVAT annotation mode and interpolation mode.
                                                            Annotation mode: Attribute Annotation Mode was developed for image classification and accelerates the process of attribute annotation by focusing the annotator’s attention on just one exact attribute. In each image, it is possible to have many different objects. Each object can have multiple attributes.
                                                            Interpolation mode: In interpolation, mode frames are annotated. The annotation contains tracks. Each track corresponds to an object which can be presented on multiple frames. The same object cannot be presented on the same frame in multiple locations. Each location of the object can have multiple attributes even if an attribute is immutable for the object it will be cloned for each location.<br>
                                                            There are several data formal in CVAT. Format selection is possible after clicking on the Upload annotation / Dump annotation button. They are:<br>
                                                            1. CVAT XML v1.1 for images <br>
                                                            2. CVAT XML v1.1 for a video<br>
                                                            3. Pascal VOC<br>
                                                            4. YOLO<br>
                                                            5. Tyryrtfy<br>
                                                            6. PNG mask <br>
                                                            7. PNG instance mask<br>
                                                            8. MOT<br>
                                                            9. LabelMe<br>
                                                            10. TFrecord<br>

                                                            We can use the default TF Annotation models or upload your own to pre-load bounding boxes directly within CVAT.<br>

                                                            4.2.2 Docker:<br>
                                                            Docker Desktop for Windows is Docker designed to run on Windows 10. It is a native Windows application that provides an easy-to-use development environment for building, shipping, and running dockerized apps. Docker Desktop for Windows uses Windows-native Hyper-V virtualization and networking and is the fastest and most reliable way to develop Docker apps on Windows. Docker Desktop for Windows supports running both Linux and Windows Docker containers. We use Docker to install CVAT in our windows.



                                                            4.2.3 YOLO v2:<br>
                                                            This model is a real-time neural network for object detection that detects 20 different classes. It is made up of 9 convolutional layers and six max-pooling layers and is a smaller version of the more complex full YOLOv2 network. The Tiny YOLO model was trained on the Pascal VOC dataset.
                                                            This network divides the image into regions and predicts bounding boxes and probabilities for each region. These bounding boxes are weighted by the predicted probabilities.

                                                            The process to train our own dataset:<br>
                                                            Before training the model should be prepared for inferences. To gain a trained model, here are what we did<br>
                                                            1. Create VOC dataset<br>
                                                            2. Change configurations to fit the model into your own situation<br>
                                                            3. Build the model<br>
                                                            4. Train the model<br>
                                                            First, In our project, we used darkflow (open-sourced project for YOLOv2) and its pre-trained parameters.<br>
                                                            Second, there should be a filev for specifying the model’s configuration. If not, you should change it in the code itself. For darkflow, there is a file (*.cfg) for each model.<br>
                                                            The third and the fourth steps probably different from various implementations. In darkflow, the code below shows how we train our own dataset.<br>
                                                            “python flow --model cfg/tiny-yolo-5c.cfg --load –1 tiny-yolo.weights --train --annotation train/Annotation --dataset train/Images –epoch 100 –gpu 0.8 –-savepb”<br>




                                                            In tiny-yolo-5c.cfg, change classes in the [region] layer (the last layer) to the number of classes you are going to train for. In our case, classes are set to 5.
                                                            We choose to train the data with 100 epoch, an epoch refers to one cycle through the full training dataset.<br>


                                                            4.2.4 CUDA:<br>
                                                            CUDA (Compute Unified Device Architecture) is a parallel computing platform and application programming interface (API) model created by NVDIA. It allows software developers and software engineers to use a CUDA-enabled graphics processing unit (GPU) for general-purpose processing an approach termed GPGPU (General-Purpose computing on Graphics Processing Units). The CUDA platform is a software layer that gives direct access to the GPU's virtual instruction set and parallel computational elements, for the execution of compute kernels.
                                                            The CUDA Toolkit from NVIDIA provides everything we need to develop GPU-accelerated applications. The CUDA Toolkit includes GPU-accelerated libraries, a compiler, development tools and the CUDA runtime.<br>
                                                            4.2.5 Tensorflow:<br>
                                                            TensorFlow is an open-source library for fast numerical computing. It was created and is maintained by Google and released under the Apache 2.0 open source license. The API is nominally for the Python programming language.<br>
                                                            The TensorFlow Object Counting API is an open-source framework built on top of TensorFlow and Keras that makes it easy to develop object counting systems.
                                                            4.2.6 Python:<br>
                                                            For Installation of TensorFlow, we need Python SciPy environment. TensorFlow works with Python 2.7 and Python 3.3+. For Our project, we installed python<br> 3.3 <br>
                                                            Python is a general-purpose programming language started by Guido van Rossum that became very popular very quickly, mainly because of its simplicity and code readability. It enables the programmer to express ideas in fewer lines of code without reducing readability.<br>




                                                            4.2.7 Open CV:<br>
                                                            Open CV (Open source computer vision) is a library of programming functions mainly aimed at real-time computer vision. Open CV supports a wide variety of programming languages such as C++, Python, Java, etc., and is available on different platforms including Windows. Open CV-Python is a library of Python bindings designed to solve computer vision problems.
                                                            Open CV-Python makes use of Numpy, which is a highly optimized library for numerical operations with a MATLAB-style syntax. All the Open CV array structures are converted to and from Numpy arrays. This also makes it easier to integrate with other libraries that use Numpy such as SciPy and Matplotlib.<br>

                                                            Conclution:<br>It has been successfully proven through the prototype that computer vision-based vehicle counting system works in its unique way. The vehicle detection will increase with more dataset training to the machine. The CCTV installed by DMP gives us the footage; we use it to gather traffic data and provide it to the police so that they can use it. Moreover, this system will also help civil engineers to gather data on traffic load while building or repairing roads.<br>

                                                            Installation of CCTV cameras to monitor and provide security is a very common process now a day. So what if we not only use those cameras to monitor but also explore more use of those cameras? This was the whole thing to help our traffic police to solve the traffic jam. Our target was to create something helpful in this field at the minimum cost that we have done in this project.
                                                        </p>


                                                        <div class="social">
                                                            <span>Share:</span>
                                                            <ul>
                                                                <li><a href="https://www.facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="https://www.twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="https://www.liknedin.com/#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="https://www.instagram.com/#"><i class="fa fa-instagram"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="inner">
                                                    <div class="image">
                                                        <img class="larger" src="images/project/pbx2.png" alt="front1">
                                                        <img class="smaller" src="images/project/pbx11.png" alt="inner1">
                                                        <a class="link" href="project2.html#"></a>
                                                    </div>
                                                    <div class="details">
                                                        <div class="date">
                                                            <p>December 19, 2018 by Group Work</p>
                                                        </div>
                                                        <h3 class="title"><a href="project2.html#">PBX Telephony System <br> (Asterisk)</a></h3>
                                                    </div>
                                                    <div class="full_des">
                                                        <p>
                                                            1.Introduction:<br>

                                                            1.1 -Sometimes we need to deliver a common message to many persons in office, Educational institute and other platforms. It’s very time consuming and costly to call individually. That’s why we use Asterisk,Elastix,Asterisk Now,Isabel,Free-PBX,Distro,PBX in Flash ,Trixbox server to communicate a large number of people at the same time. Asterisk is a software that turns an ordinary computer into communication server and in our project we will customize it. <br>
                                                            1.2- Many businesses today are beginning to realize just how advantageous IP (internet protocol) technology is when it comes to facilitating communications. By using internet-based systems, organizations are able to build a single infrastructure that supports both their voice and data communications needs.<br>
                                                            1.3-IP phone systems use voice over internet protocol (VoIP) technology for placing and conducting telephone calls. Through IP technology, businesses are able to make their telephone and computer networks work together to overcome the limits previously set by traditional phone systems. In other words, organizations today have the option of not being bound to the limitations of telephone networks. What the service providers were able to offer in the past can now be achieved by the right internet-based technologies <br>

                                                            2.Problem Statement:<br>

                                                            2.1 -Time consuming:<br>
                                                            If someone have to communicate with thousands of people then it’s very much time consuming to contact with everyone and in many cases it’s almost impossible.<br>
                                                            2.2 - Costly:<br>
                                                            When we have to call many people by cellular network it becomes too costly which is not a positive side for any institution.<br>
                                                            2.3 - Not flexible:<br>
                                                            In business we have to stay connected with customers. In this process it’s not flexible to contact with customers. As a business owner or marketer, you don’t want your sales teams wasting time cold calling from a list of unqualified leads.
                                                            Moreover, it cannot give us real time updates as we have to call individuals.<br>
                                                            3.Proposed Solution:<br>
                                                            we want to develop an unified communications server software that brings together IP PBX, email, IM, faxing and collaboration functionality. It has a Web interface and includes capabilities such as a beneficial commercial software with predictive dialling.<br>


                                                            3.1 State the solution with features:<br>

                                                            Now here are some features that we wanted to implement in our project.<br>

                                                            1. PBX network setup
                                                            2. Dialplan.
                                                            3. Inbound Calls.
                                                            4. Outbound Calls
                                                            5. Voicemail.
                                                            6. Call distribution
                                                            7. SIP
                                                            8. Soft-Phone.<br>


                                                            1.PBX network setup: (Private Branch Exchange) - A telephone exchange that serves a particular business or office, as opposed to one that a common carrier or telephone company operates for many businesses or for the general public. The PBX software is what gets installed on your server to act as the brains of your local phone network. It allows you to do everything you can
                                                            imagine with your phone system. We are using the Elastix PBX system with Free PBX as the user<br>
                                                            4.Voicemail:<br>
                                                            We can declare the mailbox in the default mailbox context – [default] or create others. Note that the mailbox contexts and those in extensions.conf have no relation in between. They are just some kind of separators in two different files.
                                                            The command looks like this: <br>
                                                            mailbox_number => password, name, email
                                                            mailbox_number is the number you use in extension.conf for VoiceMail() command and to register a user in sip.conf or iax.conf
                                                            password is the pass used to register a user in sip.conf or iax.conf
                                                            name is the name which to be associated with the mailbox
                                                            email is where a notification for the voicemail will come.<br>

                                                            6. Call distribution ACD (Automatic Call Distributor) - A device or system that distributes incoming calls to a specific group of terminals that agents use. It is often part of a computer telephony integration (CTI) system.<br>
                                                            7. SIP (Session Initiation Protocol) - A signalling protocol, widely used for controlling multimedia communication sessions such as voice and video calls over Internet Protocol (IP). SIP adoption amongst hardware and software vendors continues to expand.<br>
                                                            8. Soft-phone: in this case we can use different software like as a soft-phones.we can use 3CX or X-Lite software for simulation <br>
                                                            9. Conclusion: <br>
                                                            Finally we want to conclude that VoIP and Telephony based on IP, are finally bringing voice into users network, just like all the other applications that we have been using for years, such as email, databases, and instant messaging. PBX manufacturers have moved into IP communications and are now using protocols that can communicate and integrate with other existing applications.In addition to taking advantage of lower cost VoIP routing, purchasing your own IP-PBX lowers costs over time. When using hosted VoIP the initial costs are most likely lower, but monthly subscription costs are ongoing and higher over time when compared to an IP-PBX. An business owned IP-PBX will usually result in lower averaged monthly operating costs especially for systems with a higher number of users.


                                                        </p>
                                                        <div class="social">
                                                            <span>Share:</span>
                                                            <ul>
                                                                <li><a href="https://www.facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="https://www.twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="https://www.liknedin.com/#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="https://www.instagram.com/#"><i class="fa fa-instagram"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="inner">
                                                    <div class="image">
                                                        <img class="larger" src="images/project/dynamic1.png" alt="front2">
                                                        <img class="smaller" src="images/project/dynamic2.jpg" alt="inner2">
                                                        <a class="link" href="project3.html#"></a>
                                                    </div>
                                                    <div class="details">
                                                        <div class="date">
                                                            <p>December 15, 2020 <br>Made by Me</p>
                                                        </div>
                                                        <h3 class="title"><a href="project3.html#">Convert Static to Dynamic Website</a></h3>
                                                    </div>
                                                    <div class="full_des">
                                                        <p>
                                                            <h5>Using PHP Create a dashbord from where I can manage my hole website.</h5>
                                                            <br>
                                                            <br>
                                                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/1.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Login Panel</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/2.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Registration</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/3.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Dashbord</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/4.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Add About general</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/5.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Add About Image</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/6.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Add Services General</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/7.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Add Services Box</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/8.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Add Services Skills</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/9.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Add Portfolio general</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/10.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Add Portfolio Images</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/11.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Add Education</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card">
                                                                        <img src="images/dashbord/12.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Add Experience</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </p>
                                                        <div class="social">
                                                            <span>Share:</span>
                                                            <ul>
                                                                <li><a href="https://www.facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="https://www.twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="https://www.linkedin.com/#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="https://www.instagram.com/#"><i class="fa fa-instagram"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /NEWS -->

                        <!-- CONTACT -->

                        <div class="arlo_tm_section" id="contact">
                            <div class="arlo_tm_contact">
                                <div class="container">
                                    <div class="arlo_title_holder">
                                        <span>Get in Touch</span>
                                        <h3>Contact</h3>
                                    </div>
                                    <div class="contact_inner">
                                        <div class="short_list">
                                            <ul>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced-svg">
                                                        <g>
                                                            <g>
                                                                <path d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035    c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719    c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z"></path>
                                                            </g>
                                                        </g>

                                                    </svg>
                                                    <h3>Location</h3>
                                                    <p><?= $asoc_loc ?></p>
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="550.795px" height="550.795px" viewBox="0 0 550.795 550.795" style="enable-background:new 0 0 550.795 550.795;" xml:space="preserve" class="svg replaced-svg">
                                                        <g>
                                                            <g>
                                                                <path d="M501.613,491.782c12.381,0,23.109-4.088,32.229-12.16L377.793,323.567c-3.744,2.681-7.373,5.288-10.801,7.767    c-11.678,8.604-21.156,15.318-28.434,20.129c-7.277,4.822-16.959,9.737-29.045,14.755c-12.094,5.024-23.361,7.528-33.813,7.528    h-0.306h-0.306c-10.453,0-21.72-2.503-33.813-7.528c-12.093-5.018-21.775-9.933-29.045-14.755    c-7.277-4.811-16.75-11.524-28.434-20.129c-3.256-2.387-6.867-5.006-10.771-7.809L16.946,479.622    c9.119,8.072,19.854,12.16,32.234,12.16H501.613z"></path>
                                                                <path d="M31.047,225.299C19.37,217.514,9.015,208.598,0,198.555V435.98l137.541-137.541    C110.025,279.229,74.572,254.877,31.047,225.299z"></path>
                                                                <path d="M520.059,225.299c-41.865,28.336-77.447,52.73-106.75,73.195l137.486,137.492V198.555    C541.98,208.396,531.736,217.306,520.059,225.299z"></path>
                                                                <path d="M501.613,59.013H49.181c-15.784,0-27.919,5.33-36.42,15.979C4.253,85.646,0.006,98.97,0.006,114.949    c0,12.907,5.636,26.892,16.903,41.959c11.267,15.061,23.256,26.891,35.961,35.496c6.965,4.921,27.969,19.523,63.012,43.801    c18.917,13.109,35.368,24.535,49.505,34.395c12.05,8.396,22.442,15.667,31.022,21.701c0.985,0.691,2.534,1.799,4.59,3.269    c2.215,1.591,5.018,3.61,8.476,6.107c6.659,4.816,12.191,8.709,16.597,11.683c4.4,2.975,9.731,6.298,15.985,9.988    c6.249,3.685,12.143,6.456,17.675,8.299c5.533,1.842,10.655,2.766,15.367,2.766h0.306h0.306c4.711,0,9.834-0.924,15.368-2.766    c5.531-1.843,11.42-4.608,17.674-8.299c6.248-3.69,11.572-7.02,15.986-9.988c4.406-2.974,9.938-6.866,16.598-11.683    c3.451-2.497,6.254-4.517,8.469-6.102c2.057-1.476,3.605-2.577,4.596-3.274c6.684-4.651,17.1-11.892,31.104-21.616    c25.482-17.705,63.01-43.764,112.742-78.281c14.957-10.447,27.453-23.054,37.496-37.803c10.025-14.749,15.051-30.22,15.051-46.408    c0-13.525-4.873-25.098-14.598-34.737C526.461,63.829,514.932,59.013,501.613,59.013z"></path>
                                                            </g>
                                                        </g>

                                                    </svg>
                                                    <h3>Email</h3>
                                                    <p><?= $asoc_mail ?></p>
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="348.077px" height="348.077px" viewBox="0 0 348.077 348.077" style="enable-background:new 0 0 348.077 348.077;" xml:space="preserve" class="svg replaced-svg">
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path d="M340.273,275.083l-53.755-53.761c-10.707-10.664-28.438-10.34-39.518,0.744l-27.082,27.076     c-1.711-0.943-3.482-1.928-5.344-2.973c-17.102-9.476-40.509-22.464-65.14-47.113c-24.704-24.701-37.704-48.144-47.209-65.257     c-1.003-1.813-1.964-3.561-2.913-5.221l18.176-18.149l8.936-8.947c11.097-11.1,11.403-28.826,0.721-39.521L73.39,8.194     C62.708-2.486,44.969-2.162,33.872,8.938l-15.15,15.237l0.414,0.411c-5.08,6.482-9.325,13.958-12.484,22.02     C3.74,54.28,1.927,61.603,1.098,68.941C-6,127.785,20.89,181.564,93.866,254.541c100.875,100.868,182.167,93.248,185.674,92.876     c7.638-0.913,14.958-2.738,22.397-5.627c7.992-3.122,15.463-7.361,21.941-12.43l0.331,0.294l15.348-15.029     C350.631,303.527,350.95,285.795,340.273,275.083z"></path>
                                                                </g>
                                                            </g>
                                                        </g>

                                                    </svg>
                                                    <h3>Phone</h3>
                                                    <p>+88<?= $asoc_phone ?></p>
                                                </li>
                                            </ul>
                                        </div>


                                        <section id="contactt">

                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-6 ">
                                                        <!-- /CONTACT form start -->
                                                        <form action="contact.php" method="POST">

                                                            <div class="mb-3">

                                                                <input type="text" placeholder="Full Name" name="name" class="border border-secondary form-control" id="exampleInputEmail1" style="font-family: Roboto;" aria-describedby="emailHelp">
                                                                <?php
                                                                if (isset($_SESSION['name'])) {
                                                                ?>
                                                                    <small class="text-danger">
                                                                        <?php
                                                                        echo $_SESSION['name'];
                                                                        unset($_SESSION['name']);
                                                                        ?>
                                                                    </small>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <input type="email" placeholder="Enter Your Email" style="font-family: Roboto;" name="email" class="border border-secondary form-control" id="exampleInputPassword1">
                                                            <?php
                                                            if (isset($_SESSION['email'])) {
                                                            ?>
                                                                <small class="text-danger">
                                                                    <?php
                                                                    echo $_SESSION['email'];
                                                                    unset($_SESSION['email']);
                                                                    ?>
                                                                </small>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="mb-3 mt-3">
                                                            <textarea name="message" placeholder="Write Something" class="border border-secondary form-control" style="font-family: Roboto;" rows="4"></textarea>
                                                            <?php
                                                            if (isset($_SESSION['message'])) {
                                                            ?>
                                                                <small class="text-danger">
                                                                    <?php
                                                                    echo $_SESSION['message'];
                                                                    unset($_SESSION['message']);
                                                                    ?>
                                                                </small>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>

                                                        <button type="submit" class="btn btn-dark btn-outline-success">Send Message</button>
                                                        <?php
                                                        if (isset($_SESSION['status'])) {
                                                        ?>
                                                            <div class="alert alert-success mt-3">
                                                                <?php
                                                                echo $_SESSION['status'];
                                                                unset($_SESSION['status']);
                                                                ?>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        </form>
                                                    </div>


                                                    <!-- /CONTACT form end -->
                                                </div>
                                            </div>

                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /CONTACT -->

                        <!-- FOOTER -->
                        <div class="arlo_tm_footer">
                            <div class="container">
                                <div class="footer_inner">
                                    <div class="bottomm">
                                        <div class="sociall">
                                            <ul>
                                                <a href="https://www.facebook.com/nazrul.islam.safa#"><i class="fa fa-facebook"></i></a>
                                                <a href="https://www.linkedin.com/in/nazrul-islam-safa-7450a2102/#"><i class="fa fa-linkedin"></i></a>
                                                <a href="https://github.com/nazrul-safa#"><i class="fa fa-github"></i></a>
                                                <a href="https://wa.link/17mdfu#"><i class="fa fa-whatsapp"></i></a>
                                                <a href="https://www.instagram.com/nazrul.safa#"><i class="fa fa-instagram"></i></a>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="top">
                                        <a class="arlo_tm_totop" href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /FOOTER -->

                    </div>
                </div>
                <!-- /RIGHTPART -->
            </div>
        </div>
        <!-- / WRAPPER ALL -->

        <!-- SCRIPTS -->
        <script src="js/jquery.js"></script>
        <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
        <script src="js/plugins.js"></script>
        <script src="js/init.js"></script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5fe4b814df060f156a8fe7e3/1eqamu4cv';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        <!-- /SCRIPTS -->



        <div id="ascrail2000" class="nicescroll-rails" style="width: 0px; z-index: 100; cursor: default; position: fixed; height: 635px; display: none;">
            <div style="position: relative; top: 0px; float: right; width: 0px; height: 0px; background-color: rgb(66, 66, 66); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div>
        </div>
        <div id="ascrail2000-hr" class="nicescroll-rails" style="height: 0px; z-index: 100; position: fixed; cursor: default; display: none;">
            <div style="position: relative; top: 0px; height: 0px; width: 0px; background-color: rgb(66, 66, 66); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div>
        </div>
        <div id="ascrail2001" class="nicescroll-rails" style="width: 0px; z-index: 15; cursor: default; position: absolute; top: 180px; left: 300px; height: 383px; display: none; opacity: 0.612901;">
            <div style="position: relative; top: 0px; float: right; width: 0px; height: 0px; background-color: rgb(66, 66, 66); border: 0px solid rgb(238, 238, 238); background-clip: padding-box; border-radius: 5px;"></div>
        </div>
        <div id="ascrail2001-hr" class="nicescroll-rails" style="height: 0px; z-index: 15; top: 563px; left: 60px; position: absolute; cursor: default; display: none; opacity: 0.616723;">
            <div style="position: relative; top: 0px; height: 0px; width: 0px; background-color: rgb(66, 66, 66); border: 0px solid rgb(238, 238, 238); background-clip: padding-box; border-radius: 5px; left: 0px;"></div>
        </div>

        <!--BootStrap End Point -->

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!--BootStrap End Point -->



</body>

</html>