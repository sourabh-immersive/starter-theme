document.addEventListener("DOMContentLoaded", () => {
  // console.log("Accordions file loaded");

  /*
    |--------------------------------------------------
    | Hamburger Button Animation
    |--------------------------------------------------
    */

  // Grab the Hamburger Button Element
  const hamburgerButtonEls = document.querySelectorAll(
    "button.hamburger_toggle"
  );
  const HtmlEl = document.querySelector("html");
  const hamburgerContentEl = document.querySelector(
    "body .full-menu.hamburger-content"
  );

  // Only run if there is one (there should always be one)
  if (hamburgerButtonEls) {
    hamburgerButtonEls.forEach((hamburgerButtonEl) => {
      // Run function when clicked
      hamburgerButtonEl.addEventListener("click", toggleMenu);
    }); //if (hamburgerButtonEls)

    function toggleMenu() {
      hamburgerButtonEls.forEach((hamburgerButtonEl) => {
        // Needed to have a first-load class so animation doesn't run on page load
        hamburgerButtonEl.classList.remove("first-load");
        hamburgerContentEl.classList.remove("hidden");

        hamburgerButtonEl.classList.toggle("toggled");

        if (hamburgerButtonEl.classList.contains("toggled")) {
          // Menu is Open
          HtmlEl.classList.add("menu-open");

          window.scrollTo({
            // top: 0,
            // left: 0,
            // behavior: 'smooth'
          });

          // change Aria Label
          hamburgerButtonEl.ariaLabel = "Close Menu";
        } else {
          // Menu is Closed
          HtmlEl.classList.remove("menu-open");

          setTimeout(function () {
            // After slide out animation is complete, display none
            hamburgerContentEl.classList.add("hidden");
          }, 300);

          // change Aria Label
          hamburgerButtonEl.ariaLabel = "Open the menu";
        }
      });
    }
  }
});
