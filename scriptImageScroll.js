let derniere_position_de_scroll_connue = 0;
window.addEventListener("scroll", function () {
        derniere_position_de_scroll_connue = window.scrollY;
        console.log("derniere_position_de_scroll_connue ", derniere_position_de_scroll_connue);
        const firstFig = document.querySelector("#firstPresImage");

        if ((window.scrollY >= 860 /*&& window.scrollY <= 2700*/) && !firstFig.classList.contains("imageScroll") && window.matchMedia("(min-width: 426px)").matches) {
            firstFig.classList.add("imageScroll");
          /*  if (firstFig.classList.contains("imageRemoveScroll")) {
                firstFig.classList.remove("imageRemoveScroll");
            }*/
        }
        /*if ((window.scrollY <= 2000 || window.scrollY >= 2800) &&
            !firstFig.classList.contains("imageRemoveScroll") && firstFig.classList.contains("imageScroll")) {
            firstFig.classList.add("imageRemoveScroll");
            firstFig.classList.remove("imageScroll");
        }*/

        const secondFig = document.querySelector("#secondPresImage");

        if (window.scrollY >= 1400 && !secondFig.classList.contains("imageScrollBis") && window.matchMedia("(min-width: 426px)").matches) {
            secondFig.classList.add("imageScrollBis");
        }
    }
);
