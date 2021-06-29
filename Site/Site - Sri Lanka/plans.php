<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet/plans/main_header.css">
        <link rel="stylesheet" href="stylesheet/plans/main_footer.css">
        <link rel="stylesheet" href="stylesheet/plans/cards.css">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Arapey:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <section class="main_section">
            <header class="main_header">
                <nav class="navigation_buttons">
                    <ul style="font-family: 'Dosis', sans-serif;">
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

        <section class="cards_plans">
            <div class="card">
                <img src="img/plano_basic.jpg">
                <h1>Basic Plan</h1>
                <p>✓ Kids Club</p>
                <p>✓ Broadway Style Show</p>
                <p>✓ Sports facilities, swimming pool and panoramic gym</p>
                <p>✓ Accumulation of points at Arcade and Travel Lands Casino</p>
                <p>✓ Club</p>
                <h2>$ 9,999</h2>
                <?php
                    $basic = 1;

                    echo '<a href="contact.php?cod='.$basic.'"><button>Select</button></a>';
                ?>
            </div>
            <div class="card">
                <img src="img/plano_medium.jpg">
                <h1>Medium Plan</h1>
                <p>✓ Kids Club</p>
                <p>✓ Broadway Style Show</p>
                <p>✓ Sports facilities, swimming pool and panoramic gym</p>
                <p>✓ Accumulation of points at Arcade and Travel Lands Casino</p>
                <p>✓ Club</p>
                <p>✓ Room service and breakfast served in the cabin</p>
                <p>✓ Priority of choice in the dinner shift</p>
                <p>✓ Choose from the best available cabins</p>
                <p>✓ Additional activities and lessons for children</p>
                <p>✓ Arcade chips included</p>
                <h2>$ 16,999</h2>
                <?php
                    $medium = 2;

                    echo '<a href="contact.php?cod='.$medium.'"><button>Select</button></a>';

                ?>
            </div>
            <div class="card">
                <img src="img/plano_premium.jpg">
                <h1>Premium Plan</h1>
                <p>✓ Kids Club</p>
                <p>✓ Broadway Style Show</p>
                <p>✓ Sports facilities, swimming pool and panoramic gym</p>
                <p>✓ Accumulation of points at Arcade and Travel Lands Casino</p>
                <p>✓ Club</p>
                <p>✓ Room service and breakfast served in the cabin</p>
                <p>✓ Priority of choice in the dinner shift</p>
                <p>✓ Choose from the best available cabins</p>
                <p>✓ Additional activities and lessons for children</p>
                <p>✓ Arcade chips included</p>
                <p>✓ Alcoholic and non-alcoholic beverage package</p>
                <p>✓ Access to the Thermal Area + Spa Benefits</p>
                <p>✓ Dinner at your preferred time</p>
                <p>✓ Priority boarding</p>
                <p>✓ Access to solariums and exclusive experiences</p>
                <p>✓ All-Inclusive Family Activities</p>
                <h2>$ 22,999</h2>
                <?php
                    $premium = 3;

                    echo '<a href="contact.php?cod='.$premium.'"><button>Select</button></a>';
                ?>
            </div>
        </section>

        <section class="section_footer">
            <footer class="main_footer" style="font-family: 'Dosis', sans-serif;">
                <p>All your rights reserved (2021)</p>
            </footer>
        </section>

    </body>
</html>