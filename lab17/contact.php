<?php include "inc/html-top.php";?>
	
	<body>
		<header>
			<h1>hololive</h1>
			<div class="subtitle">A virtual-YouTuber talent agency.</div>
		</header>
		
		<?php include "inc/nav.php";?>
		
		<div class="container">
            <form method="post" action='form-processor.php'>
                <!-- Notice an input tag can power a variety of functions-->
                
                <!--
                    Id: Used for error checking
                    Name: Variable used for input data
                -->
                <h2>Fill out the form, and figure out which VTuber is right for you!<h2>
                <h2 class="contact">Contact</h2>
                <label for="name">Your Name: </label> <input type="text" name="user_name" id="name">
                <br>
                <!-- Note that the password type does not cryptograhpically secure
                    the text. All it does is masks the text with '*'.-->
                <label for="mail">Your E-mail: </label> <input type="text" name="user_mail" id="mail">
                <br>
                <label for="phone">Your Phone #: </label> <input type="text" name="user_phone" id="phone">
                <br>
                <br>

                <fieldset>
                    <legend>Preferences</legend>
                    <h2 class="contact">Favorite hair color?</h2>
                    <label for="blonde_hair">Blonde</label> <input type="radio" name="hair_select"  id="blonde_hair">
                    <br>
                    <label for="blue_hair">Blue</label> <input type="radio" name="hair_select"  id="blue_hair">
                    <br>
                    <label for="brown_hair">Brown</label> <input type="radio" name="hair_select"  id="brown_hair">
                    <br>
                    <label for="other_hair">Other</label> <input type="radio" name="hair_select"  id="other_hair">

                    <h2 class="contact">Preferred languages?</h2>
                    <label for="en_check">English</label> <input type="checkbox" name="checkbox1" checked id="en_check">
                    <br>
                    <label for="id_check">Indonesian</label> <input type="checkbox" name="checkbox2"  id="id_check">
                    <br>
                    <label for="jp_check">Japanese</label> <input type="checkbox" name="checkbox3"  id="jp_check">
                    <br>
                    <br>

                    <!--
                        Notice that the radio buttons have the same name.
                        The technicallity behind it, is that a different input
                        is replacing the variable (name) 
                    -->
                    <h2 class="contact">What VTuber agency do you prefer (if you know of them)?</h2>
                    <label for="hololive">Hololive</label> <input type="radio" name="agency_select" id="hololive">
                    <br>
                    <label for="nijisanji">Nijisanji</label> <input type="radio" name="agency_select" id="nijisanji">
                    <br>
                    <label for="vshoujo">VShoujo</label> <input type="radio" name="agency_select" id="vshoujo">
                    <br>
                    <label for="other_agency">Other: Indie VTuber, agency not listed, etc.</label> <input type="radio" name="agency_select" id="other_agency">
                    <br>
                    <br>
                </fieldset>

                <!-- Labels are used *for* id's. -->
                <h2 class="contact">What do you think a VTuber is?</h2>
                <textarea name="questionnaire" id="questionnaire"></textarea>
                <br>
                <br>

                Submit the form: <input type="submit" value="Submit!">
                <p><em>I will contact you about a variety of VTubers based on your preferences!</em></p>
            
            </form>
		</div> <!-- Container -->

		
        <?php include "inc/scripts.php";?>
	</body>
</html>