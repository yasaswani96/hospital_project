/*=========================================
        GOVERNMENT HOSPITAL
        script.js
=========================================*/

// ==========================
// Active Navigation
// ==========================

const navLinks = document.querySelectorAll("nav ul li a");

navLinks.forEach(link => {

    link.addEventListener("click", function(){

        navLinks.forEach(item => item.classList.remove("active"));

        this.classList.add("active");

    });

});

// ==========================
// Smooth Scroll
// ==========================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function(e){

        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));

        if(target){

            target.scrollIntoView({

                behavior:"smooth"

            });

        }

    });

});

// ==========================
// Hero Fade Animation
// ==========================

window.addEventListener("load",()=>{

    const hero=document.querySelector(".hero");

    hero.style.opacity="0";

    hero.style.transition="1.2s";

    setTimeout(()=>{

        hero.style.opacity="1";

    },300);

});

// ==========================
// Card Animation
// ==========================

const cards=document.querySelectorAll(".service-card,.doctor-card,.department-card");

cards.forEach((card,index)=>{

    card.style.opacity="0";

    card.style.transform="translateY(40px)";

    card.style.transition="0.8s";

    setTimeout(()=>{

        card.style.opacity="1";

        card.style.transform="translateY(0)";

    },300*index);

});

// ==========================
// Emergency Button Alert
// ==========================

const emergency=document.querySelector(".red");

if(emergency){

    emergency.addEventListener("click",()=>{

        alert("Emergency Number : 108");

    });

}

// ==========================
// Footer Year
// ==========================

const year=new Date().getFullYear();

const copy=document.querySelector(".copyright");

if(copy){

    copy.innerHTML="© "+year+" Government Hospital Information System. All Rights Reserved.";

}