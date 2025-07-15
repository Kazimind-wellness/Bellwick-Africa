const tabData = {
  compliance: {
    title: "Bellwick Africa at a Glance",
    description:
      "Bellwick Africa LLP (“Bellwick”) is a leading consultancy firm based in Nairobi, providing accounting, audit, tax, and business advisory services to businesses and individuals. Established in 2020, we combine professional expertise, technology, and a deep understanding of our clients' needs to deliver high-quality, effective, and responsive solutions.",
    image: "bellwick.jpg",
    link: "https://example.com/compliance"
  },
  outsourcing: {
    title: "Our Beleive",
    description:
      "We believe that success comes from collaboration. Our team of reliable, approachable, and proactive professionals is committed to more than just meeting your needs—we work alongside you to help you achieve your goals. Running a business can be challenging but having a trusted advisor to provide guidance and act as a sounding board makes all the difference.",
    image: "believe.jpg",
    link: "https://example.com/outsourcing"
  },
  risk: {
    title: "Our Advisors",
    description:
      "Our business improvement advisors offer practical and strategic insights to drive growth, enhance efficiency, and support long-term success.",
    image: "advice.jpg",
    link: "https://example.com/risk"
  },
  cyber: {
    title: "Welcome",
    description:
      "We welcome the opportunity to connect and build a lasting professional relationship based on a deep understanding of your business.",
    image: "welcome.jpg",
    link: "https://example.com/cyber"
  },
  strategy: {
    title: "Our Services",
    description:
      "Bellwick Africa LLP provides expert audit, tax, accounting, and advisory services tailored to support your business goals. We combine technical precision with industry insight to deliver practical solutions that drive growth and ensure compliance.",    
    image: "services.jpg",
    link: "https://example.com/strategy"
  }
};

document.querySelectorAll(".tab").forEach(tab => {
  tab.addEventListener("click", () => {
    document.querySelector(".tab.active").classList.remove("active");
    tab.classList.add("active");

    const key = tab.dataset.tab;
    const data = tabData[key];

    document.getElementById("content-title").textContent = data.title;
    document.getElementById("content-description").textContent = data.description;
    document.getElementById("content-image").src = data.image;
    document.getElementById("content-button").href = data.link;
  });
});


  document.addEventListener('DOMContentLoaded', function () {
    const servicesToggle = document.getElementById('servicesToggle');
    const servicesLinks = document.getElementById('servicesLinks');

    servicesToggle.addEventListener('click', function (e) {
      e.preventDefault();
      servicesLinks.style.display = (servicesLinks.style.display === 'none') ? 'block' : 'none';
    });
  });