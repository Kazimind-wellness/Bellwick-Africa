<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values safely
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';      // Use your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username = 'stevenmacharia2003@gmail.com';
        $mail->Password = 'qnyouawdxhxoqfrh'; // App password or SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('info@bellwickllp.com', 'Bellwick Admin'); // Receiver email

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Message: $subject";
        $mail->Body    = "
            <h3>New Message from Bellwick africa Website.</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";
        $mail->AltBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

        $mail->send();
        // Optional: redirect back to thank-you page
        header("Location: contacts.php");
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="headerStyles.css">
  <link rel="stylesheet" href="contacts.css">
  <link rel="icon" type="image/png" href="logo-icon.png">
</head>
<body>

  <header class="floating-nav">
    <div class="left-side">
    <div class="logo">
      <img src="logo.png" alt=" Logo">
    </div>
      </div>
      <nav class="main-nav">
          <ul>
              <li><a href="index.php">Home</a></li>
              <li class="dropdown"><a href="aboutUs.php">About Us</a></li>

                <li class="dropdown" style="height: 10px;">
                <a href="#">Our Services <span class="arrow"></span></a>
                <div class="dropdown-content">
                  <a href="auditAndAssurance.php">Audit & Assurance</a>
                  <a href="BusinessSupportSolutions.php">Business support solutions</a>
                  <a href="BusinessAdvisory.php">Business Advisory</a>
                  <a href="tax.php">Tax Services</a>
                </div>
                </li>
              <li><a href="sectors.php">Sectors</a></li>
              <li><a href="contacts.php">Contact Us</a></li>
              
          </ul>
      </nav>
       <a href="contacts.php" class="enquire-btn" >ENQUIRE</a>
      <div class="right-side">
          <a href="#" class="menu" id="openMenu"></a>
      </div>
  </header>

<header class="adili-header about-header">
  <div class="overlay"></div>
 <div class="nav-backgroun"> 
    </div>
  </div>

  <h1 class="page-title">Contact Us</h1>
</header>


  <section class="contact-form-section">
    <form class="contact-form" method="post">
      <input type="text" name="name" placeholder="Name" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="text" name="subject" placeholder="Subject" required />
      <textarea name="message" rows="5" placeholder="Comment or Message" required></textarea>
      <button type="submit">SUBMIT</button>
    </form>
  </section>


    <dialog id="mainDialog" style="text-align: center; margin: 5rem auto;">
      <a href="index.php">HOME</a>
      <a href="aboutUs.php">About Us</a>

      <a href="" id="servicesToggle">Our Services</a>
                  <div id="servicesLinks" style="display: none; margin: 0.5rem 0; font-size: 10px;">
                    <a href="auditAndAssurance.php" style="display: block; margin: 0.3rem 0;">Audit & Assurance</a>
                    <a href="tax.php" style="display: block; margin: 0.3rem 0;">Tax Services</a>
                    <a href="BusinessAdvisory.php" style="display: block; margin: 0.3rem 0;">Business Advisory</a>
                    <a href="BusinessSupportSolutions.php" style="display: block; margin: 0.3rem 0;">Business Support</a>
                  </div>

      <a href="sectors.php">Sectors</a>
      <a href="contacts.php">Contact Us</a>
  </dialog>
  <script src="script.js"></script>


<section class="testimonial-section">
  <div class="testimonial">
    <p class="quote">
The risk team's performance was exceptional and went beyond our expectations. Their agility and adaptability in dynamic environments enabled them to carry out and deliver complex investigations within challenging security contexts.
    </p>
    <p class="autho">
      – <strong>COMMENTS FROM CLIENTS</strong>
    </p>
  </div>
</section>

<section class="cta-section">
  <h2>Need Business Solutions? Contact Us Today!</h2>
  <a href="contacts.php" class="cta-button">CONTACT US</a>
</section>


<div class="services-menu">
  <div class="services-column logo-column">
    <!-- <img src="your-logo.png" alt="Company Logo" class="logo"> -->
    <h2>Services</h2>
  </div>


  <div class="services-column">
    <h3>Audit and Assurance</h3>
    <ul>
      <li><a href="auditAndAssurance.php#Ext-Audit">External Audit</a></li>
      <li><a href="auditAndAssurance.php#assu-rev">Assurance Reviews</a></li>
      <li><a href="auditAndAssurance.php#joint-finacials">Joint Financial Audits</a></li>
      <li><a href="auditAndAssurance.php#prep-support">Audit Preparation Support </a></li>
    </ul>

    <h3>Tax Services</h3>
    <ul>
      <li><a href="tax.php#Tax-comp">Tax Compliance</a></li>
      <li><a href="tax.php#indirect-tax">Indirect Taxes</a></li>
      <li><a href="tax.php#Tax-advisory">Tax Advisory Services</a></li>
    </ul>
  </div>

  <div class="services-column">

    <h3>Business Support And Solutions</h3>
    <ul>
      <li><a href="BusinessSupportSolutions.php#out-sourced">Outsourced Accounting</a></li>
      <li><a href="BusinessSupportSolutions.php#pay-roll">Payroll & Pensions Services</a></li>
    </ul>

    <h3>Business Advisory</h3>
    <ul>
      <li><a href="BusinessAdvisory.php#coop-fin">Corporate Finance</a></li>
      <li><a href="BusinessAdvisory.php#for-services">Forensic Services</a></li>
      <li><a href="BusinessAdvisory.php#trans-ser">Transaction Services</a></li>
    </ul>
  </div>

  <div class="services-column side-info">
    <h3>About Bellwick</h3>
    <ul>
      <li><a href="contacts.php">Contact</a></li>
      <li><a href="sectors.php">Sectors</a></li>
    </ul>

        <h3>Socials</h3>
      <div class="nav-social">
            <a href="#">FB</a>
            <a href="#">TW</a>
            <a href="#">IG</a>
      </div>
    <!-- <img src="dmcc-logo.png" alt="DMCC Logo" class="partner-logo">
    <img src="un-global-logo.png" alt="UN Global Compact Logo" class="partner-logo"> -->
  </div>
</div>


<footer class="bottom-footer">
  <div class="footer-content">
    <p>© 2025 Bellwick All rights reserved</p>
    <p><a href="#">Terms and Conditions</a> | <a href="#">Privacy Policy</a></p>
  </div>

  <a href="#top" class="back-to-top" title="Back to top">
    <i class="fas fa-arrow-up"></i>
  </a>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const servicesToggle = document.getElementById('servicesToggle');
    const servicesLinks = document.getElementById('servicesLinks');

    servicesToggle.addEventListener('click', function (e) {
      e.preventDefault();
      servicesLinks.style.display = (servicesLinks.style.display === 'none') ? 'block' : 'none';
    });
  });
</script>

</body>
</html>
