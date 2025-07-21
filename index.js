const tabData = {
  compliance: {
    title: "Bellwick Africa at a Glance",
    description: "Bellwick Africa LLP (“Bellwick”) is a leading consultancy firm based in Nairobi, providing accounting, audit, tax, and business advisory services to businesses and individuals. Established in 2020, we combine professional expertise, technology, and a deep understanding of our clients' needs to deliver high-quality, effective, and responsive solutions.",
    image: "bellwick.jpg",
    link: "https://example.com/compliance"
  },
  outsourcing: {
    title: "Our Belief",
    description: "We believe that success comes from collaboration. Our team of reliable, approachable, and proactive professionals is committed to more than just meeting your needs—we work alongside you to help you achieve your goals. Running a business can be challenging but having a trusted advisor to provide guidance and act as a sounding board makes all the difference.",
    image: "believe.jpg",
    link: "https://example.com/outsourcing"
  },
  risk: {
    title: "Our Advisors",
    description: "Our business improvement advisors offer practical and strategic insights to drive growth, enhance efficiency, and support long-term success.",
    image: "advice.jpg",
    link: "https://example.com/risk"
  },
  cyber: {
    title: "Welcome",
    description: "We welcome the opportunity to connect and build a lasting professional relationship based on a deep understanding of your business.",
    image: "welcome.jpg",
    link: "https://example.com/cyber"
  },
  strategy: {
    title: "Our Services",
    description: "Bellwick Africa LLP provides expert audit, tax, accounting, and advisory services tailored to support your business goals. We combine technical precision with industry insight to deliver practical solutions that drive growth and ensure compliance.",    
    image: "services.jpg",
    link: "https://example.com/strategy"
  }
};

// Initialize Intersection Observer for container animation
const container = document.querySelector('.container');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('in-view');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

observer.observe(container);

// Tab switching functionality
document.querySelectorAll(".tab").forEach(tab => {
  tab.addEventListener("click", () => {
    // Remove active class from all tabs
    document.querySelectorAll(".tab").forEach(t => t.classList.remove("active"));
    
    // Add active class to clicked tab
    tab.classList.add("active");
    
    // Get tab data
    const key = tab.dataset.tab;
    const data = tabData[key];
    
    // Hide current content items
    document.querySelectorAll('.content-item').forEach(item => {
      item.classList.remove('active');
    });
    
    // After a short delay, update content and show new items
    setTimeout(() => {
      document.getElementById("content-title").textContent = data.title;
      document.getElementById("content-description").textContent = data.description;
      document.getElementById("content-image").src = data.image;
      
      // Show new content items with animation
      document.querySelectorAll('.content-item').forEach(item => {
        item.classList.add('active');
      });
    }, 600);
  });
});

// Initialize first tab content as active
window.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.content-item').forEach(item => {
    setTimeout(() => {
      item.classList.add('active');
    }, 500);
  });
});