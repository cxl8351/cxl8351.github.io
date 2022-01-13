<?php include "inc/html-head.php"; ?>

    <body id="survey_bg">

    <?php include "inc/nav.php"; ?>

        <div class="layout_container">


            <form method="post" action='survey-sol.php'>

                <h2>Survey</h2>

                <div id="field_container">
                    <h3>Contact</h3>
                    <label for="name">Your Name: </label> <input type="text" name="user_name" id="name">
                    <label for="mail">Your E-mail: </label> <input type="text" name="user_mail" id="mail">
                    <label for="phone">Your Phone #: </label> <input type="text" name="user_phone" id="phone">
                </div>
                <fieldset>
                    <legend>Preferences</legend>
                    <h3>Preferred color?</h3>
                    <label for="color_red">Red</label> <input type="radio" name="color_select"  id="color_red">
                    <br>
                    <label for="color_yellow">Yellow</label> <input type="radio" name="color_select"  id="color_yellow">
                    <br>
                    <label for="color_blue">Blue</label> <input type="radio" name="color_select"  id="color_blue">
                    <br>

                    <h3>Preferred Console System?</h3>
                    <label for="ps_select">PS4/PS5</label> <input type="radio" name="console_select" id="ps_select">
                    <br>
                    <label for="x_select">XBox</label> <input type="radio" name="console_select" id="x_select">
                    <br>
                    <label for="switch_select">Nintendo Switch</label> <input type="radio" name="console_select" id="switch_select">
                    <br>
                    <br>

                    <h3>What would you bring to a party in Las Vegas?</h3>
                    <label for="mask_select">A masquerade-style mask.</label> <input type="radio" name="party_select" id="mask_select">
                    <br>
                    <label for="card_select">Tarot cards</label> <input type="radio" name="party_select" id="card_select">
                    <br>
                    <label for="gun_select">A fake handgun</label> <input type="radio" name="party_select" id="gun_select">
                    <br>
                    <br>
                </fieldset>
                <br>
                Submit the form: <input type="submit" value="Submit!">
            </form>


        </div>
        <?php include "inc/scripts.php"; ?>
    </body>
</html>