<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "cxl8351@g.rit.edu"; // use YOUR email for both lines 12 and 13
$emailTo = "cxl8351@g.rit.edu";
$subject = "Lab 17 - HTML Forms, Part 2";

// the following lines of code will grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY; then create a variable on the left side that
//   makes sense for the data it will hold

// these are from the text INPUT fields...
$name_var = Trim(stripslashes($_POST['user_name'])); 
$mail_var = Trim(stripslashes($_POST['user_mail'])); 
$phone_var = Trim(stripslashes($_POST['user_phone'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
$en_var = $_POST['checkbox1']; 
$id_var = $_POST['checkbox2']; 
$jp_var = $_POST['checkbox3'];
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$agency_var = $_POST['agency_select']; 
// notice: no matter how many radio buttons, there's only one answer

$hair_var = $_POST['hair_select']; 
// notice: no matter how many radio buttons, there's only one answer

// this is from the TEXTAREA field...
$var_questionnaire = Trim(stripslashes($_POST['questionnaire'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "Your name: \n"; //...a label
$body .= $name_var;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Your e-mail: \n"; //...a label
$body .= $mail_var;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Your phone #: \n"; //...a label
$body .= $phone_var;	  //...a variable
$body .= "\n\n";			  //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
$body .= "Preferred language(s): \n"; 	 	// a heading for your checkbox section

if (isset($en_var)) {		// a checkbox variable
	$body .= $en_var . "\n";	// the same checkbox variable
}
if (isset($id_var)) {		// a checkbox variable
	$body .= $id_var . "\n";	// the same checkbox variable
}
if (isset($jp_var)) {		// a checkbox variable
	$body .= $jp_var . "\n";	// the same checkbox variable
}
$body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
$body .= "Preferred agency: \n";		// a heading for your radio button section
$body .= $agency_var;			// the (one) radio button variable
$body .= "\n\n";

$body .= "Preferred hair color: \n";		// a heading for your radio button section
$body .= $hair_var;			// the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "Response to Vtuber: \n";		// a heading for your text area
$body .= $var_questionnaire;			// the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML 
	 webpage with a customized message 
	 for the user
	 ********************************** -->


<?php include "inc/html-top.php";?>
	
	<body>
		<header>
			<h1>hololive</h1>
			<div class="subtitle">A virtual-YouTuber talent agency.</div>
		</header>
		
		<?php include "inc/nav.php";?>
	
		<div class="container">
            <main class="full-width">
                <h2>Thank You <?php echo $name_var;?></h2>
                <p>Go back to<a href="index.php">the home page</a>.</p>
            </main>
		</div> <!-- Container -->

        <?php include "inc/scripts.php";?>
	</body>
</html>