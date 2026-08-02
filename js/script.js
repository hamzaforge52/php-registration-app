// =============================
// HamzaStore JavaScript
// Version 1.0
// =============================

// Wait until the webpage is fully loaded
document.addEventListener("DOMContentLoaded", () => {

    console.log("Welcome to HamzaStore!");

    // =============================
    // SHOP NOW BUTTON
    // =============================

    const shopButton = document.querySelector(".hero button");

    shopButton.addEventListener("click", () => {

        document.querySelector(".products").scrollIntoView({

            behavior: "smooth"

        });

    });


    // =============================
    // PRODUCT CARD ANIMATION
    // =============================

    const cards = document.querySelectorAll(".card");

    cards.forEach(card => {

        card.addEventListener("mouseenter", () => {

            card.style.transform = "translateY(-15px) scale(1.03)";

        });

        card.addEventListener("mouseleave", () => {

            card.style.transform = "translateY(0px) scale(1)";

        });

    });


    // =============================
    // NAVBAR SHADOW ON SCROLL
    // =============================

    const header = document.querySelector("header");

    window.addEventListener("scroll", () => {

        if(window.scrollY > 50){

            header.style.boxShadow = "0 8px 20px rgba(0,0,0,0.15)";

        }

        else{

            header.style.boxShadow = "0 3px 10px rgba(0,0,0,.08)";

        }

    });

});