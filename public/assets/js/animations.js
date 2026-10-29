(function () {
  "use strict";

  var reduceMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
  ).matches;

  var REVEAL_GROUPS = [
    // home page
    { sel: ".hero__content > *", type: "up", step: 120, cycle: 10 },
    { sel: ".hero__image", type: "fade" },
    { sel: ".articles__head", type: "up" },
    { sel: ".card", type: "up", step: 100, cycle: 3 },

    // article page
    {
      sel: ".post__category, .post__title, .post__meta",
      type: "up",
      step: 90,
      cycle: 3,
    },
    { sel: ".post__image", type: "fade" },
    { sel: ".post__description", type: "up" },
    { sel: ".post__content", type: "up" },
    { sel: ".side-box", type: "up", step: 120, cycle: 2 },
    { sel: ".comments", type: "up" },
    { sel: ".comment", type: "up", step: 80, cycle: 5 },

    // footer (both pages)
    { sel: ".newsletter", type: "up" },
  ];

  function initReveal() {
    if (reduceMotion || !("IntersectionObserver" in window)) return;

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -6% 0px" },
    );

    REVEAL_GROUPS.forEach(function (group) {
      var items = document.querySelectorAll(group.sel);
      items.forEach(function (el, i) {
        el.classList.add("reveal");
        if (group.type === "fade") el.classList.add("reveal--fade");
        var delay = group.step ? (i % (group.cycle || 1)) * group.step : 0;
        el.style.setProperty("--reveal-delay", delay + "ms");
        observer.observe(el);
      });
    });
  }

  function initRipple() {
    if (reduceMotion) return;

    var buttons = document.querySelectorAll(
      ".btn-orange, .newsletter__form button",
    );
    buttons.forEach(function (btn) {
      btn.classList.add("has-ripple");
      btn.addEventListener("click", function (e) {
        var rect = btn.getBoundingClientRect();
        var size = Math.max(rect.width, rect.height) * 2;
        // keyboard clicks have no pointer position -> use the centre
        var x = e.detail === 0 ? rect.width / 2 : e.clientX - rect.left;
        var y = e.detail === 0 ? rect.height / 2 : e.clientY - rect.top;

        var ripple = document.createElement("span");
        ripple.className = "ripple";
        ripple.style.width = ripple.style.height = size + "px";
        ripple.style.left = x - size / 2 + "px";
        ripple.style.top = y - size / 2 + "px";
        btn.appendChild(ripple);
        ripple.addEventListener("animationend", function () {
          ripple.remove();
        });
      });
    });
  }

  function initCopyLink() {
    var btn = document.getElementById("copyLink");
    if (!btn) return;

    function done() {
      btn.classList.add("is-copied");
      setTimeout(function () {
        btn.classList.remove("is-copied");
      }, 1600);
    }

    function fallback(text) {
      var area = document.createElement("textarea");
      area.value = text;
      area.style.position = "fixed";
      area.style.opacity = "0";
      document.body.appendChild(area);
      area.select();
      try {
        document.execCommand("copy");
        done();
      } catch (err) {}
      area.remove();
    }

    btn.addEventListener("click", function () {
      var url = window.location.href.split("#")[0];
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(url).then(done, function () {
          fallback(url);
        });
      } else {
        fallback(url);
      }
    });
  }

  function initScrollUI() {
    var bar = null;
    if (document.body.classList.contains("article-page")) {
      bar = document.createElement("div");
      bar.className = "read-progress";
      bar.setAttribute("aria-hidden", "true");
      document.body.appendChild(bar);
    }

    var topBtn = document.createElement("button");
    topBtn.type = "button";
    topBtn.className = "back-to-top";
    topBtn.setAttribute("aria-label", "Back to top");
    topBtn.innerHTML =
      '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" ' +
      'stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' +
      '<line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>';
    document.body.appendChild(topBtn);

    topBtn.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: reduceMotion ? "auto" : "smooth" });
    });

    var ticking = false;
    function update() {
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      var max = document.documentElement.scrollHeight - window.innerHeight;

      if (bar) {
        var progress = max > 0 ? Math.min(scrollTop / max, 1) : 0;
        bar.style.transform = "scaleX(" + progress + ")";
      }
      topBtn.classList.toggle("is-shown", scrollTop > 500);
      ticking = false;
    }

    window.addEventListener(
      "scroll",
      function () {
        if (!ticking) {
          window.requestAnimationFrame(update);
          ticking = true;
        }
      },
      { passive: true },
    );
    update();
  }

  function init() {
    initReveal();
    initRipple();
    initCopyLink();
    initScrollUI();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
