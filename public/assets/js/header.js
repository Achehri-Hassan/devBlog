(function () {
  "use strict";

  var navbar = document.getElementById("navbar");
  var toggle = document.getElementById("navToggle");
  var links = document.getElementById("navLinks");
  if (!navbar || !toggle || !links) return;

  var DESKTOP_QUERY = window.matchMedia("(min-width: 901px)");

  function setOpen(open) {
    navbar.classList.toggle("is-open", open);
    toggle.setAttribute("aria-expanded", String(open));
    toggle.setAttribute("aria-label", open ? "Close menu" : "Open menu");
  }

  function isOpen() {
    return navbar.classList.contains("is-open");
  }

  // Open / close with the hamburger button
  toggle.addEventListener("click", function () {
    setOpen(!isOpen());
  });

  // Close when a link is clicked
  links.addEventListener("click", function (e) {
    if (e.target.closest("a")) setOpen(false);
  });

  // Close when clicking outside the header
  document.addEventListener("click", function (e) {
    if (isOpen() && !navbar.contains(e.target)) setOpen(false);
  });

  // Close with the Escape key and return focus to the button
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && isOpen()) {
      setOpen(false);
      toggle.focus();
    }
  });

  // Reset when the screen grows back to desktop size
  function onResize(e) {
    if (e.matches) setOpen(false);
  }
  if (DESKTOP_QUERY.addEventListener) {
    DESKTOP_QUERY.addEventListener("change", onResize);
  } else {
    DESKTOP_QUERY.addListener(onResize); // old Safari
  }
})();
