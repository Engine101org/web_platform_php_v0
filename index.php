<?php

require ("vendor/autoload.php");
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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Engine101</title>

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
                        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link blue" href="about-us.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
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
                                <a class="more_btn" href="#signin">Sign In</a>
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
                                <a class="more_btn" href="#">Sign Up</a>
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
                                <a class="more_btn" href="#">Learn More</a>
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
                    <h6>Discover the features</h6>
                    <h2>We are young but bold</h2>
                </div>
                <div class="row feature_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-1.png" alt="">
                            </div>
                            <h4>Brand Identity</h4>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>
                            <a class="more_btn" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-2.png" alt="">
                            </div>
                            <h4>Online Marketing</h4>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>
                            <a class="more_btn" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-3.png" alt="">
                            </div>
                            <h4>Social Media</h4>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>
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
                        <h4>“They are the best”</h4>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <img src="img/team/people/people-5.jpg" alt="">
                            <div class="media-body">
                                <h5>Chriss Turner</h5>
                                <h6>CEO Enterprise</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <h4>“They are the best”</h4>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <img src="img/team/people/people-5.jpg" alt="">
                            <div class="media-body">
                                <h5>Chriss Turner</h5>
                                <h6>CEO Enterprise</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <h4>“They are the best”</h4>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <img src="img/team/people/people-5.jpg" alt="">
                            <div class="media-body">
                                <h5>Chriss Turner</h5>
                                <h6>CEO Enterprise</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_text">
                <div class="right_text_inner">
                    <div class="text_3d">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <h6>Discover the features</h6>
                            <h2>We don’t hide, we stand tall in front of chalenge</h2>
                        </div>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. </p>
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
                                <h6>Discover the features</h6>
                                <h2>We build a strong team of great people</h2>
                            </div>
                            <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra.</p>
                            <ul>
                                <li><a href="#">Nunc nec maximus dui, </a></li>
                                <li><a href="#">Aenean pellentesque elit vitae</a></li>
                                <li><a href="#">Aenean pellentesque elit vitae</a></li>
                                <li><a href="#">Ex mauris, ornare eget pretium </a></li>
                                <li><a href="#">Cras ex mauris, ornare eget preti</a></li>
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

        <!--================Sign In Area =================-->
        <section class="sign_in_area">
            <div id="signin" class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
                        <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                            </div>
                        </form>
                        <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Facebook" class="btn submit_btn">
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Say hello</h6>
                                <h2>Get in touch, send us an e-mail or call us</h2>
                            </div>
                            <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p>
                            <a href="#"><h5>Call us now</h5></a>
                            <a href="#"><h4>+452373 95593 232</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->

        <!--================Map Area =================-->
        <section class="world_map_area p_100">
            <div class="container">
                <div class="world_map_inner">
                    <img class="img-fluid" src="img/world-map.png" alt="">
                    <div class="bd-callout">
                        <h3>Gibraltar Office</h3>
                        <p>Casemates Square, no253 <br /> United kingdom</p>
                        <h4><a href="#">+453678 9283 559</a> <a href="#">contact@template.com</a></h4>
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
                            <aside class="f_widget f_about_widget">
                                <img src="img/footer-logo.png" alt="">
                                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                <div class="f_title">
                                    <h3>Sign Up</h3>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>
                                </br>
                                <form action="signup.php">
                                    <button type="submit" name="btnSignUp" value="submit" class="btn submit_btn form-control">Sign Up using Email</button>
                                </form>
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
                    <li><a href="https://github.com/Engine-101"><i class="fa fa-github"></i></a></li>
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
