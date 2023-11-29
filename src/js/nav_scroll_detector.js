
/*
|--------------------------------------------------
| Add a "scrolled" class to the nav to make it a little smaller when scrolled
|--------------------------------------------------
*/
document.addEventListener("DOMContentLoaded", () => {

    // Trigger on page load
    toggleScrolledClass();
    nav_bar_height();


    // Trigger when scrolling
    document.addEventListener('scroll', () => {
        toggleScrolledClass();
        nav_bar_height();
    });

    // Trigger when resizing window
    window.addEventListener('resize', () => {
        toggleScrolledClass();
        nav_bar_height();
    });


    function toggleScrolledClass() {
        const scrollAmountFromTop = document.querySelector("html").scrollTop;
        const mainNavEl = document.querySelector("header");

        if (scrollAmountFromTop > 50 && mainNavEl) {
            //add class to header element
            mainNavEl.classList.add("scrolled");
        }
        else {
            // we're at the top, so can remove the class
            mainNavEl.classList.remove("scrolled");
        }
    }


    function nav_bar_height() {
        const bodyEl = document.querySelector("body");
        const mainNavEl = document.querySelector("header > *");
        const mainNavHeight = mainNavEl.clientHeight

        // Adding this on the body so all elements have access to this info
        bodyEl.style.setProperty(
            "--nav-bar-height",
            `${mainNavHeight}px`
        );
    }
});
