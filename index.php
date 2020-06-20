<?php
    include_once 'includes/Views/htmlhead.php';
    include_once 'includes/Views/pageloader.php';
    include_once 'includes/Views/header.php';?>

<main id="indexpage">
    <div class="index-container">
        <h1>Hello I'm MarL Mazo</h1>
        <div class="main-line"></div>
        <p class="typewrite" data-period="2000" data-type='[ "I am a Junior Web Developer", "I am Creative.", "I Love Challenge.", "I Love to Develop." ]'>

        </p>
        <div class="main-btn">
            <div><button onclick="location.href = 'contact.php';" > Hire  Me </button></div>
            <div><button onclick="location.href = 'about.php';" >About Me</button></div>
        </div>
    </div>
</main>

<?php include_once 'includes/Views/footer.php'?>

