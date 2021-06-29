<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet/main_footer_contact.css">
        <link rel="stylesheet" href="stylesheet/main_section_about.css">
        <link rel="stylesheet" href="stylesheet/contact_formulary.css">
        <link href="https://fonts.googleapis.com/css2?family=Arapey:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
        <title>Travel Land - About Us</title>
    </head>
    <body>

    <?php
        if (Isset($_GET["cod"]) == true) {
            echo '<style>';
            echo '  .message_warning {top: 400px;}';
            echo '  .contact_formulary {height: 27vh;}';
            echo '  ';
            echo '</style>';
        }
    ?>

    <section class="main_section">
            <header class="main_header">
                <nav class="navigation_buttons" style="font-family: 'Dosis', sans-serif;">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="plans.php">Cruise Plans</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About Us</a></li>
                    </ul>
                </nav>
            </header>
            <div class="logo_phrase">
                <p style="font-family: 'Arapey', serif; font-size: 21px;">Time is precious and travelling is necessary</p>
            </div>
        </section>

        <section class="contact_formulary">
            <form action="index.php">
                <span style="font-family: 'Dosis', sans-serif;">Name:</span><br/>
                <input type="text" name="txtName" placeholder="Write your name.." style="font-family: 'Dosis', sans-serif;"><br/>
                <span style="font-family: 'Dosis', sans-serif;">E-mail:</span></br>
                <input type="text" name="txtMail" placeholder="Write your e-mail.."><br/>
                <span style="font-family: 'Dosis', sans-serif;">Number Phone:</span><br/>
                <input type="number" name="txtNumber" placeholder="Write your number phone.."><br/>
                <span style="font-family: 'Dosis', sans-serif;">Aditional Message:</span><br/>
                <textarea name="txtMessageAditional" rows="5" cols="50" placeholder="Write your aditional message.."></textarea><br/>
                <?php
                    if (Isset($_GET["cod"])) {
                        if ($_GET["cod"] == 1) {
                            echo "<span id='basicPlan'>Selected Plan: Basic Plan</span><br/>";
                        } else if ($_GET["cod"] == 2) {
                            echo "<span id='mediumPlan'>Selected Plan: Medium Plan</span><br/>";
                        } else if ($_GET["cod"] == 3) {
                            echo "<span id='premiumPlan'>Selected Plan: Premium Plan</span><br/>";
                        }
                    }
                ?>
                <input type="submit" id="buttonSend" value="Send">
            </form>
        </section>

        <div class="message_warning">
            <p style="font-family: 'Dosis', sans-serif;">Once sent, your message will be taken to our best attendants, and you will be contacted shortly to discuss the service contract, 
                always respecting your rights and your information.</p>
        </div>

        <section class="section_footer">
            <footer class="main_footer">
                <p style="font-family: 'Dosis', sans-serif;">All your rights reserved (2021)</p>
            </footer>
        </section>

    </body>
</html>
