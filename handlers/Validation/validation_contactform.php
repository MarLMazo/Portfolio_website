
<?php
include_once '../../models/Database/Database.php';
include_once  '../../models/Message.php';


//Check if it comes from submit-contact button in the contact form
if (isset($_POST['submit-contact'])) {
    define('SENDER_EMAIL',   "main_email@email.com");
    //Initialize variables
    $db = Database::getDb();
    $mes = new Message();

    //Filter all the input values from user input
    $user_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

    //Checking inputs if its empty, it will drop to the array of variable
    if (empty($user_name)) {
        $empty[] = "<strong>Name</strong>";
    }
    if (empty($user_email)) {
        $empty[] = "<strong>Email</strong>";
    }
    if (empty($user_message)) {
        $empty[] = "<strong>Message</strong>";
    }
    //Check if the array is empty or not, then the text error will be input in the json file to grab by the contact page
    if (!empty($empty)) {
        $output = json_encode(array('type' => 'error', 'text' => implode(", ", $empty) . ' is Required!'));
        //Die print the json file $output then exit to the current php file
        die($output);
    }

    //This logic will just filter and check of valid email address
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) { //email validation
        $output = json_encode(array('type' => 'error', 'text' => '<strong>' . $user_email . '</strong> is an invalid Email, please correct it.'));
        die($output);
    }

    //reCAPTCHA validation not yet implemented
    //Initialized all the values that has been checked for sending to email
    $toEmail = "website@email.com";
    $mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
    $mailBody = "User Name: " . $user_name . "\n";
    $mailBody .= "User Email: " . $user_email . "\n";
    $mailBody .= "Content: " . $user_message . "\n";

    //Send the email and add to the database
    if (mail($toEmail, "Contact Mail", $mailBody, $mailHeaders) && $mes->create_message($db,$user_name,$user_email,$user_message)) {
        //send the json data to fetch by the contact page
        $output = json_encode(array('type' => 'message', 'text' => 'Hi ' . $user_name . ', thank you for the message. I will be back to you shortly.'));
        //Die print the json file $output then exit to the current php file
        die($output);
    } else {
        $output = json_encode(array('type' => 'error', 'text' => 'Unable to send email, please contact' . SENDER_EMAIL));
        //Die print the json file $output then exit to the current php file
        die($output);
    }

}
