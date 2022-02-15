//scroll top JS

//Get the button
let mybutton = document.getElementById("btn-back-to-top");
let navbar = document.getElementById("navbarCollapse");
let menu = document.getElementsByClassName("navbar-toggler");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
        navbar.classList.remove('show');
        for(var i=0;i<=5;i++){
            menu.classList.add('bg-warning');
            menu.classList.remove('bg-warning');
                }
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//loader
var preloader = document.getElementById("loading");

function myFunction() {
    preloader.style.display = 'none';
    preloader.setAttribute("class", "invisible");
    
};




        


