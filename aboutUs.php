<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="headerStyles.css">
  <link rel="stylesheet" href="aboutUs.css">
  <link rel="icon" type="image/png" href="logo-icon.png">
  <style>
    /* Animation Styles */
    .scroll-animate {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    .scroll-animate.in-view {
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Background wave animation */
    .adili-about-section {
      animation: wave 60s linear infinite;
    }
    
    .why-clients {
      animation: wave 60s linear infinite reverse;
    }
    
    @keyframes wave {
      0% { background-position: 0 0; }
      100% { background-position: 100% 0; }
    }
    
    /* Reason card hover effects */
    .reason {
      transition: all 0.3s ease;
    }
    
    .reason:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
  </style>
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
  <h1 class="page-title">MANY YEARS OF EXPERIENCE</h1>
</header>

<section class="adili-about-section">
  <div class="container-about scroll-animate">
    <h2 class="scroll-animate">
      Bellwick is a leading consultancy firm <br>
      with key offerings:
    </h2>

    <p class="experience-text scroll-animate">
      Bellwick is a leading consultancy firm based in Nairobi, providing accounting, audit, tax, and business advisory services to a wide range of businesses and individuals.
    </p>
    <p class="experience-text scroll-animate">
      With over 30 years of combined experience, we have earned a reputation as one of the region's most progressive firms. Our team, comprised of experts with backgrounds in big-four professional services firms, is dedicated to offering tailored advisory services that foster long-term relationships with our clients.
    </p>
    <p class="experience-text scroll-animate">
      We focus on understanding and addressing our clients' needs in an intelligent, efficient, and cost-effective manner, delivering solutions that make a real difference to their organizations.
    </p>
    <p class="experience-text scroll-animate">
      Our goal is to add genuine value to your business. To achieve this, we offer ongoing support from a skilled, partner-led team. Our close working relationships with clients, along with easy access to partners, directors, and managers, enable us to provide fast, high-quality advice and assistance with implementation.
    </p>
  </div>
</section>

<section class="why-clients">
  <div class="container">
    <h2 class="section-title scroll-animate">Why Clients Choose Bellwick</h2>
    <div class="reasons-grid">
      <div class="reason scroll-animate">
        <h3>Expertise</h3>
        <p>Our team brings together over 30 years of combined experience across multiple sectors and disciplines. Clients choose us for our deep industry knowledge, practical insights, and consistent delivery of value-driven solutions.</p>
      </div>
      <div class="reason scroll-animate">
        <h3>Responsiveness</h3>
        <p>We understand the importance of timely decision-making. Our agile approach allows us to respond quickly to our clients' needs and provide proactive support in a constantly evolving business environment.</p>
      </div>
      <div class="reason scroll-animate">
        <h3>Efficiency</h3>
        <p>We use technology intelligently and apply proven processes to develop tailored solutions—delivering results that are both effective and timely.</p>
      </div>
      <div class="reason scroll-animate">
        <h3>Regional Insight</h3>
        <p>With deep roots in Kenya and an understanding of regional dynamics, we support both local and cross-border clients with cohesive, partner-led solutions across East Africa.</p>
      </div>
      <div class="reason scroll-animate">
        <h3>Commitment to Quality</h3>
        <p>Excellence is at the core of everything we do. We dedicate time and expertise to deliver high-quality outcomes that meet complex business demands and tight timelines.</p>
      </div>
    </div>
  </div>
</section>

<dialog id="mainDialog" style="text-align: center; margin: 5rem auto;">
  <a href="index.php">HOME</a>
  <a href="aboutUs.php">About Us</a>
  <a href="" id="servicesToggle">Our Services</a>
  <div id="servicesLinks" style="display: none; margin: 0.5rem 0; font-size: 10px;">
    <a href="auditAndAssurance.php" style="display: block; margin: 0.3rem 0;">Audit & Assurance</a>
    <a href="tax.php" style="display: block; margin: 0.3rem 0;">Tax Consulting</a>
    <a href="BusinessAdvisory.php" style="display: block; margin: 0.3rem 0;">Business Advisory</a>
    <a href="BusinessSupportSolutions.php" style="display: block; margin: 0.3rem 0;">Business Support</a>
  </div>
  <a href="sectors.php">Sectors</a>
  <a href="contacts.php">Contact US</a>
</dialog>
  <script src="script.js"></script>

<section class="testimonial-section">
  <div class="testimonial ">
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
  <a href="contacts.php" class="cta-button ">CONTACT US</a>
</section>

<div class="services-menu" id="services-menu">
  <div class="services-column logo-column">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize Intersection Observer
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      // Reset animation state when element leaves viewport
      if (!entry.isIntersecting) {
        entry.target.classList.remove('in-view');
        return;
      }
      
      // Trigger animation when entering viewport
      entry.target.classList.add('in-view');
      
      // Handle container elements with children
      if (entry.target.classList.contains('reasons-grid')) {
        const reasons = entry.target.querySelectorAll('.reason');
        reasons.forEach((reason, index) => {
          reason.classList.remove('in-view');
          setTimeout(() => {
            reason.classList.add('in-view');
          }, index * 100);
        });
      }
      
      if (entry.target.classList.contains('container-about')) {
        const texts = entry.target.querySelectorAll('.experience-text');
        texts.forEach((text, index) => {
          text.classList.remove('in-view');
          setTimeout(() => {
            text.classList.add('in-view');
          }, index * 150);
        });
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  });

  // Observe all animated elements
  const animatedElements = document.querySelectorAll('.scroll-animate, .reasons-grid, .container-about');
  animatedElements.forEach(el => {
    observer.observe(el);
  });
});
</script>

</body>
</html>