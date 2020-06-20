<?php
    include_once 'includes/Views/htmlhead.php';
    include_once 'includes/Views/pageloader.php';
    include_once 'includes/Views/header.php';

?>

    <main id="contactpage">
        <h1>Contact Me</h1>
        <div class="container-contact">

            <div class="wrap-contact">
                <div class="contact-form-title">
                    <span>Hire Me Today</span>
                    <span>I am actively looking for career opportunities, and would love to join your team</span>
                    <span>Feel free to drop me a message!</span>
                </div>

                <form class="contact-form validate-form" method="POST" action="contact.php">
                    <div class="wrap-input validate-input" data-validate="Valid Name is required">
                        <label for="name" class="label-input">Full Name:</label>
                        <input class="input" type="text" id="name" name="name" placeholder="Enter full name">
                        <span class="focus-input"></span>
                    </div>

                    <div class="wrap-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <label for="email" class="label-input">Email:</label>
                        <input class="input" type="text" id="email" name="email" placeholder="Enter email addess">
                        <span class="focus-input"></span>
                    </div>

                    <div class="wrap-input validate-input" data-validate = "Subject is required!">
                        <label for="subject" class="label-input">Subject:</label>
                        <input class="input" type="text" id="subject" name="subject" placeholder="Enter Subject">
                        <span class="focus-input"></span>
                    </div>

                    <div class="wrap-input validate-input" data-validate = "Message is required">
                        <label for="message" class="label-input">Message:</label>
                        <textarea class="input" name="message" id="message" placeholder="Your Message..."></textarea>
                        <span class="focus-input"></span>
                    </div>

                    <div class="container-contact-form-btn">
                        <button class="contact-form-btn" type="submit" name="submit-contact">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                        </button>
                    </div>
                    <div id="mail-status"></div>
                </form>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.5827377893866!2d-79.32388404901837!3d43.76076095338437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d26f18f41699%3A0x394654cb8b1b4538!2s71%20Parkwoods%20Village%20Dr%2C%20North%20York%2C%20ON%20M3A%202Y1!5e0!3m2!1sen!2sca!4v1591897234767!5m2!1sen!2sca" width="600" height="450"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="more-info">
                    <span>You can also follow me to my Social Media Sites<i class="fas fa-arrow-circle-right"></i></span>
                    <div>Or Email me at <a href="mailto:me@mdmazo.com">me@mdmazo.com</a></div>
                </div>
            </div>
        </div>

    </main>

<?php
    include_once  'includes/Views/socialmedia.php';
    include_once 'includes/Views/footer.php'
?>