<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Business Advisory</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="headerStyles.css">
  <link rel="stylesheet" href="auditAndAssurance.css">
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

<header class="adili-header services-header">
  <div class="overlay"></div>
<div class="nav-backgroun"> 
      </div>

  </div>

  <h1 class="page-title">Business Advisory</h1>
</header>

<section class="wholeContent">

 <section class="audit-section">
    <div class="container">
      <div class="audit-text">
        <h2>Advice you can trust, a plan you can follow</h2>
        <p>
          Throughout your business journey, there may be moments when you feel like you don’t have all the answers. We believe that making decisions affecting your company’s future is a pressure best shared with a team you can trust. We provide invaluable expertise and strategic advice that can play a critical role in your success – whether that’s growth, long-term stability or looking ahead to exit-planning.
        </p>
        <a href="contacts.php" class="enquire-button">ENQUIRE</a>
      </div>
      <div class="audit-image">
        <img src="beautifulCity.jpg" alt="Internal Audit Graphic">
      </div>
    </div>
  </section>


  <section class="offer-section">
    <div class="offer-container">
      <div class="offer-left">
        <h2 class="offer-title">What We Offer</h2>
        <ul class="offer-list">
          <li>Corporate finance</li>
          <li>Forensic Services</li>
          <li>Transaction Services</li>
        </ul>
      </div>

 <div class="offer-right">
  <h3>Why We’re Unique</h3>
  <p>
    At Bellwick, we combine technical excellence with a deep understanding of our clients’ industries to deliver tailored, practical solutions. 
    What sets us apart is our commitment to long-term relationships, our partner-led approach, and our ability to adapt to evolving business needs. 
    Backed by a diverse and experienced team, we provide clear, actionable advice that supports sustainable growth and informed decision-making.
  </p>
</div>

    </div>
  </section>

    <section class="enquire-section">
    <div class="enquire-container">
      <div class="enquire-left">
      <h2>Enquire</h2>
      <h3>Let’s Start a Conversation That Moves Your Business Forward</h3>
      <p>
      At Bellwick, we’re here to support your business with practical insights and strategic solutions. 
      Whether you need audit, tax, or advisory services, our experienced team is ready to listen, understand your needs, and provide tailored guidance. 
      Get in touch with us today to explore how we can work together to achieve your goals.
      </p>

    </div>

                <div class="enquire-right" style="display: none;">
    </div>
      <div class="enquire-left" id="coop-fin">
      <h2>Business Advisory</h2>
      <h3>Corporate finance</h3>
      <p>
      Navigating business transactions—whether buying or selling a business, raising capital, or optimising funding structures—can be complex. We help clients unlock value, develop strategic approaches, and deliver end-to-end solutions that drive success.

      Our expertise in Mergers and Acquisitions (M&A) includes advising clients on selling or acquiring a business, securing financing, and providing management advisory services.

      </p>
    </div>

        <div class="enquire-left enquire-right" id="for-services">
          <h3>Forensic Services</h3>
          <p>
        We help protect your business’s value by acting swiftly to minimise costs and safeguard its reputation. Whether it’s getting major projects back on track, uncovering financial crime, managing crises, or resolving disputes, we use forensic technology to address challenges efficiently.
          </p>
      </div>

    <div class="enquire-left" id="trans-ser">    
      <h3>Transaction Services</h3>
      <p>
      We support clients in buying, selling, or refinancing their business—whether in whole or in part. Our financial due diligence process identifies key opportunities and risks, ensuring informed decision-making and strategic growth.
      No matter which side of the transaction you're on, we provide expert guidance in buy-side advisory, sell-side advisory, and Sale and Purchase Agreement (SPA) negotiation.
      </p>
    </div>


  </section>

  <section class="services-preview">
    <h2 class="services-title">View All Services</h2>
    <div class="services-box">
      <p class="services-text">
        Visit our services page to view all other services we offer.
      </p>
      <a href="#services-menu" class="view-button">VIEW →</a>
    </div>
  </section>
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


<!-- <section class="testimonial-section">
  <div class="testimonial">
    <p class="quote">
The risk team's performance was exceptional and went beyond our expectations. Their agility and adaptability in dynamic environments enabled them to carry out and deliver complex investigations within challenging security contexts.    </p>
    <p class="autho">
      – <strong>COMMENTS FROM CLIENTS</strong>
    </p>
  </div>
</section> -->



<section class="cta-section">
  <h2>Need Business Solutions? Contact Us Today!</h2>
  <a href="contacts.php" class="cta-button">CONTACT US</a>
</section>

<div class="services-menu" id="services-menu">
  <div class="services-column logo-column">
    <!-- <img src="your-logo.png" alt="Company Logo" class="logo"> -->
    <h2>Services</h2>
  </div>

   <div class="services-column">
    <a href="auditAndAssurance.php"><h3>Audit and Assurance</h3></a>
    <ul>
      <li><a href="auditAndAssurance.php#Ext-Audit">External Audit</a></li>
      <li><a href="auditAndAssurance.php#assu-rev">Assurance Reviews</a></li>
      <li><a href="auditAndAssurance.php#joint-finacials">Joint Financial Audits</a></li>
      <li><a href="auditAndAssurance.php#prep-support">Audit Preparation Support </a></li>
    </ul>

    <a href="tax.php"><h3>Tax Services</h3></a>
    <ul>
      <li><a href="tax.php#Tax-comp">Tax Compliance</a></li>
      <li><a href="tax.php#indirect-tax">Indirect Taxes</a></li>
      <li><a href="tax.php#Tax-advisory">Tax Advisory Services</a></li>
    </ul>
  </div>

  <div class="services-column">

    <a href="BusinessSupportSolutions.php"><h3>Business Support And Solutions</h3></a>
    <ul>
      <li><a href="BusinessSupportSolutions.php#out-sourced">Outsourced Accounting</a></li>
      <li><a href="BusinessSupportSolutions.php#pay-roll">Payroll & Pensions Services</a></li>
    </ul>

    <a href="BusinessAdvisory.php"><h3>Business Advisory</h3></a>
    <ul>
      <li><a href="BusinessAdvisory.php#coop-fin">Corporate Finance</a></li>
      <li><a href="BusinessAdvisory.php#for-services">Forensic Services</a></li>
      <li><a href="BusinessAdvisory.php#trans-ser">Transaction Services</a></li>
    </ul>
  </div>
  
  <div class="services-column side-info">
    <a href="aboutUs.php"><h3>About Bellwick</h3></a>
    <ul>
      <li><a href="contacts.php">Contact</a></li>
      <li><a href="sectors.php">Sectors</a></li>
    </ul>

      <h3>Socials</h3>
      <div class="nav-social">
            <a href="https://www.linkedin.com/company/bellwickllp/">linkedIn</a>
      </div> <br>
          <h3>Contacts</h3>
    <ul>
      <li>Tel: +254 791 825 104 / +254 791 825 166</li>
      <li>Email: info@bellwickllp.com</li>
      <li>Britam Tower, 24th Floor, Hospital Road,</li>
      <li>P.O. Box 28018-00100,</li>
      <li>Nairobi, Kenya </li>
    </ul>
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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Select all sections that should be animated
    const sections = document.querySelectorAll('.audit-section, .offer-section, .enquire-section, .services-preview');
    
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight * 0.75) && 
            rect.bottom >= (window.innerHeight * 0.25)
        );
    }
    
    // Function to handle scroll events
    function handleScroll() {
        sections.forEach(section => {
            if (isInViewport(section)) {
                section.classList.add('show');
            } else {
                // Remove this line if you don't want animations to replay when scrolling up
                section.classList.remove('show');
            }
        });
    }
    
    // Initial check on page load
    handleScroll();
    
    // Add scroll event listener with debounce for performance
    let isScrolling;
    window.addEventListener('scroll', function() {
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(function() {
            handleScroll();
        }, 66); // Runs every 66ms (approximately 15fps)
    }, false);
    
    // Intersection Observer for more performant animations
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                } else {
                    // Remove this line if you don't want animations to replay when scrolling up
                    entry.target.classList.remove('show');
                }
            });
        }, observerOptions);
        
        sections.forEach(section => {
            observer.observe(section);
        });
    }
});
</script>

</body>
</html>
