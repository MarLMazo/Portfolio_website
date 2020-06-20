<?php
    include 'models/Database/Database.php';
    include 'models/Technology.php';
    include_once 'includes/Views/htmlhead.php';
    include_once 'includes/Views/pageloader.php';
    include_once 'includes/Views/header.php';

    $db = Database::getDb();
    $newtech = new Technology();
    $techlist = $newtech->list_technology($db);

?>
<main id="aboutpage">
    <h1>About Me</h1>
    <div id="aboutme">
        <h2 class="hidden">About the Developer</h2>
        <div class="author-details">
            <div class="about-img-cont"><img alt="Authors Image" src="http://wordpress.mdmazo.com/wp-content/uploads/2020/06/my-image-scaled-e1591457974795.jpg" /></div>
            <div id="author-about">
                <p>I am a junior web developer who is currently finishing my studies at Humber College. I 'm passionate about coding, I really enjoy re-creating online web technology projects. It's really fun to watch how this kind of stuff helps business and people make life easier. </p>
                <p>I really expect that after 10 to 20 years, internet technology will become normal in our daily lives and will help a lot of people in every aspect, such as medicine, construction, and many more that can boost our economy.</p>
            </div>
        </div>
    </div>
    <h2>Skills</h2>
    <div id="skill">
        <div class="skill-goal">
            <h3>Goals in my Projects</h3>
            <div class="skill-list">
                <div class="icon"><i class="fas fa-running"></i></div>
                <h3>Fast</h3>
                <p>Fast Load Times for better Engagement of Users</p>
            </div>
            <div class="skill-list">
                <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                <h3>Responsive</h3>
                <p>For User to view website in any device</p>
            </div>
            <div class="skill-list">
                <div class="icon"><i class="fas fa-fingerprint"></i></div>
                <h3>Inituitive</h3>
                <p>Strong User-friendly website.</p>
            </div>
        </div>
        <div class="skill-language">
            <h3>Language and Technologies</h3>
            <ul>
                <?php
                    foreach ($techlist as $tech){
                        //Looping all thru the list of technologies with icon path to show on the List of Language and Technologies
                        if($tech->icon_path !== null){
                            print "<li><img class=\"skill-icons\" src=\"$tech->icon_path\" alt=\"\"/>$tech->name</li>";
                        }
                    }
                ?>
            </ul>
        </div>
    </div>

</main>

<?php
    include_once  'includes/Views/socialmedia.php';
    include_once 'includes/Views/footer.php'

?>


