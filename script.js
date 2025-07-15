document.addEventListener('DOMContentLoaded', function() {
    // Section navigation
    const sections = document.querySelectorAll('.fullpage-section');
    const dots = document.querySelectorAll('.dot');
    let currentSection = 0;
    const sectionCount = sections.length;

    // Auto-rotate every 5 seconds
    const rotationInterval = setInterval(() => {
        currentSection = (currentSection + 1) % sectionCount;
        showSection(currentSection);
    }, 5000);

    // Initialize first section
    showSection(currentSection);

    // Dot navigation
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            const sectionIndex = parseInt(this.getAttribute('data-section'));
            showSection(sectionIndex);
        });
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowDown' && currentSection < sections.length - 1) {
            showSection(currentSection + 1);
        } else if (e.key === 'ArrowUp' && currentSection > 0) {
            showSection(currentSection - 1);
        }
    });

        // Arrow buttons
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
            if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                if (currentSection > 0) {
                showSection(currentSection - 1);
                resetRotation();
                }
            });
            }

            if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                if (currentSection < sectionCount - 1) {
                showSection(currentSection + 1);
                resetRotation();
                }
            });
            }

    function showSection(index) {
        sections.forEach((section, i) => {
            section.classList.toggle('active', i === index);
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
        currentSection = index;
    }

        function resetRotation() {
        clearInterval(rotationInterval);
        rotationInterval = setInterval(() => {
            currentSection = (currentSection + 1) % sectionCount;
            showSection(currentSection);
        }, 5000);
    }



    // Dialog functionality
    const openButton = document.querySelector("#openMenu");
    const dialog = document.querySelector("dialog");

    openButton.addEventListener("click", (e) => {
        e.preventDefault();
        dialog.showModal();
    });
 
    dialog.addEventListener("click", ({ target }) => {
        if (target.nodeName === "DIALOG") {
            dialog.close("dismiss");
        }
    });
});