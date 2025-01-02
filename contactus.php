<?php
// Include Composer's autoload file to load PHPMailer
require 'vendor/autoload.php';

// Initialize the message variable
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $user_message = $_POST['message'];

    // PHPMailer setup
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Set SMTP server (use your email provider's SMTP server)
        $mail->SMTPAuth = true;
        $mail->Username = 'implies.technologies@gmail.com';  // Your email address
        $mail->Password = 'icep pqbx kswo hptx';  // Your email password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;  // SMTP port for TLS

        // Recipients
        $mail->setFrom('implies.technologies@gmail.com', 'Inquiry');  // From email address
        $mail->addAddress('contact@theroyaltourism.in', 'Recipient Name');  // Recipient email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Us Form Submission';
        $mail->Body    = "<h2>You have a new message from the Contact Us form:</h2>
                          <p><strong>Full Name:</strong> $full_name</p>
                          <p><strong>Phone Number:</strong> $phone_number</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong> $user_message</p>";

        // Send the email
        if ($mail->send()) {
            $message = "<div class='alert alert-success'>Query sent successfully!</div>";
        }
    } catch (Exception $e) {
        $message = "<div class='alert alert-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
    }
}
?>

<?php
$pageTitle = "Contact Us - The Royal Tourism";  
include('header.php'); ?>

<main class="main_wrapper mt-130">
   <!-- Slider -->
   <div class="hero_banner bg-ring about-banner contact-banner">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-6 col-md-6 col-lg-6">
               <h1>Contact Us</h1>
            </div>
            <div class="col-xl-6 col-md-6 col-lg-6">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-end">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
   <section class="contact-details pt-6 pb-6">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="section-title">
                  <h2 class="title">
                     Let’s Talk Our Expert Travel Guides
                  </h2>
               </div>
               <p>Our dedicated support team is always ready to assist you with any questions or issues, offering prompt and personalized solutions to meet your needs.</p>
               <div class="expert-team">
                  <h4 class="title">Expert Team member</h4>
                  <div class="d-flex img-wrap">
                     <img src="images/team1.png" alt="team">
                     <img src="images/team2.png" alt="team">
                     <img src="images/team3.png" alt="team">
                     <img src="images/add.svg" alt="team">
                  </div>
               </div>
            </div>
            <div class="col-lg-8">
               <div class="row">
                  <div class="col-md-6">
                     <div class="office-address">
                        <h4 class="title">Hyderabad</h4>
                        <ul>
                           <li>
                              <img src="images/location-icon.svg" alt="">
                              2nd Floor, Tourism Plaza, Balayogi Paryataka Bhavan, Begumpet, Hyderabad 500016.
                           </li>
                           <li>
                              <img src="images/email.svg" alt="">
                              kolhapur@theroyaltourism.in
                           </li>
                           <li>
                              <img src="images/call.svg" alt="">
                              +91 7997008007
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="office-address">
                        <h4 class="title">Goa</h4>
                        <ul>
                           <li>
                              <img src="images/location-icon.svg" alt="">
                              56/A2, Calangute, Candoilm Main Road, Gauravaddo, Calangute, Goa - 403515.
                           </li>
                           <li>
                              <img src="images/email.svg" alt="">
                              goa@theroyaltourism.in
                           </li>
                           <li>
                              <img src="images/call.svg" alt="">
                              +91 8977008007
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="office-address">
                        <h4 class="title">Maharashtra</h4>
                        <ul>
                           <li>
                              <img src="images/location-icon.svg" alt="">
                              1st Floor, Shahupuri C Wing, Stearling Tower, Kolhapur, Maharashtra - 416003.
                           </li>
                           <li>
                              <img src="images/email.svg" alt="">
                              kolhapur@theroyaltourism.in
                           </li>
                           <li>
                              <img src="images/call.svg" alt="">
                              +91 7997008007
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Contact-form -->
   <section class="contact_section pt-5 pb-5">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="row">
                  <div class="col-xl-7 col-md-7 col-lg-7">
                     <div class="contact-form">
                        <div class="heading-section">
                           <h2 class="title">Get In Touch</h2>
                        </div>
                        <p class="font18">Your email address will not be published. Required fields are marked *</p>
                        <!-- Displaying success or error message -->
                        <?php echo $message; ?>
                        <form method="POST" action="contactus.php" class="pt-3">
                           <div class="row">
                              <div class="col-xl-6 col-md-6 col-lg-6 mb-3">
                                 <label class="form-label">Full Name</label>
                                 <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                              </div>
                              <div class="col-xl-6 col-md-6 col-lg-6 mb-3">
                                 <label class="form-label">Phone Number</label>
                                 <input type="text" name="phone_number" class="form-control" placeholder="Phone" required>
                              </div>
                              <div class="col-xl-12 mb-3">
                                 <label class="form-label">Email Address</label>
                                 <input type="email" name="email" class="form-control" placeholder="Email" required>
                              </div>
                              <div class="col-xl-12 mb-3">
                                 <label class="form-label">Your Message</label>
                                 <textarea class="form-control textarea" name="message" placeholder="Message" rows="5" required></textarea>
                              </div>
                              <div class="col-xl-12 pt-2">
                                 <div class="cust-check">
                                    <input type="radio" id="text" name="radio-group">
                                    <label for="text">Save my name, email, and website in this browser for the next time I comment.</label>
                                 </div>
                              </div>
                              <div class="col-xl-12 mt-4">
                                 <div class="btn-box text-center text-md-start"><button type="submit" class="btn btn-fill">Send Message &nbsp; <i class="fa-light fa-arrow-left fa-rotate-by" style="--fa-rotate-angle: 130deg;"></i></button></div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-xl-5 col-md-5 col-lg-5">
                     <div class="img-box ps-xl-5">
                        <img src="images/right.png" class="img-fluid" alt="contact">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.329454708322!2d78.4618533!3d17.4439386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91c010091b8f%3A0x6d169642cc2dc079!2sThe%20Royal%20Tourism!5e0!3m2!1sen!2sin!4v1735627481964!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </section>
</main>

<?php include('footer.php'); ?>
