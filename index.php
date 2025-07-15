<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bellwick Africa</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="headerStyles.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>

  <!-- Floating Navigation -->
  <header class="floating-nav">
      <!-- <div class="left-side">
          <a href="#" class="logo">LOGO</a>
      </div> -->
      <a href="contacts.php" class="enquire-btn" >ENQUIRE</a>
      <nav class="main-nav">
          <ul>
              <li><a href="index.php">Home</a></li>
              <li class="dropdown"><a href="aboutUs.php">About Us</a></li>

                <li class="dropdown" style="height: 10px;">
                <a href="#">Our Services <span class="arrow"></span></a>
                <div class="dropdown-content" style="margin-top: 2rem;">
                <a href="auditAndAssurance.php">Audit & Assurance</a>
                <a href="BusinessSupportSolutions.php">Business support solutions</a>
                <a href="BusinessAdvisory.php">Business Advisory</a>
                <a href="tax.php">Tax</a>
                </div>
                </li>

              <li class="dropdown"><a href="#">Our Offices</a></li>
              <li class="dropdown"><a href="#">Media</a></li>
              <li><a href="sectors.php">Sectors</a></li>
              <li><a href="contacts.php">Contacts</a></li>
              
          </ul>
      </nav>
 
      <div class="right-side">
          <a href="#" class="menu" id="openMenu"></a>
      </div>
  </header>

  <section>
 
    <!-- Main Sections -->
    <section class="fullpage-section active" data-section="0">
        <div class="header">
            <div class="info">
                <h4><a href="#category">Empowerment</a></h4>
                <h1>Empowering Business Through Expertise.</h1>
                <div class="meta">
                    Your vision, our expertise — shaping success together.
                </div>
            </div>
        </div>
      <div class="side-nav right-nav">
        <div class="nav-social">
            <a href="#">FB</a>
            <a href="#">TW</a>
            <a href="#">IG</a>
      </div>
      </div>

    <div class="arrow-buttons">
      <button id="prevBtn">&#10094;</button>
      <button id="nextBtn">&#10095;</button>
    </div>
    </section>

    <section class="fullpage-section" data-section="1">
        <div class="header" style="--bg-image: url(https://pohcdn.com/sites/default/files/styles/node__blog_post__bp_banner__blog_post_banner/public/2021-01/Kirkjufell-volcano.jpg)">
            <div class="info">
                <h4><a href="#category">Partnership</a></h4>
                <h1>Partnering for Long-Term Success.</h1>
                <div class="meta">
                    Behind every successful decision is clear, strategic insight.
                </div>
            </div>
        </div>
      <div class="side-nav right-nav">
          <div class="nav-social">
              <a href="#">FB</a>
              <a href="#">TW</a>
              <a href="#">IG</a>
          </div>
      </div>
      <div class="arrow-buttons">
        <button id="prevBtn">&#10094;</button>
        <button id="nextBtn">&#10095;</button>
      </div>
    </section>

    <section class="fullpage-section" data-section="2">
        <div class="header" style="--bg-image: url(https://images.unsplash.com/photo-1682695796954-bad0d0f59ff1?q=80&w=2070&auto=format&fit=crop)">
            <div class="info">
                <h4><a href="#category">Integrity</a></h4>
                <h1>Rooted in Integrity. Focused on Results.</h1>
                <div class="meta">
                    Collaboration builds confidence. Confidence drives results.
                </div>
            </div>
        </div>
      <div class="side-nav right-nav">
        <div class="nav-social">
            <a href="#">FB</a>
            <a href="#">TW</a>
            <a href="#">IG</a>
      </div>
    </div>

    <div class="arrow-buttons">
      <button id="prevBtn">&#10094;</button>
      <button id="nextBtn">&#10095;</button>
    </div>

    </section>




    <!-- Side Navigation Buttons -->
    <div class="dots-container">
        <div class="nav-dots">
            <span class="dot active" data-section="0"></span>
            <span class="dot" data-section="1"></span>
            <span class="dot" data-section="2"></span>
        </div>
    </div>

</section>

        <section class="capabilities-section">
        <h2>Our <span class="highlight">Capabilities</span></h2>
        <p>
           With over 30 years of combined experience, we have earned a reputation as one of the region’s most progressive firms. Our team, comprised of experts with backgrounds in big-four professional services firms, is dedicated to offering tailored advisory services that foster long-term relationships with our clients.
        </p>
        </section>


  <div class="container">
    <div class="sidebar">
      <button class="tab active" data-tab="compliance">Bellwick Africa at a Glance</button>
      <button class="tab" data-tab="outsourcing">Our Believe</button>
      <button class="tab" data-tab="risk">Our Advisors</button>
      <button class="tab" data-tab="cyber">Welcome</button>
      <button class="tab" data-tab="strategy">Our Services</button>
    </div>

  <div class="content">
      <img id="content-image" src="bellwick.jpg" alt="Image" />
      <div class="text-content">
        <h2 id="content-title">Bellwick Africa at a Glance</h2>
        <p id="content-description">
          Bellwick Africa LLP (“Bellwick”) is a leading consultancy firm based in Nairobi, providing accounting, 
          audit, tax, and business advisory services to businesses and individuals. Established in 2020, we 
          combine professional expertise, technology, and a deep understanding of our clients' needs to deliver 
          high-quality, effective, and responsive solutions.
        </p>
        <!-- <a id="content-button" href="https://example.com/compliance" target="_blank">
          <button class="action-button">CORPORATE SOLUTIONS</button>
        </a> -->
      </div>
    </div>
  </div>

    <section class="mobile">
      <section class="capabilities-section">
            <h2>Bellwick Africa at a Glance</span></h2>
            <p>
              Bellwick Africa LLP (“Bellwick”) is a leading consultancy firm based in Nairobi, providing accounting, 
              audit, tax, and business advisory services to businesses and individuals. Established in 2020, we 
              combine professional expertise, technology, and a deep understanding of our clients' needs to deliver 
              high-quality, effective, and responsive solutions.
                    
            </p>
              <section class="capabilities-section">
            <h2>Our Beleive</span></h2>
            <p>
            We believe that success comes from collaboration. Our team of reliable, approachable, and proactive professionals is committed to more than just meeting your needs—we work alongside you to help you achieve your goals. Running a business can be challenging but having a trusted advisor to provide guidance and act as a sounding board makes all the difference.
            </p>
              <section class="capabilities-section">
            <h2>Our Advisors</span></h2>
            <p>
            Our business improvement advisors offer practical and strategic insights to drive growth, enhance efficiency, and support long-term success.
            </p>
            </section>
              <section class="capabilities-section">
              <h2>Welcome</span></h2>
                <p>
              We welcome the opportunity to connect and build a lasting professional relationship based on a deep understanding of your business.
                </p>
              </section>
        </section>
      </section>
  </section>

    <section class="capabilities-section">
        <h2>Our <span class="highlight">Team</span></h2>
        <p>
            With our team of professionals, we have proven analytical and problem-solving skills to drive 
            value throughout your business journey. We provide invaluable expertise and strategic advice 
            that can play a critical role in your success.
        </p>
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
      <a href="contacts.php">Contacts</a>
  </dialog>


<section class="testimonial-section">
  <div class="testimonial">
    <p class="quote">
"The risk team's performance was exceptional and went beyond our expectations. Their agility and adaptability in dynamic environments enabled them to carry out and deliver complex investigations within challenging security contexts."
    </p>
    <p class="auth">
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
    <!-- <img src="your-logo.png" alt="Logo" class="logo"> -->
    <h2>Services</h2>
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
    <p>© 2025 Bellwick Africa All rights reserved</p>
    <p><a href="#">Terms and Conditions</a> | <a href="#">Privacy Policy</a></p>
  </div>

  <a href="#top" class="back-to-top" title="Back to top">
    <i class="fas fa-arrow-up"></i>
  </a>
</footer>

  <script src="script.js"></script>
  <script src="index.js"></script>
</body>
</html>
