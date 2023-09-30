const message = "Votre réservation est bien prise en compte. A bientôt !"

document.querySelector("form");
document.addEventListener("submit", function (event) {
    event.preventDefault();
    alert(message);
}
);