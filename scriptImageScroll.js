let derniere_position_de_scroll_connue = 0;
window.addEventListener("scroll", function () {
        derniere_position_de_scroll_connue = window.scrollY;
        console.log("derniere_position_de_scroll_connue ", derniere_position_de_scroll_connue);
        const firstFig = document.querySelector("#firstPresImage");

        if ((window.scrollY >= 2100 /*&& window.scrollY <= 2700*/) && !firstFig.classList.contains("imageScroll")) {
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

        if (window.scrollY >= 2600 && !secondFig.classList.contains("imageScrollBis")) {
            secondFig.classList.add("imageScrollBis");
        }
    }
);
