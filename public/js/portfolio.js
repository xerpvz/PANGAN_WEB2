// ==========================
// TIMELINE REVEAL
// ==========================
const timelineItems = document.querySelectorAll(".timeline-item");

function revealTimeline() {
    timelineItems.forEach(item => {
        let position = item.getBoundingClientRect().top;
        if (position < window.innerHeight - 100) {
            item.classList.add("show");
        }
    });
}

window.addEventListener("scroll", revealTimeline);
revealTimeline();

// ==========================
// SKILL CIRCLES
// ==========================
document.addEventListener("DOMContentLoaded", () => {
    const circles = document.querySelectorAll(".skill-circle");

    const revealSkills = () => {
        circles.forEach(circle => {
            const rect = circle.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                let percent = circle.getAttribute("data-percent");
                let strokeValue = (440 - (440 * percent) / 100);

                let foreground = circle.querySelector("svg circle:nth-child(2)");
                foreground.style.strokeDashoffset = strokeValue;

                circle.querySelector(".skill-value").innerText = percent + "%";
            }
        });
    };

    window.addEventListener("scroll", revealSkills);
});

// ==========================
// TYPING EFFECT
// ==========================
document.addEventListener("DOMContentLoaded", () => {
    const target = document.querySelector(".typing-loop span");
    const text = target.textContent;
    let index = 0;
    let isDeleting = false;

    function typeEffect() {
        if (!isDeleting) {
            target.textContent = text.substring(0, index++);
            if (index > text.length) {
                isDeleting = true;
                setTimeout(typeEffect, 1200);
                return;
            }
        } else {
            target.textContent = text.substring(0, index--);
            if (index < 0) {
                isDeleting = false;
                index = 0;
            }
        }
        setTimeout(typeEffect, isDeleting ? 80 : 120);
    }

    typeEffect();
});

// ==========================
// NAVBAR ACTIVE LINK
// ==========================
const navLinks = document.querySelectorAll("nav a");
const sections = document.querySelectorAll("section");

function removeActive() {
    navLinks.forEach(link => link.classList.remove("active"));
}

function setActive() {
    let scrollPos = window.scrollY + window.innerHeight / 2;
    sections.forEach(section => {
        if (scrollPos >= section.offsetTop && scrollPos < section.offsetTop + section.offsetHeight) {
            removeActive();
            const id = section.getAttribute("id");
            const activeLink = document.querySelector(`nav a[href="#${id}"]`);
            if (activeLink) activeLink.classList.add("active");
        }
    });
}

window.addEventListener("scroll", setActive);
window.addEventListener("load", setActive);

// ==========================
// SCROLL ANIMATIONS (FADE-IN / SLIDE-UP)
// ==========================
const scrollElements = document.querySelectorAll("section, .work-card, .skill-circle, .about-image, .about-text");

function elementInView(el, offset = 100) {
    const elementTop = el.getBoundingClientRect().top;
    return elementTop < window.innerHeight - offset;
}

function displayScrollElement(el, delay = 0) {
    el.style.transitionDelay = delay + "s";
    el.classList.add("scrolled");
}

function handleScrollAnimation() {
    scrollElements.forEach((el, index) => {
        if (elementInView(el, 150)) {
            displayScrollElement(el, index * 0.1); // stagger effect
        }
    });
}

window.addEventListener("scroll", handleScrollAnimation);
window.addEventListener("load", handleScrollAnimation);

document.addEventListener("DOMContentLoaded", () => {
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const lightboxCaption = document.getElementById("lightbox-caption");
    const closeBtn = document.querySelector(".lightbox .close");
    const projectImages = document.querySelectorAll(".work-img");
    const projectButtons = document.querySelectorAll(".work-card .btn");

    // Open lightbox when clicking project image
    projectImages.forEach(img => {
        img.addEventListener("click", () => {
            lightbox.style.display = "block";
            const fullSrc = img.getAttribute("data-full") || img.src;
            lightboxImg.src = fullSrc;
            lightboxCaption.textContent = img.alt;
        });
    });

    // Open lightbox when clicking "View Project" button
    projectButtons.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            const card = btn.closest(".work-card");
            const img = card.querySelector(".work-img");
            if(img){
                lightbox.style.display = "block";
                const fullSrc = img.getAttribute("data-full") || img.src;
                lightboxImg.src = fullSrc;
                lightboxCaption.textContent = img.alt;
            }
        });
    });

    // Close lightbox
    closeBtn.addEventListener("click", () => {
        lightbox.style.display = "none";
    });

    lightbox.addEventListener("click", (e) => {
        if (e.target === lightbox) {
            lightbox.style.display = "none";
        }
    });
});

window.addEventListener("scroll", () => {
    const header = document.querySelector("header");
    if (window.scrollY > 50) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});