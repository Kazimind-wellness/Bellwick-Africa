<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="headerStyles.css">
  <link rel="stylesheet" href="contacts.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<header class="adili-header about-header">
  <div class="overlay"></div>

  <div class="nav-container">
    <div class="logo">
      <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Transparent_logo.png" alt=" Logo">
      
    </div>

    <nav class="nav-links">
      <a href="index.php">Home</a>
      <a href="aboutUs.php">About Us<span class="arrow">&#9662;</span></a>

         <nav class="navbar">
        <ul class="nav-links">
            <li class="dropdown">
            <a href="#">Our Services <span class="arrow">&#9662;</span></a>
            <div class="dropdown-content">
                <a href="auditAndAssurance.php">Audit & Assurance</a>
                <a href="BusinessSupportSolutions.php">Business support solutions</a>
                <a href="BusinessAdvisory.php">Business Advisory</a>
                <a href="tax.php">Tax</a>
            </div>
            </li>
        </ul>
        </nav>

      <a href="#">Our Offices <span class="arrow">&#9662;</span></a>
      <a href="#">Media <span class="arrow">&#9662;</span></a>
      <a href="sectors.php">Sectors</a>
      <a href="contacts.php">Contacts</a>
      <a href="contacts.php" class="enquire-btn">ENQUIRE</a>

      <div class="right-side">
          <a href="#" class="menu" id="openMenu"></a>
      </div>
    </nav>
    </nav>
  </div>

  <h1 class="page-title">Contacts Us</h1>
</header>


  <section class="contact-form-section">
    <form class="contact-form">
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
      <a href="">Our Services</a>
      <a href="sectors.php">Sectors</a>
      <a href="contacts.php">Contacts</a>
  </dialog>
    <script src="script.js"></script>


<section class="testimonial-section">
  <div class="testimonial">
    <p class="quote">
      “The performance of the risk team was outstanding and exceeded our expectations. Through their agility and adaptability to changing environments, they successfully performed and delivered complex investigations in complex security settings.”
    </p>
    <p class="autho">
      – <strong>Head of Investigations - IFRC</strong>
    </p>
  </div>
</section>

<section class="cta-section">
  <h2>Need Business Solutions? Contact Us Today!</h2>
  <a href="contacts.php" class="cta-button">CONTACT US</a>
</section>


<div class="services-menu">
  <div class="services-column logo-column">
    <img src="your-logo.png" alt="Company Logo" class="logo">
    <h2>Services</h2>
  </div>

  <div class="services-column">
    <h3>Corporate Services</h3>
    <ul>
      <li>Corporate Secretarial and Administration</li>
      <li>Security Trustee</li>
      <li>Escrow Agent</li>
      <li>Distress and Recovery</li>
    </ul>

    <h3>Outsourcing Services</h3>
    <ul>
      <li>Accounting</li>
      <li>Payroll</li>
      <li>Tax Compliance</li>
      <li>Immigration</li>
      <li>Managed IT Services</li>
    </ul>
  </div>

  <div class="services-column">
    <h3>Audit and Assurance</h3>
    <ul>
      <li><a href="#">Audit services for clarity, insight and direction</a></li>
      <li><a href="#">External Audit</a></li>
      <li><a href="#">Assurance Reviews</a></li>
      <li><a href="#">Joint Financial Audits</a></li>
      <li><a href="#">Audit Preparation Support </a></li>
    </ul>

    <h3>Tax Services</h3>
    <ul>
      <li><a href="#">Relieving pressure through expert tax guidance</a></li>
      <li><a href="#">Tax Compliance</a></li>
      <li><a href="#">Indirect Taxes</a></li>
      <li><a href="#">Tax Advisory Services</a></li>
    </ul>
  </div>

  <div class="services-column">

    <h3>Business Support And Solutions</h3>
    <ul>
      <li><a href="#">Outsourced Accounting</a></li>
      <li><a href="#">Payroll & Pensions Services</a></li>
    </ul>

    <h3>Business Advisory</h3>
    <ul>
      <li><a href="#">Advice you can trust, a plan you can follow</a></li>
      <li><a href="#">Corporate Finance</a></li>
      <li><a href="#">Forensic Services</a></li>
      <li><a href="#">Transaction Services</a></li>
    </ul>
  </div>

  <div class="services-column side-info">
    <h3>About Bellwick Africa</h3>
    <ul>
      <li><a href="contacts.php">Contact</a></li>
      <li><a href="sectors.php">Sectors</a></li>
    </ul>

    <h3>Partners</h3>
    <!-- <img src="dmcc-logo.png" alt="DMCC Logo" class="partner-logo">
    <img src="un-global-logo.png" alt="UN Global Compact Logo" class="partner-logo"> -->
  </div>
</div>


<footer class="bottom-footer">
  <div class="footer-content">
    <p>© 2025 Adili Group All rights reserved</p>
    <p><a href="#">Terms and Conditions</a> | <a href="#">Privacy Policy</a></p>
  </div>

  <a href="#top" class="back-to-top" title="Back to top">
    <i class="fas fa-arrow-up"></i>
  </a>
</footer>


</body>
</html>
