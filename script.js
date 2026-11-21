/* =========================================================
   DMCC Logistic | script.js
   1. Navbar shadow   2. Footer year   3. Quote form
   4. GSAP animations 
   ========================================================= */


/* ---------- 1. Add a shadow to the navbar when the page scrolls ---------- */
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", function () {
  if (window.scrollY > 20) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});


/* ---------- 2. Show the current year in the footer ---------- */
document.getElementById("year").textContent = new Date().getFullYear();


/* ---------- 3. Quote form ----------
   The browser checks the "required" fields for us.
   When everything is filled in, this opens the visitor's email app
   with the details ready to send. (Later we can connect a real form plugin.) */
const form = document.getElementById("quoteForm");

form.addEventListener("submit", function (event) {
  event.preventDefault();

  const body =
    "Name: " + document.getElementById("name").value + "\n" +
    "Phone: " + document.getElementById("phone").value + "\n" +
    "Email: " + document.getElementById("email").value + "\n" +
    "Vehicle: " + document.getElementById("vehicle").value + "\n" +
    "Route: " + document.getElementById("route").value + "\n" +
    "Cargo details: " + document.getElementById("message").value;

  const subject = "Quote request: " + document.getElementById("route").value;

  window.location.href =
    "mailto:basant.tomar@dmcclogistic.com" +
    "?subject=" + encodeURIComponent(subject) +
    "&body=" + encodeURIComponent(body);
});


/* ---------- 4. GSAP animations ----------
   gsap.from(target, { ...start values... })
   means: "start from these values and animate to how it looks normally". */

// Skip animations if the visitor turned on "reduce motion", or if GSAP did not load
const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

if (window.gsap && window.ScrollTrigger && !reduceMotion) {

  gsap.registerPlugin(ScrollTrigger);

  // --- Hero: items appear one after another when the page loads ---
  gsap.from(".hero-title",   { y: 50, opacity: 0, duration: 1 });
  gsap.from(".hero-text",    { y: 40, opacity: 0, duration: 1, delay: 0.3 });
  gsap.from(".hero-buttons", { y: 40, opacity: 0, duration: 1, delay: 0.6 });
  gsap.from(".hero-img",     { scale: 1.15, duration: 2 });
  gsap.from(".stats-box",    { y: 60, opacity: 0, duration: 1, delay: 0.9 });

  // --- Scroll animations: play when the element comes into view ---
  // Slide up
  gsap.utils.toArray(".reveal-up").forEach(function (item) {
    gsap.from(item, {
      y: 50, opacity: 0, duration: 1,
      scrollTrigger: { trigger: item, start: "top 85%" }
    });
  });

  // Slide in from the left
  gsap.utils.toArray(".reveal-left").forEach(function (item) {
    gsap.from(item, {
      x: -60, opacity: 0, duration: 1,
      scrollTrigger: { trigger: item, start: "top 85%" }
    });
  });

  // Slide in from the right
  gsap.utils.toArray(".reveal-right").forEach(function (item) {
    gsap.from(item, {
      x: 60, opacity: 0, duration: 1,
      scrollTrigger: { trigger: item, start: "top 85%" }
    });
  });

  // --- Groups of cards: appear one by one (stagger) ---
  // Note: we animate the Bootstrap column AROUND each card, because the cards
  // already have their own hover animation in CSS and the two would clash.
  function cardsOneByOne(selector) {
    gsap.utils.toArray(selector).forEach(function (card, index) {
      gsap.from(card, {
        y: 40, opacity: 0, duration: 0.8,
        delay: (index % 3) * 0.1,            // cards in the same row come slightly one after another
        scrollTrigger: { trigger: card, start: "top 90%" }
      });
    });
  }

  cardsOneByOne(".vehicles > div");
  cardsOneByOne(".industry-row > div");
  cardsOneByOne(".pillars > div");
  cardsOneByOne(".people > div");
  cardsOneByOne(".office");

  // --- Fleet length bars grow from 0 to their own width ---
  gsap.from(".bar", {
    width: 0, duration: 1.2, stagger: 0.15,
    scrollTrigger: { trigger: ".length", start: "top 85%" }
  });

   window.addEventListener("load", function () {
    ScrollTrigger.refresh();
  });
}
