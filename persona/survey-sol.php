<?php

/* Input field variables */
$name_var = Trim(stripslashes($_POST['user_name'])); 
$mail_var = Trim(stripslashes($_POST['user_mail'])); 
$phone_var = Trim(stripslashes($_POST['user_phone'])); 

$emailFrom = "cxl8351@g.rit.edu";
$emailTo = Trim(stripslashes($_POST['user_mail'])); 
$subject = "ISTE.140 Final Part 2 - Chris L.";

/* Radio Button variables */
$color_var = $_POST['color_select']; 
$console_var = $_POST['console_select']; 
$party_var = $_POST['party_select']; 

/* Begin writing e-mail content */
$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "Your name: \n";
$body .= $name_var;
$body .= "\n\n";

$body .= "Your e-mail: \n";
$body .= $mail_var;
$body .= "\n\n";

$body .= "Your phone #: \n";
$body .= $phone_var;
$body .= "\n\n";


// Radio Button Variables
$body .= "Preferred color: \n";
$body .= $color_var;
$body .= "\n\n";

$body .= "Preferred console: \n";
$body .= $console_var;
$body .= "\n\n";

$body .= "Preferred party item: \n";
$body .= $party_var;
$body .= "\n\n";

mail($emailTo, $subject, $body, "From: <$emailFrom>");
mail("cxl8351@g.rit.edu", $subject, $body, "From: <$emailFrom>");

?>

<?php include "inc/html-head.php";?>

    <body id="survey-sol_bg">

        <div class="layout_container">

            <h1>Thank you for your submission, <?php echo $name_var;?>!</h1>
            <p>A copy of your responses will be sent to your e-mail.</p>
            <p>Go back to <a href="index.php">the home page</a>.</p>

        </div>

    </body>
</html>