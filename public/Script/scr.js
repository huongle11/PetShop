'use strict';

const addEvenOnEl = function (elem, type, callback){
    if(elem.length > 1){
        for(let i =0; i < elem.length;i++){
            elem[i].addEventListener(type, callback);
        }
    }else{
        elem.addEventListener(type, callback);
    }
}

const navToggler = document.querySelector("[data-nav-toggler]");
const navbar = document.querySelector("[data-navbar]");
const navbarLink = document.querySelectorAll("[data-nav-link]");

const toggLeNavbar = function(){
    navbar.classList.toggle("active");
    navToggler.classList.toggle("active");
}

addEvenOnEl(navToggler,"click",toggLeNavbar);

const CloseNav = function(){
    navbar.classList.remove("active");
    navToggler.classList.remove("active");
}

addEvenOnEl(navbarLink,"click",CloseNav);

const header = document.querySelector("[data-header]");

const backtop = document.querySelector("[data-back-top-btn]");

const addEvenHeader = function(){
    if(window.scrollY > 80){
        header.classList.add("active");
        backtop.classList.add("active");
    }else{
        header.classList.remove("active");
        backtop.classList.remove("active");
    }
}

addEvenOnEl(window,"scroll", addEvenHeader);


