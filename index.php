<?php

require "vendor/autoload.php";
require_once "config.php";

$redirectURL = "fb-callback.php";
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

// check Register request
/*
if (!empty($_POST['btnFbSignUp'])) {
session_start();
if(isset($_GET['state'])) {
$_SESSION['FBRLH_state'] = $_GET['state'];
}
//Step 1: Enter Credentials
$fb = new \Facebook\Facebook([
'app_id' => '1881471198759145',
'app_secret' => 'b99f9d165e0899d99c4428ea1c3d3f60',
'default_graph_version' => 'v2.10',
//'default_access_token' => '{access-token}', // optional
]);
//Step 2 Create the url
if(empty($access_token)) {
echo "<a href='{$fb->getRedirectLoginHelper()->getLoginUrl("http://localhost/login/facebook_login.php")}'>Login with Facebook </a>";
}
//Step 3 : Get Access Token
$access_token = $fb->getRedirectLoginHelper()->getAccessToken();
//Step 4: Get the graph user
if(isset($access_token)) {
try {
$response = $fb->get('/me',$access_token);
$fb_user = $response->getGraphUser();
echo  $fb_user->getName();
//  var_dump($fb_user);
} catch (\Facebook\Exceptions\FacebookResponseException $e) {
echo  'Graph returned an error: ' . $e->getMessage();
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
// When validation fails or other local issues
echo 'Facebook SDK returned an error: ' . $e->getMessage();
}
}
}
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125917106-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-125917106-1');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Engine101 - Home</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link blue" href="about/">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery/">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog/">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact/">contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->


        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text"
                                data-x="['left','left','left','left','15','center']"
                                data-hoffset="['0','80','80','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['400','400','400','250','180','180']"
                                data-fontsize="['72','72','72','50','50','30']"
                                data-lineheight="['82','82','82','62','62','42']"
                                data-width="['none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">
                            </div>

                            <div class="tp-caption tp-resizeme"
                                data-x="['left','left','left','left','15','center']" data-hoffset="['0','80','80','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['670','670','670','480','370','350']"
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="more_btn" href="coming/">Sign In</a>
                            </div>

                        </div>
                    </li>

                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text"
                                data-x="['left','left','left','left','15','center']"
                                data-hoffset="['0','80','80','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['400','400','400','250','180','180']"
                                data-fontsize="['72','72','72','50','50','30']"
                                data-lineheight="['82','82','82','62','62','42']"
                                data-width="['none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">
                            </div>

                            <div class="tp-caption tp-resizeme"
                                data-x="['left','left','left','left','15','center']" data-hoffset="['0','80','80','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['670','670','670','480','370','350']"
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="more_btn" href="coming/">Sign Up</a>
                            </div>
                        </div>
                    </li>

                    <li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text"
                                data-x="['left','left','left','left','15','center']"
                                data-hoffset="['0','80','80','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['400','400','400','250','180','180']"
                                data-fontsize="['72','72','72','50','50','30']"
                                data-lineheight="['82','82','82','62','62','42']"
                                data-width="['none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">
                            </div>

                            <div class="tp-caption tp-resizeme"
                                data-x="['left','left','left','left','15','center']" data-hoffset="['0','80','80','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['670','670','670','480','370','350']"
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="more_btn" href="about/">Learn More</a>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->

        <!--================Feature Area =================-->
        <section class="feature_area">
            <div class="container">
                <div class="c_title">
                    <img src="img/icon/title-icon.png" alt="">
                    <h6>Engine101</h6>
                    <h2>A S.T.E.M. after school program, to get kids in the developing world excited and engaging with Stem early.</h2>
                </div>
                <div class="row feature_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-1.png" alt="">
                            </div>
                            <h4>The Big Idea</h4>
                            <p>
                                90% of parents want their children to learn computer science but only 40% of schools globally teach computer programming (This figure plummets when considering the African continent) </br>
                                We want to introduce young school going Zimbabweans and Sub-Saharan Africans to skills required to enter some of the most on demanding STEM professions right now.
                                Encourage young girls to start thinking of a Stem careers at an early age and help reduce the gender gap in STEM careers in Africa. </br>
                            </p>
                            <a class="more_btn" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-2.png" alt="">
                            </div>
                            <h4>How We Get This Done</h4>
                            <p>
                                Engine 101 is an afterschool program designed for students ages 10 - 18. </br>
                                It seeks to introduce young school going Zimbabweans to skills required to enter some of the most on demand STEM professions right now. </br>
                                The skills training will encompass a broad range of focus areas including </br>
                                - Programming </br>
                                - Game Design </br>
                                - Introduction to Electronics and Robotics </br>
                                - Mentoring </br>
                                ***At NO COST to students &amp; their parents!</br>
                            </p>
                            <a class="more_btn" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-3.png" alt="">
                            </div>
                            <h4>What We Are Working On</h4>
                            <p> 
                                We want to introduce the kids to: </br> 
                            </p>
                                <div style="text-align:center">
                                    <p>
                                        Scratch</br>
                                        Raspberry PI </br>
                                        Arduino </br>
                                        Robotics (Lego Mindstorms &amp; Sphero) </br>
                                        Web Development </br>
                                    </p>
                                </div>
                            <p>   
                                And plan to expand the list of activities as time goes on.
                            </p>
                            <a class="more_btn" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->

        <!--================The best slider Area =================-->
        <section class="best_3d_area">
            <div class="left_3d">
                <div class="shap_slider_inner owl-carousel">
                    <div class="item">
                        <!--

                            <h4>“They are the best”</h4>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                            <div class="media">
                                    <img src="img/team/people/people-5.jpg" alt="">
                                    <div class="media-body">
                                        <h5>Chriss Turner</h5>
                                        <h6>CEO Enterprise</h6>
                                    </div>
                            </div>

                        -->
                    </div>
                    <div class="item">
                        <!--
                        <h4>“They are the best”</h4>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <img src="img/team/people/people-5.jpg" alt="">
                            <div class="media-body">
                                <h5>Chriss Turner</h5>
                                <h6>CEO Enterprise</h6>
                            </div>
                        </div>
                        -->
                    </div>
                    <div class="item">
                        <!--
                        <h4>“They are the best”</h4>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <img src="img/team/people/people-5.jpg" alt="">
                            <div class="media-body">
                                <h5>Chriss Turner</h5>
                                <h6>CEO Enterprise</h6>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <div class="right_text">
                <div class="right_text_inner">
                    <div class="text_3d">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <h2>
                                We believe that
                            </h2>
                        </div>
                        <p>
                            Talent is distributed equally across the gender, geographical and racial lines. </br>
                            Sustainability and longevity is key, if its worth doing then do it well and for as long as you can. </br>
                            Learning and teaching is fun and we wouldn't have it any other way!</br>
                        </p>
                    </div>
                    <div class="shap_mobile">
                        <img src="img/iphone4.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--================End The best slider Area =================-->

        <!--================Team People Area =================-->
        <section class="team_people_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team_people_text">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h2>Are you a developer? Volunteer some of your time to help teach kids how to code.</h2>
                            </div>
                            <p>Sign up to help a school close to you</p>
                            <ul>
                                <li><a href="#">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team_img_inner">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Team People Area =================-->

        <!--================Map Area =================-->
        <section class="world_map_area p_100">
            <div class="container">
                <div class="world_map_inner">
                    <img class="img-fluid" src="img/world-map.png" alt="">
                    <div class="bd-callout">
                        <h3>Harare</h3>
                        <p>8 Sherwood Ave Marlborough Harare <br/> Zimbabwe</p>
                        <h4><a href="#">+27659313054</a> <a href="mailto:kmuvezwa@gmail.com">kmuvezwa@gmail.com</a></h4>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Map Area =================-->

        <!--================Footer Area =================-->
        <footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-4 col-sm-6">
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
            <div class="container">
            <div class="float-sm-left">
                <h5><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                <a href="http://engine101.org" target="_blank">Engine101</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h5>
            </div>
            <div class="float-sm-right">
                <ul>
                    <li><a href="https://www.facebook.com/engine101.org/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/engine101_/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/engine101_"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://github.com/Engine101org"><i class="fa fa-github"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>

        <script src="js/theme.js"></script>

    </body>
</html>
