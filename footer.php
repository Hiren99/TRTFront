<?php
// Include PHPMailer and its dependencies
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Initialize the message variable for success or error
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the email input from the form
    $email = $_POST['email'];

    // Validate the email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Create an instance of PHPMailer
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                           // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                        // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                     // Enable SMTP authentication
            $mail->Username = 'implies.technologies@gmail.com';              // SMTP username
            $mail->Password = 'icep pqbx kswo hptx';                    // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
            $mail->Port = 587;                                          // TCP port to connect to

            //Recipients
            $mail->setFrom('no-reply@yourdomain.com', 'Your Website');  // Sender's email address
            $mail->addAddress('funfigma@gmail.com', 'Admin');       // Add a recipient (your email address)

            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'New Newsletter Subscription';
            $mail->Body    = 'You have a new subscriber: ' . $email;
            $mail->AltBody = 'You have a new subscriber: ' . $email;

            // Send the email
            $mail->send();

            // Success message
            $message = "<div class='alert alert-success'>Thank you for subscribing! We will keep you updated.</div>";
        } catch (Exception $e) {
            // Error message
            $message = "<div class='alert alert-danger'>Oops! Something went wrong. Please try again later. Error: {$mail->ErrorInfo}</div>";
        }
    } else {
        // If email is not valid
        $message = "<div class='alert alert-danger'>Please enter a valid email address.</div>";
    }
}
?>
  <!-- footer -->
  <footer class="main_footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contactinfo">
                            <div class="left-contactno">
                                <span class="callicon me-2">
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M36.0625 12.625H35.9688C35.5712 9.1991 33.9285 6.03876 31.353 3.74489C28.7775 1.45102 25.4489 0.183594 22 0.183594C18.5511 0.183594 15.2225 1.45102 12.647 3.74489C10.0715 6.03876 8.42883 9.1991 8.03125 12.625H7.9375C5.8655 12.625 3.87836 13.4481 2.41323 14.9132C0.9481 16.3784 0.125 18.3655 0.125 20.4375C0.125 22.5095 0.9481 24.4967 2.41323 25.9618C3.87836 27.4269 5.8655 28.25 7.9375 28.25H11.0625V14.1875C11.0625 11.2867 12.2148 8.5047 14.266 6.45352C16.3172 4.40235 19.0992 3.25 22 3.25C24.9008 3.25 27.6828 4.40235 29.734 6.45352C31.7852 8.5047 32.9375 11.2867 32.9375 14.1875V29.8125C32.9364 31.2441 32.444 32.6319 31.5424 33.744C30.6408 34.856 29.3848 35.6248 27.9844 35.9219C27.5673 34.459 26.631 33.1985 25.351 32.3765C24.071 31.5546 22.5352 31.2277 21.0314 31.4571C19.5277 31.6865 18.1592 32.4564 17.1825 33.6226C16.2057 34.7888 15.6879 36.2711 15.7259 37.7918C15.7639 39.3125 16.3552 40.7671 17.389 41.8831C18.4227 42.999 19.828 43.6996 21.3413 43.8535C22.8547 44.0075 24.3723 43.6042 25.6096 42.7194C26.8469 41.8345 27.719 40.5288 28.0625 39.0469C30.2797 38.7182 32.3057 37.606 33.7734 35.9119C35.241 34.2178 36.0531 32.0539 36.0625 29.8125V28.25C38.1345 28.25 40.1216 27.4269 41.5868 25.9618C43.0519 24.4967 43.875 22.5095 43.875 20.4375C43.875 18.3655 43.0519 16.3784 41.5868 14.9132C40.1216 13.4481 38.1345 12.625 36.0625 12.625ZM3.25 20.4375C3.25 19.1943 3.74386 18.002 4.62294 17.1229C5.50201 16.2439 6.6943 15.75 7.9375 15.75V25.125C6.6943 25.125 5.50201 24.6311 4.62294 23.7521C3.74386 22.873 3.25 21.6807 3.25 20.4375ZM22 40.75C21.3819 40.75 20.7777 40.5667 20.2638 40.2234C19.7499 39.88 19.3494 39.3919 19.1129 38.8209C18.8764 38.2499 18.8145 37.6215 18.935 37.0154C19.0556 36.4092 19.3533 35.8523 19.7903 35.4153C20.2273 34.9783 20.7842 34.6806 21.3903 34.5601C21.9965 34.4395 22.6249 34.5014 23.1959 34.7379C23.7669 34.9744 24.255 35.3749 24.5983 35.8889C24.9417 36.4028 25.125 37.0069 25.125 37.625C25.125 38.4538 24.7958 39.2487 24.2097 39.8347C23.6237 40.4208 22.8288 40.75 22 40.75ZM36.0625 25.125V15.75C37.3057 15.75 38.498 16.2439 39.3771 17.1229C40.2561 18.002 40.75 19.1943 40.75 20.4375C40.75 21.6807 40.2561 22.873 39.3771 23.7521C38.498 24.6311 37.3057 25.125 36.0625 25.125Z" fill="#8C387C"/>
                                    </svg>
                                </span> Speak to our expert Travel Guide <a href="tel:+918977008007" class="telno">+91 8977008007</a>
                            </div>
                            <div class="right-sociallink">
                                <ul>
                                    <li>Follow Us :</li>
                                    <li><a href="https://www.facebook.com/theroyaltourism07" target="_blank" class="sociallink"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/@theroyaltourism007" target="_blank" class="sociallink"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="https://www.instagram.com/theroyaltourism07/" target="_blank" class="sociallink"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://goo.gl/maps/sdT1wN3Pze6ZM4e87" target="_blank" class="sociallink"><i class="fa fa-map-marker"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="footer-cols">
                            <div class="footer-address">
                                <h4 class="foot-title">Contact Us</h4>
                                <div class="d-flex mt-3 mb-3">
                                    <div class="flex-shrink-0">                                        
                                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="14.5" cy="14.5" r="14.5" fill="#8C387C"/>
                                        <path d="M14.0002 14.6666C13.5581 14.6666 13.1342 14.4911 12.8217 14.1785C12.5091 13.8659 12.3335 13.442 12.3335 13C12.3335 12.558 12.5091 12.134 12.8217 11.8215C13.1342 11.5089 13.5581 11.3333 14.0002 11.3333C14.4422 11.3333 14.8661 11.5089 15.1787 11.8215C15.4912 12.134 15.6668 12.558 15.6668 13C15.6668 13.2188 15.6237 13.4356 15.54 13.6378C15.4562 13.84 15.3334 14.0237 15.1787 14.1785C15.0239 14.3333 14.8402 14.456 14.638 14.5398C14.4358 14.6235 14.219 14.6666 14.0002 14.6666ZM14.0002 8.33331C12.7625 8.33331 11.5755 8.82498 10.7003 9.70015C9.82516 10.5753 9.3335 11.7623 9.3335 13C9.3335 16.5 14.0002 21.6666 14.0002 21.6666C14.0002 21.6666 18.6668 16.5 18.6668 13C18.6668 11.7623 18.1752 10.5753 17.3 9.70015C16.4248 8.82498 15.2378 8.33331 14.0002 8.33331Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-0 font18 fw-normal blue-txt">2nd Floor, Tourism Plaza, Balayogi, Paryataka Bhavan, Begumpet, Hyderabad 500016.</h4>
                                    </div>
                                </div>
                                <div class="d-flex mt-3 mb-3">
                                    <div class="flex-shrink-0">                                        
                                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="14.5" cy="14.5" r="14.5" fill="#8C387C"/>
                                        <path d="M19.3335 9.66669H8.66683C7.9335 9.66669 7.34016 10.2667 7.34016 11L7.3335 19C7.3335 19.7334 7.9335 20.3334 8.66683 20.3334H19.3335C20.0668 20.3334 20.6668 19.7334 20.6668 19V11C20.6668 10.2667 20.0668 9.66669 19.3335 9.66669ZM19.0668 12.5L14.3535 15.4467C14.1402 15.58 13.8602 15.58 13.6468 15.4467L8.9335 12.5C8.86665 12.4625 8.80811 12.4118 8.76142 12.351C8.71474 12.2902 8.68087 12.2205 8.66188 12.1463C8.64289 12.072 8.63916 11.9946 8.65093 11.9189C8.6627 11.8431 8.68972 11.7706 8.73035 11.7056C8.77098 11.6405 8.82438 11.5845 8.88731 11.5407C8.95025 11.4969 9.02141 11.4664 9.09649 11.4509C9.17158 11.4354 9.24902 11.4353 9.32413 11.4507C9.39925 11.466 9.47047 11.4964 9.5335 11.54L14.0002 14.3334L18.4668 11.54C18.5299 11.4964 18.6011 11.466 18.6762 11.4507C18.7513 11.4353 18.8288 11.4354 18.9038 11.4509C18.9789 11.4664 19.0501 11.4969 19.113 11.5407C19.1759 11.5845 19.2293 11.6405 19.27 11.7056C19.3106 11.7706 19.3376 11.8431 19.3494 11.9189C19.3612 11.9946 19.3574 12.072 19.3384 12.1463C19.3195 12.2205 19.2856 12.2902 19.2389 12.351C19.1922 12.4118 19.1337 12.4625 19.0668 12.5Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-0 font18 fw-normal blue-txt">contact@theroyaltourism.in</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-menus">
                                <h4 class="foot-title">Company</h4>
                                <ul>
                                    <li><a href="index.php" class="foot-nav">Home</a></li>
                                    <li><a href="aboutus.php" class="foot-nav">About Us </a></li>
                                    <li><a href="blog.php" class="foot-nav">News & Blogs</a></li>
                                    <li><a href="contactus.php" class="foot-nav">Contact Us</a></li>
                                    <li><a href="javascript:void(0)" class="foot-nav">Terms & Conditions</a></li>
                                    <li><a href="javascript:void(0)" class="foot-nav">Privacy Policy </a></li>
                                </ul>
                            </div>
                            <div class="footer-menus">
                                <h4 class="foot-title">Destinations</h4>
                                <ul>
                                    <li><a href="javascript:void(0)" class="foot-nav">Domestic</a></li>
                                    <li><a href="international.html" class="foot-nav">International</a></li>
                                    <li><a href="javascript:void(0)" class="foot-nav">Group Tours</a></li>
                                    <li><a href="javascript:void(0)" class="foot-nav">Visafree Countries</a></li>
                                    <li><a href="javascript:void(0)" class="foot-nav">Corporate Tours</a></li>
                                    <li><a href="javascript:void(0)" class="foot-nav">Weekend Trips</a></li>
                                    <li><a href="javascript:void(0)" class="foot-nav">HoneyMoon Packages</a></li>
                                </ul>
                            </div>
                            <div class="newsletter-area">
                                <h4 class="foot-title">Newsletter</h4>
                                <p class="">Subscribe to the free newsletter and stay up to date</p>

                                <!-- Displaying the success or error message -->
                                <?php echo $message; ?>

                                <form class="newsletter-form" method="POST" role="search">
                                    <input class="form-control" type="email" name="email" placeholder="Your email address" aria-label="Search" required>
                                    <button class="btn" type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="footer-foot text-center">
                            <p class="mb-0 fw-medium">Copyrights &copy; 2024 Reserved by The Royal Tourism. Design & Developed by <strong class="prim-txt"><a href="https://impliestechnologies.in" target="_blank">Implies Technologies</a></strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    

    <!-- bottom to top -->
    <a id="button"></a>

    <!-- JS -->
    <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/slick.js" type="text/javascript"></script>
    <script src="js/swiper-bundle.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    
    <script>
        // document.addEventListener('DOMContentLoaded', function () {
        //     const navbarLinks = document.querySelectorAll('.nav-link');
        //     const navbarCollapse = document.querySelector('.navbar-collapse');

        //     navbarLinks.forEach(link => {
        //         link.addEventListener('click', () => {
        //             if (navbarCollapse.classList.contains('show')) {
        //                 new bootstrap.Collapse(navbarCollapse).hide();
        //             }
        //         });
        //     });
        // });
    </script>
    <script  type="text/javascript">
        $(document).ready(function(){
            
        });
    </script>
</body>
</html>