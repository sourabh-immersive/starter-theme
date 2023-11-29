document.addEventListener("DOMContentLoaded", () => {
  // console.log("Accordions file loaded");

  // Taken from https://www.w3schools.com/howto/howto_js_accordion.asp
  // And modified
  const accordionEls = document.querySelectorAll(".accordions .accordion");

  if (accordionEls) {
    // Only run if there are accordions on page

    accordionEls.forEach((accordion) => {
      // Loop through all accordions and add a click event
      accordion.addEventListener("click", toggleAccordion);
    });

    function closeAllAccordions() {
      accordionEls.forEach((accordion) => {
        // Loop through all accordions and remove the active class

        accordion.classList.remove("active");
        const panel = accordion
          .closest(".single_accordion")
          .querySelector(".panel");

        // Remove these line if you want to keep the panel open
        panel.style.maxHeight = null;
      });
    }

    function toggleAccordion(event) {
      // Close all first
      closeAllAccordions();

      const accordion = event.target;
      accordion.classList.toggle("active");
      const panel = accordion
        .closest(".single_accordion")
        .querySelector(".panel");

      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }

      //////
      //
      // Update the url so that each accordion is jump-able to
      //
      //////
      const accordionId =
        accordion.closest(".single_accordion").attributes["id"].nodeValue;
      //   console.log(accordionId);
      // window.location.hash = accordionId;
      history.pushState({}, "", `#${accordionId}`);
    }
  }
});
