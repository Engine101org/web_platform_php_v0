<?php

include './config/conn.php';

// Start Session
session_start();
if(!empty($_SESSION['name'])) { 
    if(isset($_SESSION['email'])) {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $status = $_SESSION['status'];
        if($email != "" && $status == "logged in")
        {
            header("Location: index.php");
            exit();
        }
    }
}


$register_error_message = "";

// check Register request
if (!empty($_POST['btnSignUp'])) {
    if ($_POST['name'] == "") {
        $register_error_message = 'Name field is required!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else if ($_POST['email'] == "") {
        $register_error_message = 'Email field is required!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else if ($_POST['phone'] == "") {
        $register_error_message = 'Phone Number field is required!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else if ($_POST['occupation'] == "") {
        $register_error_message = 'Occupation field is required!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else if ($_POST['city'] == "") {
        $register_error_message = 'City field is required!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else if ($_POST['country'] == "Country") {
        $register_error_message = 'Country field is required!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';;
    } else if ($_POST['password'] == "") {
        $register_error_message = 'Password field is required!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else if ($_POST['repeat_password'] == "") {
        $register_error_message = 'Repeat Password field is required!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else if ($_POST['repeat_password'] != $_POST['password']) {
        $register_error_message = 'Passwords don\'t match!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else if (strlen($_POST['repeat_password']) < 6) {
        $register_error_message = 'Password must be at least 6 characters!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else if (!preg_match('/[^a-zA-Z]+/',($_POST['repeat_password']))) {
        $register_error_message = 'Passwords must have at least one special character!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else if ($_POST['gender'] == "gender") {
        $register_error_message = 'Gender field is required!';
        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h2>Sorry!</h2>
                                <p> '. $register_error_message .' </p>
                            </div>
                        </div>
                    </div>
                </div>';
    } else {
        try {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $occupation = $_POST['occupation'];
            $city = $_POST['city'];
            $country = $_POST['country'];
        	$password = $_POST['password'];
            $enc_password = hash('sha256', $password);
            $confirm_code=md5(uniqid(rand()));

            echo $name . "\n";
            echo $email . "\n";
            echo $gender . "\n";
            echo $phone . "\n";
            echo $occupation . "\n";
            echo $city . "\n";
            echo $country . "\n";
            echo $password  . "\n";
            echo $confirm_code  . "\n";
            
            /*$sql2 = "CREATE TABLE IF NOT EXISTS users ("
            . "id int NOT NULL AUTO_INCREMENT,"
            . "name varchar(100),"
            . "gender varchar(50)"
            . "email varchar(100),"
            . "phone_number varchar(100)"
            . "occupation varchar(100)"
            . "city varchar(150),"
            . "country varchar(150),"
            . "profile_pic varchar(100)"
            . "profile_pic_url varchar(100)"
            . "password varchar(1000),"
            . "status varchar(50),"
            . "confirmation_code varchar(1000),"
            . "PRIMARY KEY (id));";*/

            $target_dir = "http://engine101.org/images/user_images/";
            $image_name = "profile.png";
            $image_type = "profile";
            $target_file = $target_dir . $image_name;

            $profile_pic = $image_name;
            $profile_pic_url = $target_file;

            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO users(name, email, gender, phone, occupation, city, country, profile_pic, profile_pic_url, password, confirmation_code) 
            VALUES(:name, :email, :gender, :phone, :occupation, :city, :country, :profile_pic, :profile_pic_url, :password, :confirmation_code)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':occupation', $occupation);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':country', $country);
            $stmt->bindParam(':profile_pic', $profile_pic);
            $stmt->bindParam(':profile_pic_url', $profile_pic_url);
            $stmt->bindParam(':password', $enc_password);
            $stmt->bindParam(':confirmation_code', $confirm_code);
            
            /*
            $stmt_uploadprofilepic = $conn->prepare("INSERT INTO images(image_name, image_type, image_creator, image_creator_email, image_url) 
            VALUES(:image_name, :image_type, :image_creator, :image_creator_email, :image_url)");
            $stmt_uploadprofilepic->bindParam(':image_name', $image_name);
            $stmt_uploadprofilepic->bindParam(':image_type', $image_type);
            $stmt_uploadprofilepic->bindParam(':image_creator', $name);
            $stmt_uploadprofilepic->bindParam(':image_creator_email', $email);
            $stmt_uploadprofilepic->bindParam(':image_url', $target_file);
            */
            
            $stmt0 = $conn->prepare("SELECT id FROM users WHERE name=:name");
            $stmt0->bindParam(':name', $name);
            $stmt0->execute();

            $stmt1 = $conn->prepare("SELECT id FROM users WHERE email=:email");
            $stmt1->bindParam(':email', $email);
            $stmt1->execute();
            if (($stmt0->rowCount() > 0) || ($stmt1->rowCount() > 0)) {
                if ($stmt0->rowCount() > 0) {
                    $register_error_message = "Email Is Already In Use!";
                    echo    '<div id="error" class="modal modal-message fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                            <h2>Sorry!</h2>
                                            <p> '. $register_error_message .' </p>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                }else{
                    $register_error_message = "Username Is Already In Use! <br>";
                    echo    '<div id="error" class="modal modal-message fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                            <h2>Sorry!</h2>
                                            <p> '. $register_error_message .' </p>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                }
            } else{
                // ---------------- SEND MAIL FORM ----------------
                    
                    // send e-mail to ...
                    $to=$email;
                    // Your subject
                    $subject="Your Engine101 signup confirmation link here";
                    // From
                    $header="from: engine101.org";
                    // Your message
                    $message="Your Confirmation link \r\n";
                    $message.="Click on this link to activate your account \r\n";
                    $message.="http://engine101.org/includes/confirmation.php?passkey=$confirm_code";
    
                    // send email
                    $sentmail = mail($to,$subject,$message,$header);
                    // if your email succesfully sent
                    if($sentmail){
                        $stmt->execute();
                        //$stmt_uploadprofilepic->execute();
                        $register_error_message = "Your Confirmation link Has Been Sent To Your Email Address.";
                        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                                <h2>Sorry!</h2>
                                                <p> '. $register_error_message .' </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                    } else {
                        $register_error_message = "Cannot send Confirmation link to your e-mail address";
                        echo    '<div id="error" class="modal modal-message fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                                <h2>Sorry!</h2>
                                                <p> '. $register_error_message .' </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                    }
                
            }
		} catch (PDOException $e) {
			echo "error: " . $sql . "<br>" . $e->getMessage();
		}
        $conn = null;
    }
}

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
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">


        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

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
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
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
                        <li class="nav-item active"><a class="nav-link" href="contact.html">Sign Up</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h4>Sign Up</h4>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area p_100">
            <div class="container">
                <?php
                    echo '<font color="red">' . $register_error_message . '</font>';
                ?>   
                <div class="row get_touch_inner">
                        <div class="col-lg-6">
                            <form class="sign_up_form row" action="signup.php" method="post" id="signupForm" >
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="password" name="repeat_password" class="form-control" placeholder="Repeat Password" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <select class="form-control" name="country" id="country" required>
                                        <option value="Country">Country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia, Plurinational State of</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, the Democratic Republic of the</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.S.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <select name="gender" class="form-control" id="gender" required>
                                        <option value="gender">Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="undefined">Undefined</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <button type="submit" name="btnSignUp" value="submit" class="btn submit_btn form-control">Sign Up</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="touch_details">
                                <div class="l_title">
                                    <!-- <img src="img/icon/title-icon.png" alt=""> -->
                                    <h6>Create an account</h6>
                                    <h2>Get involved and help grow S.T.E.M. education in your area.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--================End Get in Touch Area =================-->

        <!--================Footer Area =================-->
        <footer class="footr_area">
            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>   
                                document.write(new Date().getFullYear());
                            </script>
                            <a href="http://engine101.org" target="_blank">Engine101</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </h5>
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
        </footer>
        <!--================End Footer Area =================-->


        <!--================Contact Success and Error message Area =================
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        Modals error 

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        ================End Contact Success and Error message Area =================-->



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
        <script src="vendors/circle-bar/circle-progress.min.js"></script>
        <script src="vendors/circle-bar/plugins.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>

        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>

        <script src="js/circle-active.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
