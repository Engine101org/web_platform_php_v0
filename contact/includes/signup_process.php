<?php

include '../config/conn.php';

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
        $register_error_message = 'gender field is required!';
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
            
            $stmt_uploadprofilepic = $conn->prepare("INSERT INTO images(image_name, image_type, image_creator, image_creator_email, image_url) 
            VALUES(:image_name, :image_type, :image_creator, :image_creator_email, :image_url)");
            $stmt_uploadprofilepic->bindParam(':image_name', $image_name);
            $stmt_uploadprofilepic->bindParam(':image_type', $image_type);
            $stmt_uploadprofilepic->bindParam(':image_creator', $name);
            $stmt_uploadprofilepic->bindParam(':image_creator_email', $email);
            $stmt_uploadprofilepic->bindParam(':image_url', $target_file);
            
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
                        $stmt_uploadprofilepic->execute();
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

/*

$to = "kmuvezwa@gmail.com";
$from = $_REQUEST['email'];
$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$number = $_REQUEST['number'];
$cmessage = $_REQUEST['message'];

$headers = "From: $from";
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = "You have a message from your Engine101.";

$logo = '#';
$link = '#';

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
$body .= "<table style='width: 100%;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
$body .= "</td></tr></thead><tbody><tr>";
$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
$body .= "</tr>";
$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
$body .= "<tr><td></td></tr>";
$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
$body .= "</tbody></table>";
$body .= "</body></html>";

$send = mail($to, $subject, $body, $headers);

*/

?>